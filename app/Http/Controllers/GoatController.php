<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Goat;
class GoatController extends Controller
{

    public function goats(){
        return view('goat');
    }
     public function goat(Request $request){

        $name=$request->input('name');
        $price=$request->input('price');
        $image=$request->file('image');

        $img=$image->getClientOriginalName();
        $image->storeAs('/storage/upload',$img);

        Goat::create([
            'name'=>$name,
            'price'=>$price,
            'image'=>$img
        ]);

        return redirect('goat');
        }

        public function showgoat (){
            $al_goat=Goat:: all();
            return view('showgoat',['item'=>$al_goat]);   
        }
}
