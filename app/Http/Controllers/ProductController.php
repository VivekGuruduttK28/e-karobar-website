<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PayoutAccount;
use Illuminate\Support\Facades\Hash;

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
