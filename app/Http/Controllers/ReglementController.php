<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reglement;

class ReglementController extends Controller
{
    public function index(){
        $regle = Reglement::paginate(20);
        $data = [
            'reglement' => $regle
        ];

        return view('reglement.index', $data);
    }

    public function search(){
        $q = request()->validate([
            "search" => "required"
        ]);
        $regle = Reglement::where('title', 'like', '%'.$q['search'].'%')->
                    orWhere('content', 'like', '%'.$q['search'].'%')->get();
        $data = [
            'reglement' => $regle
        ];

        return view('reglement.search', $data);
    }
}
