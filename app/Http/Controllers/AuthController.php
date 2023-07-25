<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller 
{

    public function register(Request $request){

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
        

        return redirect('login');
    }
}

    

//     public function login(Request $request){


//         $request->validate([
//             'name'=>'required',
            
//             'password'=>'required'
//         ]);

//         $credentials=$request->only('name','password');

//         // $credentials=['name'=>$request->input('name'),
//         // 'password'=>$request->input('password')];


//         if (Auth::attempt($credentials)){
//             return view('about');
//         }else{
//             return 'username or password is wrong';
//             // if(Auth::check()){
//             //     echo 'helloo';
//             //     // return redirect()->back()->withError([
//             //     //     'password'=>'Incorrect password'
//             //     // ]);
//             // }else{
//             //     echo 'hiii';
//             //     // return redirect()->back()->withError([
//             //     //     'email'=>'Incorrect email'
//             //     // ]);
//             // }

//         }
        
//     }
//     public function logout(Request $request){

//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();
//         return redirect('login');
//     }

