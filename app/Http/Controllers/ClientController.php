<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commune;
use Illuminate\Http\Request;
use App\Events\ClientCreated;

class ClientController extends Controller
{
    public function index()
    {
        $communes = Commune::all();
        $clients = Client::all();
        return view('client.index', compact('clients', 'communes'));
    }

    public function create()
    {
        $communes = Commune::all();
        return view('client.create', compact('communes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'commune' => 'required',
        ]);

        $commune = Commune::firstOrCreate(['nom' => $request->get('commune')]);

        $client = new Client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            'communes_id' => $commune->id,
        ]);

        $client->save();
        event(new ClientCreated($client));
        return redirect('/client.index')->with('success', 'Client ajouté avec succès');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        $communes = Commune::all();
        return view('client.edit', compact('client', 'communes'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $communes = Commune::all();
        return view('client.edit', compact('client', 'communes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'communes_id' => 'required',
        ]);

        $client = Client::findOrFail($id);
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->telephone = $request->get('telephone');
        $client->email = $request->get('email');
        $client->communes_id = $request->get('communes_id');

        $client->update();

        return redirect('/client.index')->with('success', 'Client modifié avec succès');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect('/client.index')->with('success', 'Client supprimé avec succès');
    }

}
