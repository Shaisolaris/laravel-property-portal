<?php

namespace Modules\School\app\Http\Requests;

use App\Rules\UniqueFieldRule;
use Illuminate\Http\UploadedFile;
use App\Rules\UniqueArrayFieldRule;
use Illuminate\Foundation\Http\FormRequest;
use Modules\School\app\Models\EiClassSubject;

class UpdateOrCreateEiClassSubjectRequest extends FormRequest
{
    public function rules(): array
    {
        $eiClassId = $this->route('eiClass')?->value('id');
        $subjects = request()->subjects;

        $rules = [
            'subjects' => 'required|array',
            'subjects.*.language' => 'required|string',
            'subjects.*.description' => 'required|string|max:200',
            'subjects.*.teachers' => 'required|exists:users,id',
        ];

        foreach ($subjects as $index => $subject) {
            $uuid = $subject['uuid'] ?? null;
            $subjectRules = ['required', 'string', 'min:2', 'max:40'];

            if (is_null($uuid)) {
                $subjectRules[] = new UniqueFieldRule(EiClassSubject::class, 'name', 'class_id', $eiClassId);
                $subjectRules[] = new UniqueArrayFieldRule($subjects, 'name');
            }

            $rules["subjects.$index.name"] = $subjectRules;

            $subjectImageRules = 'nullable';

            if (empty($subject['image'])) {
                $subjectImageRules = 'required';
            }

            if ($subject['image'] instanceof UploadedFile) {
                $subjectImageRules = 'file|mimes:png,jpeg,jpg,webp|max:1024';
            }

            $rules["subjects.$index.image"] = $subjectImageRules;
        }

        return $rules;
    }


    public function authorize(): bool
    {
        return true;
    }
}
