<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileupload;
class filecontroller extends Controller
{
    
    public function submit(Request $request){
        
            $file=$request->file('file');

            $originalname=$file->getClientOriginalName();

            $hash_name=$file->hashName();

            $file->storeAs('public/uploads',$originalname);

            $obj=new fileupload();
            $obj->Myoriginalname=$originalname;
            $obj->hashname=$hash_name;
            $obj->save();

            $images=fileupload::all();
            return view('show',['images'=>$images]);

            // return redirect('show');
        

    }
}
