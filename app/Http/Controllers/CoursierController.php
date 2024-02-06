<?php

namespace App\Http\Controllers;

use App\Models\Zone;
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
          $coursiers= Coursier ::all();
          $zones= Zone ::all();
        return view('coursier.create',compact('coursiers','zones'));
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
            'zone_id' => 'required',
            'cni' => 'required',
            'type_vehicule' => 'required',
            'photo' => 'required',
            'email' => 'required',
            'plaque_immatriculation' => 'required',
        ]);
        $zoneId = $request->get('zone_id');
        $zone = Zone::find($zoneId);

        if  ($zone){
            $coursier = new coursier;
                $coursier->nom = $request->get('nom');
                $coursier->prenom = $request->get('prenom');
                $coursier->numero_telephone = $request->get('numero_telephone');
                $coursier->numero_permis_conduire = $request->get('numero_permis_conduire');
                $coursier->salaire = $request->get('salaire');
                $coursier->zone_id = $zone->id;
                $coursier->cni = $request->get('cni');
                $coursier->type_vehicule = $request->get('type_vehicule');
                $coursier->photo = $request->get('photo');
                $coursier->email = $request->get('email');
                $coursier->plaque_immatriculation = $request->get('plaque_immatriculation');
                $coursier->save();



                return redirect()->route('coursier.index')->with('success', 'Coursier ajoutée avec succès');
            } else {
                return redirect()->back()->with('error', 'La zone spécifiée n\'a pas été trouvée.');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $coursier = Coursier::find($id);
        $zones = Zone::find($coursier->zone_id);
        return view('coursier.show',compact('coursier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coursier = Coursier::findOrFail($id);
        $coursiers = Coursier::all();
        $zones = Zone::all();

        return view('coursier.edit', compact('coursier','zones','coursiers'));
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
            'zone_id' => 'required',
            'cni' => 'required',
            'type_vehicule' => 'required',
            'photo' => 'required',
            'email' => 'required',
            'plaque_immatriculation' => 'required',
        ]);

        $zoneId = $request->get('zone_id');
        $zone = Zone::find($zoneId);
        $coursier = Coursier::findOrFail($id);

        if ($zone) {
            // Mise à jour des propriétés du coursier existant
            $coursier->nom = $request->get('nom');
            $coursier->prenom = $request->get('prenom');
            $coursier->numero_telephone = $request->get('numero_telephone');
            $coursier->numero_permis_conduire = $request->get('numero_permis_conduire');
            $coursier->salaire = $request->get('salaire');
            $coursier->zone_id = $zone->id;
            $coursier->cni = $request->get('cni');
            $coursier->type_vehicule = $request->get('type_vehicule');
            $coursier->photo = $request->get('photo');
            $coursier->email = $request->get('email');
            $coursier->plaque_immatriculation = $request->get('plaque_immatriculation');
            $coursier->save();

            return redirect()->route('coursier.index')->with('success', 'Coursier modifié avec succès');
        } else {
            return redirect()->back()->with('error', 'La zone spécifiée n\'a pas été trouvée.');
        }
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
