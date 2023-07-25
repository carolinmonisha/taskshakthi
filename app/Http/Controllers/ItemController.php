<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    //

    public function save_item(Request $request){

        $name=$request->input('name');
        $price=$request->input('price');
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName();
        $image->storeAs('public/uploads',$image_name);

        Item::create(['name'=>$name,'price'=>$price,'image'=>$image_name]);

        return redirect('item');

    }

    public function show_item(){

        $all_items=Item::all();
        return view('itemshow',['items'=>$all_items]);
    }
    public function edit_item($id){

        $details=Item::where('id',$id)->get();
        // echo $details[0]['name'];

        return view('edit',['details'=>$details]);
    }

    public function update_item(Request $request,$id){

        if($request->file('image')){
            // echo 'helooo';
            $file=$request->file('image');
            $orginal_name=$file->getClientOriginalName();
            $file->storeAs('public/uploads',$orginal_name);
            Item::where('id',$id)->update([
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),
                'image'=>$orginal_name,

            ]);
        }else{
            Item::where('id',$id)->update([
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),]);
        }

        // $details=Item::where('id',$id)->get();
        // echo $details[0]['name'];

        return redirect('itemshow');
    }
    

public function delete_item($id){

    $delete=Item::where('id',$id)->delete();
    // echo $details[0]['name'];

    return redirect('');
}
}