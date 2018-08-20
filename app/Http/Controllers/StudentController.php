<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function insert(Request $request)
    {
        $img = $request->input('pic');
        $firstname = $request->input('fname');
        $lastname = $request->input('lname');
        $email = $request->input('email');
        $username = $request->input('uname');
        $psw = $request->input('pass');
        $dateOB = $request->input('dob');
        $gen = $request->input('optionsRadios');
        $cn = $request->input('cnic');
        $add = $request->input('addr');
        $phn = $request->input('phone');
        DB::insert('insert into students (email,image,username,password,first_name,last_name,date_of_birth,gender,cnic,address,phone) values(?,?,?,?,?,?,?,?,?,?,?)',[$email,$img,$username,$psw,$firstname,$lastname,$dateOB,$gen,$cn,$add,$phn]);
        DB::insert('insert into users (username,email,password) values(?,?,?)',[$username,$email,$psw]);
        return view('forstudents');
    }
}
