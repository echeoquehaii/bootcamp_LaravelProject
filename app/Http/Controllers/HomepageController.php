<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;


class HomepageController extends BaseController
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
        $contact=compact('name' , 'message', 'email');

        Mail::to($email)->send(new ContactMail($contact));
        Mail::to('admin@admin.es')->send(new AdminMail($contact));
        return redirect(route('homepage'))->with('message' , 'Grazie ar cazzo');
    }

    public function chisiamo(){
        return view('chisiamo');
    }

}


