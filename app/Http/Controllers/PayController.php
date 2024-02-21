<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Http\Resources\EiClassResource;
use Modules\Academy\app\Models\EducationInstitutionCourse;

class PayController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->user()->isNeedPay()) {
            return redirect()->to(route('general.dashboard'));
        }

        $model = $this->getModel($request->route('model'));

        if (!$model) {
            abort(404);
        }

        return Inertia::render('Payment/PayPage', [
            'model' => $model
        ]);
    }


    public function success(Request $request): Response
    {
        return Inertia::render('Payment/Success', [
            'id' => $request->route('model')
        ]);
    }

    public function fail(Request $request): Response
    {
        return Inertia::render('Payment/Fail', [
            'id' => $request->route('model')
        ]);
    }

    public function pay(Request $request)
    {
        if (!$request->user()->isNeedPay()) {
            return redirect()->to(route('general.dashboard'));
        }

        /** @var EiClass $model */
        $model = $this->getModel($request->route('model'));

        if (!$model) {
            abort(404);
        }

        return response()->json($model->pay(), 200);
    }


    private function getModel(string $uuid): mixed
    {
        $model = EiClass::whereUuid($uuid)->first();

        if (!$model) {
            $model = EducationInstitutionCourse::whereUuid($uuid)->first();
        } else {
            $model = EiClassResource::make($model);
        }

        return $model;
    }
}
