<?php

namespace Modules\School\app\Http\Requests;

use Carbon\Carbon;
use App\Rules\UniqueFieldRule;
use Illuminate\Foundation\Http\FormRequest;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Enums\EiClassStatusEnum;

class UpdateOrCreateEiClassRequest extends FormRequest
{
    public function prepareForValidation(): void
    {
        $this->merge([
            'ei_id' => $this->user()?->institution?->institution?->id,
            'status' => EiClassStatusEnum::Inactive()->value
        ]);
    }


    public function rules(): array
    {
        $now = Carbon::now();
        $eiClass = $this->route('eiClass');

        $rules = [
            'name' => ['required', 'string', 'min:2', 'max:40', !$this->input('uuid') ? new UniqueFieldRule(EiClass::class, 'name', 'ei_id', $this->input('ei_id')) : ''],
            'price' => 'required|numeric|min:2|decimal:0,2|max:9999999999999999',
            'hourly_rate' => 'required|numeric|min:1|lt:price|decimal:0,2',
            'capacity' => 'required|integer|min:1',
            'duration_lesson' => 'required|integer|min:10',
            'gradation_age_from' => 'required|integer|min:1',
            'gradation_age_to' => 'required|integer|min:2|gt:gradation_age_from',
            'language' => 'required|string',
            'description' => 'required|string|max:600',
            'start_date_at' => 'required|date|date|after:' . $now->format('Y-m-d'),
            'end_date_at' => 'required|date|date|after:' . $now->addDay()->format('Y-m-d'),
        ];

        if ($this->input('uuid')) {
            if ($this->carbonParse($eiClass->start_date_at) === $this->carbonParse($this->input('start_date_at'))) {
                $rules['start_date_at'] = 'required|date|date';
            }

            if ($this->carbonParse($eiClass->end_date_at) === $this->carbonParse($this->input('end_date_at'))) {
                $rules['end_date_at'] = 'required|date|date';
            }
        }

        return $rules;
    }


    private function carbonParse(mixed $value): string
    {
        return Carbon::parse($value)->format("Y-m-d");
    }

    public function authorize(): bool
    {
        return true;
    }
}
