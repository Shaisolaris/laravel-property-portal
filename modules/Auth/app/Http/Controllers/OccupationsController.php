<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Enums\User\UserTeachingLevel;
use App\Http\Controllers\Controller;
use App\Models\Occupation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OccupationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        return Inertia::render('Auth::steps/Occupation', [
            'occupations' => Occupation::pluck('name', 'id'),
            'experience_levels' => UserTeachingLevel::toValues(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }
}
