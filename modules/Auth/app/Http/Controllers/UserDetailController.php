<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\Auth\app\Http\Requests\UserDetailRequest;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Inertia\Response|\Illuminate\Http\RedirectResponse
    {
        if (!$request->user()->isDetailData()) {
            return Inertia::render('Auth::steps/UserDetail');
        } else {
            return to_route('general.dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserDetailRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            if ($user_detail = $request->user()->detail()->create($request->input())) {
                $user_detail->singleFileUpload(
                    $request->file('business_document_path'),
                    'detail',
                    [
                        'is_business_document' => true,
                        'user_id' => $request->user_id
                    ]
                );
                $user_detail->singleFileUpload(
                    $request->file('registration_scan_path'),
                    'detail',
                    [
                        'is_registration_scan' => true,
                        'user_id' => $request->user_id
                    ]
                );
            }

            return response()->json(true);
        } catch (\Exception $exception) {
            dd($exception);
            return response()->json(false);
        }

    }
}
