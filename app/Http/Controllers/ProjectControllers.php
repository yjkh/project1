<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectControllers extends Controller

{
    public function welcome() 
    {
         return view('welcome');
    }

    public function signupask() 
    {
        return view('signupask');
    }

    public function signupfors() 
    {
        return view('signupfors');
    }

    public function signupast() 
    {
        return view('signupast');
    }

    public function login() 
    {
        return view('login');
    }

    public function subjects() 
    {
        return view('subjects');
    }

    public function forstudents() 
    {
        return view('forstudents');
    }

    public function fortutors() 
    {
        return view('fortutors');
    }

    public function logg(Request $request)
    {
        $users = DB::table('users')->get();
        foreach ($users as $user) {
            $email = $request->input('email');
            $psw = $request->input('pass');
            if($user->email == $email && $user->password == $psw)
            {
                return view('fortutors');
            }
        }
        return redirect()->back()->with('alert', 'invalid email or password... Try Again!'); 
    }
}

