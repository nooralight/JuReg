<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegistrationController extends Controller
{
    //
    public function signUp(Request $request){
        dd($request);
        $user= User::create($request->all());
        
        return view("reg");
    }
}
