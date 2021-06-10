<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reglement;

class ReglementController extends Controller
{
    function index(){
        $article = Reglement::paginate(15);
        $data = [
            'article' => $article,
        ];
        return view('reglement.index', $data);
    }

    function search(){
        $q = request()->validate([
            'search' => "required"
        ]);
        $article = Reglement::where('title', 'like', '%'.$q['search'].'%')
                    ->orWhere('content', 'like', '%'.$q['search'].'%')->get();
        $data = [
            'article' => $article,
        ];
        return view('reglement.search', $data);
    }
}
