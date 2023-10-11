<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        return view('dashboard');
    }


}
