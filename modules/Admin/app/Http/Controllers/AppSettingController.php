<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Modules\Admin\app\Http\Requests\AppSetting\AppSettingRequest;
use Modules\Admin\app\Services\AppSettingService;

class AppSettingController extends Controller
{
    public function __construct(protected AppSettingService $appSettingService)
    {
        parent::__construct();
    }

    public function edit()
    {

        return Inertia::render('Admin::AppSettings/Edit', [
            'settings' => $this->appSettingService->getValues(),
        ]);
    }

    public function save(AppSettingRequest $request)
    {

        $this->appSettingService->updateSettings($request);

        return Redirect::back()->success('admin.page.settings.save-success');
    }

}
