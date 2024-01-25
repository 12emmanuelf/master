<?php

namespace App\Http\Controllers;

use App\Models\Coursier;
use Illuminate\Http\Request;

class CoursierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coursiers = Coursier::all();
        return view('coursier.index', compact('coursiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coursier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero_telephone' => 'required',
            'numero_permis_conduire' => 'required',
            'salaire' => 'required',
            'cni' => 'required',
            'type_vehicule' => 'required',
            'photo' => 'required',
            'email' => 'required',
            'plaque_immatriculation' => 'required',
        ]);

        $coursier = new coursier([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'numero_telephone' => $request->get('numero_telephone'),
            'numero_permis_conduire' => $request->get('numero_permis_conduire'),
            'salaire' => $request->get('salaire'),
            'cni' => $request->get('cni'),
            'type_vehicule' => $request->get('type_vehicule'),
            'photo' => $request->get('photo'),
            'email' => $request->get('email'),
            'plaque_immatriculation' => $request->get('plaque_immatriculation'),


        ]);

        $coursier->save();
        return redirect('/coursier.index')->with('success', 'coursier Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $coursier = coursier::findOrFail($id);
        return view('coursier.show',compact('coursier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coursier = Coursier::findOrFail($id);

        return view('coursier.edit', compact('coursier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero_telephone' => 'required',
            'numero_permis_conduire' => 'required',
            'salaire' => 'required',
            'cni' => 'required',
            'type_vehicule' => 'required',
            'photo' => 'required',
            'email' => 'required',
            'plaque_immatriculation' => 'required',

        ]);

        $coursier = coursier ::findOrFail($id);
        $coursier ->nom = $request->get('nom');
        $coursier ->prenom = $request->get('prenom');
        $coursier ->numero_telephone = $request->get('numero_telephone');
        $coursier ->numero_permis_conduire = $request->get('numero_permis_conduire');
        $coursier ->salaire = $request->get('salaire');
        $coursier ->cni = $request->get('cni');
        $coursier ->type_vehicule = $request->get('type_vehicule');
        $coursier ->photo = $request->get('photo');
        $coursier ->email = $request->get('email');
        $coursier ->plaque_immatriculation = $request->get('plaque_immatriculation');
      $coursier->update();

    return redirect('/coursier.index')->with('success', 'Coursier modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coursier $coursier)
    {
        $coursier = Coursier::findOrFail($id);
        $coursier->delete();

        return redirect('/coursier.index')->with('success', 'Coursier supprimé avec succès');
    }
}
