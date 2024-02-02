<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function index()
    {
        $communes = Commune::all();
        return view('commune.index', compact('communes'));
    }

    public function create()
    {
        $communes = Commune::all();
        return view('commune.create', compact('communes',));
    }

    public function store(Request $request)
    {
        // dd(Ville::findOrFail($request->get('ville_id')));


//dd($ville);
        $request->validate([
            'nom' => 'required',
        ]);

        $commune = new commune([
            'nom' => $request->get('nom'),
        ]);

        // dd( $commune);
        $commune->save();
        return redirect()->route('commune.index')->with('success', 'Commune ajouté avec succès');

    }

    public function show($id)
    {
        $commune = Commune::findOrFail($id);

        return view('commune.edit', compact('communes'));
    }

    public function edit($id)
    {

        $commune = Commune::findOrFail($id);
        return view('commune.edit', compact('commune'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $commune = Commune::findOrFail($id);
        $commune->nom = $request->get('nom');


        $commune->update();

        return redirect()->route('commune.index')->with('success', 'Commune modifié avec succès');
    }

    public function destroy($id)
    {
        $commune = Commune::findOrFail($id);
        $commune->delete();

        return redirect()->route('commune.index')->with('success', 'Commune supprimé avec succès');
    }


}
