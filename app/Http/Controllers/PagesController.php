<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('landing.welcome');
    }

    public function signup() {
            return view('landing.sign_up');
    }

    public function login() {
                return view('landing.login');
    }
}
