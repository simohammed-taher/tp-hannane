<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }
    public function create()
    {

        return view('eleves.create');
    }
    public function store(Request $request)
    {
        // $eleves = new Eleve();
        // $eleves->nom = $request->nom;
        // $eleves->prenom = $request->prenom;
        // $eleves->fil = $request->fil;
        // $eleves->moyenne = $request->moyenne;
        // $eleves->save();
        // autre methode

        $input = $request->all();
        Eleve::create($input);

        // autre methode

        // $validatedData = $request->validate([
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'fil' => 'required',
        //     'moyenne' => 'required|numeric',
        // ]);
        // $user = User::create($validatedData);
        return redirect('eleve')->with('msg', 'Success');
    }
    public function edit ($id){
        $eleves = Eleve::find($id);
        return view('eleves.edit')->with('Eleve', $eleves);
    }

    public function update(Request $request, $id)
    {
        $eleves = Eleve::find($id);
        // $input = $request->all();
        // $eleve->update($input);
        $eleves->nom = $request->nom;
        $eleves->prenom = $request->prenom;
        $eleves->fil = $request->fil;
        $eleves->moyenne = $request->moyenne;
        $eleves->save();
        return redirect('eleve')->with('msg', 'student Updated!');
    }
    public function destroy($id)
    {
        Eleve::destroy($id);
        return redirect('eleve')->with('flash_message', 'Student deleted!');
    }
}
