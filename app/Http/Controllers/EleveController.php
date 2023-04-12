<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        return view('eleves.index');
    }
    public function create()
    {
        $eleves = Eleve::all();
        return view('eleves.create', compact('eleves'));
    }
    public function store(Request $request){
        $eleves =new Eleve();
        $eleves->nom = $request->nom;
        $eleves->prenom = $request->prenom;
        $eleves->fil = $request->fil;
        $eleves->moyenne=$request->moyenne;
        $eleves->save();
        return redirect()->back()->with('msg','Success');

    }
}
