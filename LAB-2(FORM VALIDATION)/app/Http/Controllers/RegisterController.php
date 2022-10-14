<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function getregister(Request $request)
    {
    //return view('register',['name'=>$name, 'age'=>30, 'email'=>'abc@gmail.com']);
    $this->validate($request,
       [ 'username'=>'required|string|regex:/^[A-Za-z0-9]+(?:[_-][A-Za-z0-9]+)*$/|max:255',
        'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
        'dob'=>'date_format:Y-m-d|before:today',
        'lan'=>'required',
        'file'=>'required|max:10000|mimes:doc,docx'   
    ]
    );
    $output="<h1>Submitted</h1>";
    $output.="username: ".$request->username;
    $output.="<br>email: ".$request->email;
    $output.="<br>email: ".$request->dob;
    $output.="<br>lan: ".$request->lan;
    $output.="<br>file: ".$request->file;
    return $output;
    }
    /*function getregisterwith()
    {
        $ages=['wname'=>$name,'wage'=>23,'wemail'=>'xyz@gmail.com'];
        return view("register")->with("ages",$ages);
    }*/
}

