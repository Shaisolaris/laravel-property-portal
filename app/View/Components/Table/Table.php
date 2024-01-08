<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    const HEADER_INSTRUCTOR_SCHOOL_ASSIGNMENTS = 'instructor_school_assignments';


    public function __construct(
        public string $keyHeader,
        public mixed $body = null,
        public array $headItems = [],
        public mixed $pagination = null,
        public mixed $filterSort = null,
        public string $type = 'rounded-tr-border',
    )
    {
        $this->headItems = $this->setHeadItems();
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.table.table');
    }


    private function setHeadItems(): array
    {
        return match ($this->keyHeader) {
            self::HEADER_INSTRUCTOR_SCHOOL_ASSIGNMENTS => [
               "instructor_school_assignments.student_name",
               "instructor_school_assignments.deadline",
               "instructor_school_assignments.score",
               "instructor_school_assignments.status",
               "instructor_school_assignments.action",
            ],
            default => [

            ],
        };
    }
}
