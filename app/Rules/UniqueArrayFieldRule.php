<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueArrayFieldRule implements ValidationRule
{
    public function __construct(protected array $data, protected string $fieldName)
    {
    }


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->checkArray($value)) {
            $fail(__('validation.unique', ['attribute' => $attribute]));
        }
    }

    private function checkArray($value): bool
    {
        $data = Arr::pluck($this->data, $this->fieldName);

        return count($data) > count(Arr::unique($data));
    }
}
