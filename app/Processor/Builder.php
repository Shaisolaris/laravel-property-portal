<?php

namespace App\Processor;

class Builder
{
    protected mixed $user;
    protected mixed $request;


    public function __construct($request)
    {
        $this->user = auth()->user();
        $this->request = $request;
    }

    public function render($name)
    {
        $dataClass = __NAMESPACE__ . '\Resources\\' . ucfirst($name).'Resource';
        $renderClass = __NAMESPACE__ . '\Renders\\' . ucfirst($name).'Render';

        return app($renderClass)->render(
            app($dataClass)->{$this->user->roleName}($this->request)
        );
    }

    public function edit($name)
    {
        $class  = __NAMESPACE__ . '\Actions\\' . ucfirst($name).'\Handler';

        return (new $class($this->request))->create();
    }

    public function delete($name)
    {
        // TODO::
    }

    public function toRoute(string $programName): \Illuminate\Http\RedirectResponse
    {
        //TODO упростил ссылку, чтобы в будущем был единый формат вида /{uuid-subject-or-course}/curriculum
        // $this->request->get('program') -> $programName
        if ($programName === 'subject') {
            return to_route('school.my-class.subject.curriculum', [
                'role' => $this->user->role_name,
                'institution' => $this->user->institution_type,
                'subject' => $this->request->get('subject')
            ]);
        }

        return to_route('general.institution.add-step', ['program' => $programName]);
    }
}
