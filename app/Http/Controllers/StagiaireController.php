<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Models\Formateur;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::with('formateur')->get();
        return view('stagiaires.index', compact('stagiaires'));
    }

    public function create()
    {
        $formateurs = Formateur::all();
        return view('stagiaires.create', compact('formateurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:stagiaires',
            'formateur_id' => 'required|exists:formateurs,id',
        ]);

        Stagiaire::create($request->all());
        return redirect()->route('stagiaires.index');
    }

    public function edit(Stagiaire $stagiaire)
    {
        $formateurs = Formateur::all();
        return view('stagiaires.edit', compact('stagiaire', 'formateurs'));
    }

    public function update(Request $request, Stagiaire $stagiaire)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:stagiaires,email,' . $stagiaire->id,
            'formateur_id' => 'required|exists:formateurs,id',
        ]);

        $stagiaire->update($request->all());
        return redirect()->route('stagiaires.index');
    }

    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
        return redirect()->route('stagiaires.index');
    }
}

