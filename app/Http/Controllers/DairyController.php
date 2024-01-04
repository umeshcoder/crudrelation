<?php

namespace App\Http\Controllers;

use App\models\dairy;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class DairyController extends Controller
{
    public function index()
    {
    
        $products = dairy::all();
        return view('dairy.store',compact('products'));
    }

    public function make(){
        return view('dairy.create');
    }
    public function profile(){
        return view('dairy.profile');
    }
    public function online(){
        return view('dairy.online');
    }
    public function item(){
        return view('dairy.item');
    }
    public function showStore(){
        $products = dairy::all();
        return view('dairy.store')->with(compact('products'));
    }
    public function store(Request $request)
    {
        $products = new dairy();
        $products ->name = $request->name;
        $products ->description = $request->description;
        $products ->price = $request->price;
        $products -> save();
        
        return redirect(route('store'));
    }

    public function edit($id)
    {
        $products = dairy::find($id);
        return view('dairy.edit')->with(compact('products'));
    }




    public function editPost(Request $request,$id)
    {
        $products = dairy::find($id);
        $products->name = $request->name ?? $products->name;
        $products->description = $request->description ?? $products->desription;
        $products->price = $request->price ?? $products->price;
        if($products->save())
        {
            return redirect(route('store'));
        }
        else
        {
            echo 'Not saved';
        }
    }
   
    public function delete($id)
    {
        $products = dairy::find($id);
        $products->delete();
        return redirect(route('store'));
    }
}
