<?php

namespace Modules\Auth\app\Http\Requests;

use App\Models\User;
use App\Enums\User\UserRoleEnum;
use App\Models\UserDetail;
use Illuminate\Support\Arr;
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

//            'registration_scan' => 'required|file',
//            'transcript' => 'required|file',
//            'diploma_certificate' => 'required|file',
//            'previous_employment_education' => 'required|file',
//            'teaching_experience' => 'required|file',
//            'additional_licences_permits' => 'required|file',
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

    public function uploadDocuments(UserDetail $model): void
    {
        $this->saveDocument($model, 'registration_scan');
        $this->saveDocument($model, 'transcript');
        $this->saveDocument($model, 'diploma_certificate');
        $this->saveDocument($model, 'previous_employment_education');
        $this->saveDocument($model, 'teaching_experience');
        $this->saveDocument($model, 'additional_licences_permits');
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

    public function updateLocalizeData(): void
    {
        $this->user()->update(Arr::only($this->input(), ['gender','languages','timezone']));
    }

    protected function saveDocument(UserDetail $model, $name, $collection = 'user_documents'): void
    {
        if($this->hasFile($name)) {
            $model->singleFileUpload($this->file($name), $collection, [
                'user_id' => auth()->id(),
                'is_' . $name => true,
            ]);
        }
    }
}
