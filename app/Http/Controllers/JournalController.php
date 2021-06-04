<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Commentaire;

class JournalController extends Controller
{
    public function index(){
        $article = Journal::orderBy('created_at', 'desc')->get();

        $data = ['journals' => $article];
        return view('journal.index', $data);
    }

    public function detail(Journal $id){
        $comment = Commentaire::orderBy('id', 'desc')->get();

        $data = [
            'journal' => $id,
            'commentaire' => $comment
        ];

        return view('journal.detail', $data);
    }

    public function comment(){
        $data = request()->validate([
            'nom' => 'required',
            'mail' => 'required|email',
            'commentaire' => 'required|min:10',
            'id_article' => 'required'
        ]);
        Commentaire::create($data);
        return back()->with('success', 'votre commentaire a bien ete ajouter');
    }

}
