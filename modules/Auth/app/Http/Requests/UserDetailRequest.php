<?php

namespace Modules\Auth\app\Http\Requests;

use App\Models\User;
use App\Enums\User\UserRoleEnum;
use Modules\School\app\Models\EiClass;
use Illuminate\Foundation\Http\FormRequest;
use Modules\General\app\Models\EducationInstitution;

class UserDetailRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge(['user_id' => auth()->id()]);
    }

    public function rules(): array
    {
        $rules = [
            'extra_information' => 'required|string|min:10|max:1000',
//            'business_document_path' => 'required|file',
//            'registration_scan_path' => 'required|file',
        ];

        if($this->user()->hasRole(UserRoleEnum::Student()->value)) {
//            $rules['class_id'] = 'required|integer|exists:ei_classes,id';
        }

        return $rules;
    }

    public function authorize(): bool
    {
        return boolval($this->user());
    }

    public function uploadBusinessDocument($user_detail): void
    {
        if($this->hasFile('business_document_path')) {
            $user_detail->singleFileUpload(
                $this->file('business_document_path'),
                'detail',
                [
                    'is_business_document' => true,
                    'user_id' => auth()->id()
                ]
            );
        }
    }

    public function uploadRegisterScanDocument($user_detail): void
    {
        if($this->hasFile('registration_scan_path')) {
            $user_detail->singleFileUpload(
                $this->file('registration_scan_path'),
                'detail',
                [
                    'is_registration_scan' => true,
                    'user_id' => auth()->id()
                ]
            );
        }
    }

    public function attachToClass(): void
    {
        /** @var User $user */
        $user = $this->user();

        if($this->user()->hasRole(UserRoleEnum::Student()->value)) {

            /** @var EducationInstitution $institution */
            if($institution = EducationInstitution::find($user->institution_id)) {

                /** @var EiClass $class */
                if($class = $institution->classes()->find($this->get('class_id'))) {
                    $class->users()->attach($user);
                }
            }
        }
    }
}
