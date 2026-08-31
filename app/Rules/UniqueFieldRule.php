<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueFieldRule implements ValidationRule
{
    public function __construct(
        protected mixed  $model,
        protected string $originFieldName,
        protected string $fieldName,
        protected mixed  $fieldValue,
        protected array $additionalFields = []
    ) {
    }


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->checkField($value)) {
            $fail(__('validation.unique', ['attribute' => $attribute]));
        }
    }


    private function checkField($value): bool
    {
        return resolve($this->model)->where([
            $this->originFieldName => $value,
            $this->fieldName => $this->fieldValue,
            ...$this->additionalFields
        ])->exists();
    }
}
