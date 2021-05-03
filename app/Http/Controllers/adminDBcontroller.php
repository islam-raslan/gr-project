<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\slider;
use App\Models\order;
class adminDBcontroller extends Controller
{
    function show(){
        $data= product::all();
        $dataslider= slider::all();
        $order= order::all();
     return view('adminDashbord',["products"=>$data , "sliderproducts"=>$dataslider, "order"=>$order]);
      
       
    }
   
    ////////////////////
    function addData(Request $req)
   {
       $addproduct = new product;
       $addproduct->name=$req->name;
       $addproduct->states=$req->states;
       $addproduct->price=$req->price;
       $addproduct->description=$req->description;
       $addproduct->brand=$req->brand;
       $addproduct->category=$req->category;
       //$path = $req->file('image')->store('img');
       if($req->hasFile('image'))
       {
           $filenamewithExt = $req->file('image')->getClientOriginalName();
           $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
           $extension = $req->file('image')->getClientOriginalExtension();
           $filenameToStore = $filename . '.' . $extension;
           $path = $req->file('image')->storeAs('storage/uploads',$filenameToStore);
           $addproduct->image=$filenameToStore;
       }
       else{
           $filenameToStore = 1;
       }
       $addproduct->save();
           return redirect('adminDashbord');    
   }
/////////////////update data in the table////////////

   function update(Request $req)
   {
      $data = product::find($req->id);
       $data->name = $req->name;
       $data->states = $req->states;
       $data->description = $req->description;
       $data->price = $req->price;
       $data->brand = $req->brand;
       $data->category = $req->category;
       $data->image = $req->image;
       $data->save();
       return redirect('adminDashbord');
   }
}
