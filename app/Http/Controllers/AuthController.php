<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }
    public function registerpost(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        return back()->with('sucess','Registered Sucessfully'); 
    }
    public function login()
    {
        return view('dairy.login');

    }
    public function loginpost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials))
        {
            return redirect(route('home'));
        }
        return back()->with('error','wrong password');
    }

    function logout()
    {
        session()->flush();
        return redirect(route('login'))->with('success','Logout successfully');

    }
}    
        

