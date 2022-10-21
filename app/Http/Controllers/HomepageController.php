<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
        $contact=compact('name' , 'message', 'email');

        Mail::to($email)->send(new ContactMail($contact));
        Mail::to('admin@admin.es')->send(new AdminMail($contact));
        return redirect(route('homepage'))->with('message' , 'Grazie ar cazzo');
    }
}


