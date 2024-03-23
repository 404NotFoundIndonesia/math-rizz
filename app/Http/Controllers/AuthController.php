<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login(): Responsable {
        return Inertia::render('Auth/Login');
    }

    public function register(): Responsable {
        return Inertia::render('Auth/Register');
    }
}
