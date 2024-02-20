<?php

namespace Modules\General\app\Processor;

class Builder
{
    protected $user;

    protected $request;

    public function __construct($request)
    {
        $this->user = auth()->user();
        $this->request = $request;
    }

    public function render($name)
    {
        $dataClass = __NAMESPACE__ . '\Resources\\' . ucfirst($name).'Resource';
        $renderClass = __NAMESPACE__ . '\Renders\\' . ucfirst($name).'Render';

        $resource = new $dataClass($this->request);
        $render = new $renderClass($this->request);

        return $render->render($resource->{$this->user->roleName}($this->request));
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
}
