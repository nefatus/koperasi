<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __contruction()
    {
        $this->middleware('Auth');
    }

    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        return view('auth.login');
    }
}
