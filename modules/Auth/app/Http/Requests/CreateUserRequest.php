<?php

namespace Modules\Auth\app\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;
use Modules\General\app\Models\EducationInstitution;

class CreateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'address' => 'required|string|min:2|max:255',
            'country_id' => 'required|exists:countries,id',
            'state' => 'required|max:255',
            'role' => 'required',
            'city' => 'required|string|max:255',
            'zip_code' => 'required',
            'institution_id' => Rule::exists(EducationInstitution::class, 'id'),
            'phone' => [$this->get('phone') ? 'max:16' : 'nullable'],
            'email' => ['required', 'string', 'max:40', 'email', 'email:rfc,dns', !$this->checkSecurity() ? 'unique:users' : ''],
            'password' => ['required', 'string', Password::default()],
        ];
    }

    public function authorize(): bool
    {
        return true; //
    }

    public function checkSecurity(): bool
    {
        if ($user = User::whereEmail($this->email)->first()) {
            if (!$user->hasVerifiedEmail() || !$user->isOccupations() || !$user->isUserHaveAvatarBio() || !$user->isDetailData()) {
                return boolval($user);
            }
        }

        return false;
    }
}
