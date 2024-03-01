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
            'first_name' => 'required|string|min:2|max:50',
            'last_name' => 'required|string|min:2|max:50',
            'address' => 'required|string|min:2|max:150',
            'country_id' => 'required|exists:countries,id',
            'role' => 'required',
            'state' => 'required|max:100',
            'city' => 'required|string|max:100',
            'zip_code' => 'required',
            'institution_id' => Rule::exists(EducationInstitution::class, 'id'),
            'phone' => [$this->get('phone') ? 'max:16' : 'nullable'],
            'email' => ['required', 'string', 'max:40', 'email', 'email:rfc,dns', !$this->checkSecurity() ? 'unique:users,email' : ''],
            'password' => ['required', 'string', Password::default()],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function checkSecurity(): false|User
    {
        /** @var User $user */
        if ($user = User::whereEmail($this->email)->first()) {
            if (!$user->hasVerifiedEmail() || !$user->isOccupations() || !$user->isUserHaveAvatarBio() || !$user->isDetailData()) {
                return $user;
            }
        }

        return false;
    }
}
