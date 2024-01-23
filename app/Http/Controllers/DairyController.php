<?php

namespace App\Http\Controllers;

use App\models\dairy;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class DairyController extends Controller
{
    public function index()
    {
        return view('dairy.index');
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
        $request->validate([
            'name' => ['required', function($attribute, $value, $fail) {
                if(preg_match('/[!@#$%^&*(),.?":{}|\/\-\+\|\[\]<>0-9]/', $value)) {
                    $fail("The $attribute cannot contain special characters or numbers.");
                }
                if(preg_match("/\'/", $value)){
                    $fail("The $attribute cannot contain special characters or numbers.");
                }
            }],
            'description' => ['required'],
        ]);




        $products = new dairy();
        $products ->name = $request->name;
        $products ->description = $request->description;
        $products ->price = $request->price;

        if($request->file('image') !== null){
            $nameData = asset('storage/blog').'/'.date("Y-m-d",time()).'-'.time().'-blog-'.$request->file('image')->getClientOriginalName();
            $name = date("Y-m-d",time()).'-'.time().'-blog-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('/public/blog', $name);
            $products['image'] = $nameData;
        }




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

        if($request->file('image') !== null){
            $nameData = asset('storage/blog').'/'.date("Y-m-d",time()).'-'.time().'-blog-'.$request->file('image')->getClientOriginalName();
            $name = date("Y-m-d",time()).'-'.time().'-blog-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('/public/blog', $name);
            $products['image'] = $nameData;
        }





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

    public function home()
    {
        $user = User::find(Auth::user()->id);
        return view('dairy.home')->with(compact('user'));
    }


}
