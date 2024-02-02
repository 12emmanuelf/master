<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Commune;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::all();
        return view('zone.index', compact('zones'));
    }

    public function create()
    {
        $zones = Zone::all();
        $communes = Commune::all();
        return view('zone.create', compact('zones','communes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'commune_id' => 'required'
        ]);

        $communeId = $request->get('commune_id');
        $commune = Commune::find($communeId);

            if ($commune) {
                $zone = new Zone;
                $zone->nom = $request->get('nom');
                $zone->commune_id = $commune->id;
                $zone->save();

                return redirect()->route('zone.index')->with('success', 'Zone ajoutée avec succès');
            } else {
                return redirect()->back()->with('error', 'La commune spécifiée n\'a pas été trouvée.');
            }
        }

    public function show($id)
    {
        $zone = Zone::find($id);
        $commune = Commune::find($zone->commune_id);
        return view('zone.show', compact('zone','commune'));
    }

    public function edit($id)
    {

        $zones = Zone::all();
        $zone = Zone::findOrFail($id);
        $communes = Commune::all();
        return view('zone.edit', compact('zones', 'zone', 'communes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'commune_id' => 'required'
        ]);

        $communeId = $request->get('commune_id');
        $commune = Commune::find($communeId);
        $zone = Zone::findOrFail($id);

        if ($commune) {
            $zone->nom = $request->get('nom');
            $zone->commune_id = $commune->id;
            $zone->update();

            return redirect()->route('zone.index')->with('success', 'Zone modifiée avec succès');
        } else {
            return redirect()->back()->with('error', 'La commune spécifiée n\'a pas été trouvée.');
        }
    }

    public function destroy($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();

        return redirect()->route('zone.index')->with('success', 'Zone supprimée avec succès');
    }

}
