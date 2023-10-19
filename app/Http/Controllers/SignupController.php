<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PayoutAccount;
use Illuminate\Support\Facades\Hash;

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

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'cnic_no' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'website' => ['required', 'string', 'max:255'],
            'contact_no' => ['required', 'string', 'max:255'],
            'bank_name' => ['required', 'string', 'max:255'],
            'account_no' => ['required', 'string', 'max:255'],
            'iban' => ['required', 'string', 'max:255'],
            'account_title' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        $client = User::create([
            'name' => $data['name'],
            'user_name' => $data['user_name'],
            'company' => $data['company'],
            'website' => $data['website'],
            'contact_no' => $data['contact_no'],
            'user_type' => 'clients',
            'email' => $data['email'],
            'cnic_no' => $data['cnic_no'],
            'password' => Hash::make($data['password']),
        ]);


        // Insert data into the PayoutTransaction table
        PayoutAccount::create([
            'client_id' => $client->id,
            'bank_name' => $data['bank_name'],
            'account_no' => $data['account_no'],
            'iban' => $data['iban'],
            'account_title' => $data['account_title'],
        ]);


        return redirect('https://clients.e-karobar.com');
    }

}
