<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;

class HomeController extends Controller
{
    //
    //READ
    public function lister_format()
    {
        $formation = formation::paginate(9);
        return view('home.formation', compact('formation'));
    }
    public function article($id)
    {
        $formations = formation::find($id);
        $formateur = formation::all();
        return view('home.article')->with(compact('formations', 'formateur'));
    }
    public function lister_article()
    {
        $formateur = formation::all();
        return view('home.include.article_list', compact('formateur'));
    }


}