<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Validation\ValidationRule;

class HasOneTrueValueRule implements ValidationRule
{
    public function __construct(protected array $answers, protected string $key)
    {

    }


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $flattenedArray = array_reduce(Arr::pluck($this->answers, 'answers'), function ($carry, $item) {
            return array_merge($carry, $item);
        }, []);

        $hasOneTrueValue = !in_array(true, Arr::pluck($flattenedArray, $this->key));

        if ($hasOneTrueValue && !empty($this->answers)) {
            $fail("The correct answer must contained.");
        }
    }
}
