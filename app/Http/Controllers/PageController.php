<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function welcome(Request $request): Responsable
    {
        return Inertia::render('Welcome', []);
    }

    public function dashboard(Request $request): Responsable
    {
        return Inertia::render('Dashboard', []);
    }

    public function pathway(Request $request): Responsable
    {
        return Inertia::render('Pathway', []);
    }
}
