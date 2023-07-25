<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    public function submit(Request $request){
        $validate=$request->validate([
            'name'=>'required','price'=>'required',
            'file'=>'required']);

            $name=$request->input('name');
            $price=$request->input('price');
            $file=$request->file('file');
            $file_name=$file->getClientOriginalName();
            $file->storeAs('public/uploads',$file_name);
            $obj=new product();
            $obj->productname=$name;
            $obj->price=$price;
            $obj->file=$file_name;   
            $obj->save();
            return redirect('/about');
    }
     
}
 