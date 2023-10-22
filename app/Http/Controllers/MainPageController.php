<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;

class MainPageController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $products = Product::paginate(12);

        return view('index', compact(['products']));
    }


}
