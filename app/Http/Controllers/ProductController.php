<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function products(){

        $products = Product::all();
        return view('products.index',[
            'pdata'=> $products
        ]);
     }



     public function Prodectshow($id){

        $productdata = Product::find($id);
        return view('products.show', compact('productdata'));
    }

public function delete($id){


    $ProductDelete =Product::find($id);
    $ProductDelete ->delete();
    Session::flash('message', 'successfuly delete');
    return Redirect()-> route ('products.index');

}

public function create(){
  return View('products.create');
}
  public function store(Request $formequest){
   Product::create([
      'id_name'=>$formequest->name,
      'address'=>$formequest->address,
      'phone'=>$formequest->phone,
      'email'=>$formequest->email,
      'department'=>$formequest->department,
   ]);
   return Redirect()-> route ('products.index');

  }


  public function edit($id){

    $productedit = Product::find($id);
    return view('products.edit', compact('productedit'));
}


public function update(Request $formequest, $id){

    $productupdate = Product::find($id);

    $data = [
       'id_name'=>$formequest->id_name,
       'address'=>$formequest->address,
       'phone'=>$formequest->phone,
       'email'=>$formequest->email,
       'department'=>$formequest->department,
    ];

    $productupdate->update($data);

    return Redirect()-> route ('products.index');

   }


}
