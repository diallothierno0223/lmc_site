<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class OtherController extends Controller
{
    function home(){
        return view('home.index');
    }

    function gallery(){
        $photo = Photo::orderBy('id', 'desc')->paginate(15);
        $data = [
            'photo' => $photo
        ];
        return view('galerie.index', $data);
    }
}
