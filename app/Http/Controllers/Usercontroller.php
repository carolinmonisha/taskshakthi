<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class Usercontroller extends Controller
{
    //

    public function send(){

        $users=User::all();
        return response()->json($users);

    }
    public function store(Request $request){
        $name=$request->input('name');
        // return $name;
        $password=$request->input('password');
        // return $password;
        User::create(['name'=>$name,'password'=>$password]);
        // return 'success';
        return response()->json(['success'=>'saved successfully']);
    }
}
