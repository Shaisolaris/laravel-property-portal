<?php

namespace Modules\Auth\app\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class CreateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'address' => 'required|string|min:2|max:255',
            'country' => 'required|max:255',
            'state' => 'required|max:255',
            'role' => 'required',
            'educational_level' => 'required',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|numeric|digits_between:2,15',
            'phone' => [$this->get('phone') ? 'max:16' : 'nullable'],
            'email' => ['required','string','max:40','email','email:rfc,dns',!$this->checkSecurity() ? 'unique:users' : ''],
            'password' => ['required', 'string', Password::default()],
        ];
    }

    public function authorize(): bool
    {
        return true; //
    }

    public function checkSecurity()
    {
        if ($user = User::whereEmail($this->email)->first()) {
            if(!$user->hasVerifiedEmail() || !$user->isOccupations() || !$user->isUserHaveAvatarBio() || !$user->isDetailData()) {
                return $user;
            }
        }

        return false;
    }
}
