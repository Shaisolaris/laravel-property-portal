<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Modules\School\app\Models\EiClass;
use Modules\Auth\app\Http\Requests\UserDetailRequest;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;
use Modules\School\app\Http\Resources\EiClassResource;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Inertia\Response|\Illuminate\Http\RedirectResponse
    {
        /** @var User $user */
        $user = $request->user();

        if (!$user->isDetailData()) {

            $curriculum = collect();

            if($user->institution_type === EducationInstitutionTypeEnum::School()->value) {
                $curriculum = EiClassResource::collection(EiClass::whereEiId($user->institution_id)->get());
            }

            return Inertia::render('Auth::steps/UserDetail', compact('curriculum'));
        } else {
            return to_route('general.dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserDetailRequest $request): \Illuminate\Http\JsonResponse
    {
        DB::beginTransaction();
        try {
            /** @var User $user */
            $user = $request->user();

            /** @var UserDetail $user_detail */
            if ($user_detail = $user->detail()->create($request->input())) {
                $request->uploadBusinessDocument($user_detail);
                $request->uploadRegisterScanDocument($user_detail);
                $request->attachToClass();
                $user->submitToInspection();
            }

            DB::commit();
            return response()->json(true);

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(false);
        }
    }

    public function waitingWindow(Request $request): \Inertia\Response|\Illuminate\Http\RedirectResponse
    {
        if (!$request->user()->onReview()) {
            return to_route('general.dashboard');
        }
        return Inertia::render('Auth::steps/WaitingWindow');
    }
}
