<?php

namespace App\Http\Controllers;

class MessagesController extends Controller
{
    //

    public function store(){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ]);

        return back()->with('status','Recibimos tu mensaje te responseremos en 24 horas...');
    }

    
}
