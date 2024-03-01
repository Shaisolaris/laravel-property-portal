<?php

namespace Modules\Assignment\app\Services;

use Illuminate\Http\Request;
use Modules\General\app\Models\StudentHomework;
use Modules\General\app\Models\StudentHomeworkScore;

class AssignmentsService
{
    public bool $status = false;
    public string $message;

    public function __construct(Request $request)
    {
        try {
            $this->{auth()->user()->roleName}($request);
        } catch (\Exception $exception) {
            $this->message = __('success.error_system');
            $this->status = false;
        }
    }

    protected function student($request): void
    {
        /** @var StudentHomework $homework */
        $homework = $this->findHomework($request);

        if($homework->status) {
            $this->status = $homework->toConsideration($request->get('report'));
        }
    }

    protected function instructor($request): void
    {
        /** @var StudentHomework $homework */
        $homework = $this->findHomework($request);

        if($homework->status) {
            if($request->functionality === 'extra-time') {
                $this->status = $homework->increaseTime($request->end_work_datetime);
            } else {
                if($this->status = $homework->final($request->status)) {
                    $homework->setGrade($request);
                }
            }
        }
    }

    private function findHomework($request)
    {
        $homework = StudentHomework::firstWhere('uuid', $request->uuid);

        if(!$homework) {
            $this->status = false;
            $this->message = __('success.error_system');
        }

        return $homework;
    }
}
