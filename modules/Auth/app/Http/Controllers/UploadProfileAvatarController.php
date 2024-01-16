<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UploadProfileAvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return Inertia::render('Auth::steps/ProfileAvatar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }
}
