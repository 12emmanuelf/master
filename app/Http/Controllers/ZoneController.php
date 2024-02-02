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
        $commune = Commune::find(1);
        $request->validate([
            'nom' => 'required',
        ]);
        $commune->save();

        // $zone = new zone([
        //     'nom' => $request->get('nom'),
        //     'commune_id' => $commune
        // ]);

       $zone = new zone;

        $zone->nom = $request->get('nom');
        $zone->commune_id = 1;

        // dd($zone);
        $zone->save();

        return redirect()->route('zone.index')->with('success', 'zone ajouté avec succès');

    }

    public function show($id)
    {
        $zone = Zone::findOrFail($id);
        $commune = Commune::findOrFail($id);
        return view('zone.show', compact('zone','commune' ));
    }

    public function edit($id)
    {

        $zones = Zone::all();
        $commune = Commune::findOrFail($id);
        return view('zone.edit', compact('zones','commune'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $zone = Zone::findOrFail($id);
        $zone->nom = $request->get('nom');


        $zone->update();

        return redirect()->route('zone.index')->with('success', 'zone modifié avec succès');
    }

    public function destroy($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();

        return redirect()->route('zone.index')->with('success', 'Zone supprimé avec succès');
    }

}
