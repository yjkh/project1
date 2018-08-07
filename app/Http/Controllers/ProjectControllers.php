<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

