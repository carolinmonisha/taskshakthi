<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class myregcontroller extends Controller
{
    //
    public function myregister(Request $request){

        $request->validate([
            'username'=>'required',
            'email'=>'required', 
            'password'=>'required'
        ]);

        $username=$request->input('username');
        $password=$request->input('password');
        $email=$request->input('email');

        User::create([
            'name'=>$username,
            'email'=>$email,
            'password'=>Hash::make($password)
        ]);
        

        return redirect('about');
    }
}
