<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('crud.form');
    }

    public function  store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required' //'same:password' also used for the password_cofirmation.
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
