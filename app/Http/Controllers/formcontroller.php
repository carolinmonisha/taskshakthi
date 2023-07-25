<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\validation\Rule;
use App\Models\company;
use App\Http\Controllers\Controller;
  
class formcontroller extends Controller
{
    public function form(Request $request){
        //  return view("submit");
        $validate=$request->validate([
            'name'=>['required',new CustomRule],'email'=>'required',
            'file'=>'required|image|mimes:jpg|max:3000'
        ],
        ['name.required'=>'name ezhuthu da' ,'email.required'=>'fill','file.required'=>'file enga da']);
     
     $name=$request->input('name');
     $email=$request->input('email');
    //  company::create(['name'=>$name,'email'=>$email]);
     return redirect('/about');
     
} 
}  

class CustomRule implements Rule{
    public function passes($attribute,$value){
        if($value=='john'){
            return true;
        }else{
            return false;
        }
    }
        public function message(){
            return'name must be john';
        }
    }
