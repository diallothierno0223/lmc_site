<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function create(){
        return view('contact.create'); 
    }

    function envoyer(){
        $data = request()->validate([
            'name' => "required|min:5",
            'mail' => "required",
            'subject' => "required",
            'message' => "required",
        ]);

        Mail::to("thiernosaliou0223@gmail.com")->send(new ContactMail($data));
    }
}
