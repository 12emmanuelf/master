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
        return view('colis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'destinataire' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'reference' => 'required',
            'nomC' => 'required',
        ]);

        // Vérifier si le coursier existe dans la base de données
        $coursier = Coursier::where('nom', $request->nomC)->first();

        if (!$coursier) {
            // Le coursier n'existe pas, renvoie un message d'erreur
            return redirect()->back()->withErrors(['nomC' => 'Le coursier n\'existe pas.']);
        }

        // Si le coursier existe, enregistrez le colis avec le nom du coursier
        $colis = new Colis([
            'destinataire' => $request->get('destinataire'),
            'adresse' => $request->get('adresse'),
            'telephone' => $request->get('telephone'),
            'reference' => $request->get('reference'),
            'nomC' => $coursier->nom,
        ]);

        $colis->save();

        return redirect('/colis.index')->with('success', 'Colis ajouté avec succès');
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
            'destinataire' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'reference' => 'required',
            'nomC' => 'required',
        ]);

        $colis = Colis::findOrFail($id);
        $colis->destinataire = $request->get('destinataire');
        $colis->adresse = $request->get('adresse');
        $colis->telephone = $request->get('telephone');
        $colis->reference = $request->get('reference');
        $colis->nomC = $request->get('nomC');

        $colis->update();

        return redirect('/colis.index')->with('success', 'Colis modifié avec succès');
    }

    public function destroy($id)
    {
        $colis = Colis::findOrFail($id);
        $colis->delete();

        return redirect('/colis.index')->with('success', 'Colis supprimé avec succès');
    }
}
