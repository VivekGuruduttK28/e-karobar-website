<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        return view('products');
    }


}
