<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index(): Response
    {
        return Inertia::render('Admin/Home/Index', [
            //
        ]);
    }
}