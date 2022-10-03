<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){


        $categories = Category::all();
        // dd('hsjhsdkfhjs');

        return view('categories.index', [
            'data' =>$categories
        ]);
        // or
        // return view('categories.index', compact('categories'));
    }




     public function create(){
        return view('categories.create');
     }


                                                  // Data store file

     public function store(Request $request){

       Category::create([

        'name' =>$request->name,
        'is_active' => $request->is_active ? true : false
       ]);

    //    Session::flash('messege',' successfully delete');

       return Redirect() ->route('categories.index');

        }



                                                      //  Database data show file

    public function show($id){

        $categoriesshowdata = Category::find($id);
        return view('categories.show', compact('categoriesshowdata'));
    }


                                                       //  Database data Delete file
     public function  delete ($id){
      $categoriesdelete = Category::find($id);
      $categoriesdelete ->delete();
      Session::flash('messege',' successfully delete');

    return Redirect() ->route('categories.index');


     }






}
