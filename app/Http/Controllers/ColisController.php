<?php

namespace App\Http\Controllers;

use App\Models\Colis;
use App\Models\Coursier; // N'oubliez pas d'importer le modèle Coursier
use Illuminate\Http\Request;

class ColisController extends Controller
{
    public function index()
    {
        $colis = Colis::all();
        return view('colis.index', compact('colis'));
    }

    public function create()
    {
        $colis = Colis::all();
        return view('colis.create', compact('colis',));
    }

    public function store(Request $request)
    {
        // dd(Ville::findOrFail($request->get('ville_id')));


//dd($ville);
        $request->validate([
            'categorie' => 'required',
        ]);

        $colis = new colis([
            'categorie' => $request->get('categorie'),
        ]);

        // dd( $commune);
        $colis->save();
        return redirect()->route('colis.index')->with('success', 'Colis ajouté avec succès');

    }

    public function show($id)
    {
        $colis = Colis::findOrFail($id);

        return view('colis.show', compact('colis'));
    }

    public function edit($id)
    {

        $colis = Colis::findOrFail($id);
        return view('colis.edit', compact('colis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required',
        ]);

        $colis = Colis::findOrFail($id);
        $colis->categorie= $request->get('categorie');


        $colis->update();

        return redirect()->route('colis.index')->with('success', 'Colis modifié avec succès');
    }

    public function destroy($id)
    {
        $colis = Colis::findOrFail($id);
        $colis->delete();

        return redirect()->route('colis.index')->with('success', 'Colis supprimé avec succès');
    }

}
