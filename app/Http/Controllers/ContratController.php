<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function index()
    {
        $contrats = Contrat::all();
        return view('contrat.index', compact('contrats'));
    }

    public function create()
    {
        $contrats = Contrat::all();
        $clients = Client::all();
        return view('contrat.create', compact('contrats','clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'description' => 'required',
            'client_id' => 'required'
        ]);

        $clientId = $request->get('client_id');
        $client = Client::find($clientId);

            if ($client) {
                $contrat = new Contrat;
                $contrat->type = $request->get('type');
                $contrat->description = $request->get('description');
                $contrat->client_id = $client->id;
                $contrat->save();

                return redirect()->route('contrat.index')->with('success', 'Contrat ajoutée avec succès');
            } else {
                return redirect()->back()->with('error', 'Le client spécifiée n\'a pas été trouvée.');
            }
        }

    public function show($id)
    {
        $contrat = Contrat::find($id);
        $client = Client::find($contrat->client_id);
        return view('contrat.show', compact('contrat','client'));
    }

    public function edit($id)
    {

        $contrats = Contrat::all();
        $contrat = Contrat::findOrFail($id);
        $clients = Client::all();
        return view('contrat.edit', compact('contrats', 'contrat', 'clients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'description' => 'required',
            'client_id' => 'required'
        ]);

        $clientId = $request->get('client_id');
        $client = Client::find($clientId);
        $contrat = Contrat::findOrFail($id);

        if ($client) {
            $contrat->type = $request->get('type');
            $contrat->description = $request->get('description');
            $contrat->client_id = $client->id;
            $contrat->update();

            return redirect()->route('zone.index')->with('success', 'Contrat modifiée avec succès');
        } else {
            return redirect()->back()->with('error', 'Le client spécifiée n\'a pas été trouvée.');
        }
    }

    public function destroy($id)
    {
        $contrat = Contrat::findOrFail($id);
        $contrat->delete();

        return redirect()->route('contrat.index')->with('success', 'Contrat supprimée avec succès');
    }
}
