<?php

namespace Modules\Auth\app\Http\Requests;

use App\Enums\User\UserTeachingLevel;
use Illuminate\Foundation\Http\FormRequest;

class OccupationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'occupations.*' =>   'required|array',
            'experience_level' =>   'required|in:'.UserTeachingLevel::implode(),
        ];
    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }
}
