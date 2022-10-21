<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function contattaci(){
        return view('contattaci');
    }

    public function form(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $message=$request->input('message');
        dd($name, $email, $message);
    }
}


