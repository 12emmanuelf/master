<?php

namespace App\Http\Controllers;


use App\Models\Zone;

use App\Models\Client;
use App\Models\Commune;
use Illuminate\Http\Request;
use App\Events\ClientCreated;

class ClientController extends Controller
{
    public function index()
    {

        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('client.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
        ]);
        $commune = new     Commune([
            'nom' =>$request->get('nom')
         ]);
         $commune->save();

        $zone = new Zone([
        'nom' =>$request->get('nom'),
        'commune_id'=> $commune
     ]);

        $zone->save();
        $client = new Client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            'zone_id' => $zone,
            'commune_id' => $commune
        ]);

        dd($client);



        $client->save();
        event(new ClientCreated($client));
        return redirect()->route('client.index')->with('success', 'Client ajouté avec succès');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit', compact('clients', ));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
        ]);

        $client = Client::findOrFail($id);
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->telephone = $request->get('telephone');
        $client->email = $request->get('email');
        $client->update();

        return redirect()->route('client.index')->with('success', 'Client modifié avec succès');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('client.index')->with('success', 'Client supprimé avec succès');
    }

}
