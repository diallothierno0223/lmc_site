<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Commentaire;

class JournalController extends Controller
{
    public function index(){
        $article = Journal::orderBy('created_at', 'desc')->paginate(15);
        $data = ['journals' => $article];
        return view('journal.index', $data);
    }

    public function search(){
        $q = request()->validate([
            'search' => "required|min:5"
        ]);
        $article = Journal::where('title', 'like', '%'.$q['search'].'%')->
                    orWhere('auteur', 'like', '%'.$q['search'].'%')->
                    orWhere('subtitle', 'like', '%'.$q['search'].'%')->
                    orWhere('article', 'like', '%'.$q['search'].'%')->get();
        // dd($article);
        $data = ['journals' => $article];
        return view('journal.search', $data);
    }

    public function detail(Journal $id){
        $comment = Commentaire::orderBy('id', 'desc')->where('id_article', "=", strval($id->id))->get();
        $nbr_comment = count($comment);
        $id->update(['vue' => $id->vue + 1]);
        $data = [
            'journal' => $id,
            'commentaire' => $comment,
            'nbr_comment' => $nbr_comment,
        ];

        return view('journal.detail', $data);
    }

    public function comment(){
        $data = request()->validate([
            'nom' => 'required',
            'mail' => 'required|email',
            'commentaire' => 'required|min:10',
            'id_article' => 'required|string'
        ]);
        Commentaire::create($data);
        return back()->with('success', 'votre commentaire a bien ete ajouter');
    }

}
