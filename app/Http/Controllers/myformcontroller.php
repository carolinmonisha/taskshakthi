<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class myformcontroller extends Controller
{
    public function myform(Request $request){

        $name=$request->input('name');
        $gender=$request->input('gender');
        $email=$request->input('email');
        $myage=$request->input('myage');
        mycompany::create(['name',$name,'age',$age]);
        




        // return view ("submit");
    }
}
