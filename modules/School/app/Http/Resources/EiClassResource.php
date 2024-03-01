<?php

namespace Modules\School\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\School\app\Models\EiClass;

/** @mixin EiClass */
class EiClassResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        if(is_null($this->uuid)) {
            return [];
        }

        return [
            //TODO:: сделай отдельный ресурс под select с id, мне тут не нужен он
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'slug' => $this->slug,
            'status' => $this->status?->label,
            'price' => $this->price,
            'hourly_rate' => $this->hourly_rate,
            'show_price' => "$" . Number::format($this->price),
            'capacity' => $this->capacity,
            'duration_lesson' => $this->duration_lesson,
            'age_to' => $this->gradation_age_to,
            'age_from' => $this->gradation_age_from,
            'language' => $this->language?->value,
            'language_label' => $this->language?->label,
            'description' => $this->description,
            'subjects_count' => $this->subjects_count,
            'students_count' => $this->students_count,
            'instructors_count' => $this->instructors_count,
            'reviews_count' => $this->reviews_count,
            'rating' => $this->rating,
            'end_date_at' => $this->end_date_at,
            'start_date_at' => $this->start_date_at,
            'created_at' => $this->created_at,
        ];
    }
}
