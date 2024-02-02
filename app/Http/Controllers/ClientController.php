<?php

namespace App\Http\Controllers;





use App\Models\Zone;
use App\Models\Client;
use App\Models\Dossier;
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
        $zones = Zone::all();
        return view('client.create', compact('clients','zones'));
    }

    public function store(Request $request)
        {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'telephone' => 'required',
                'email' => 'required',
                'zone_id' =>'required',
            ]);

            $zoneId = $request->get('zone_id');
            $zone = Zone::find($zoneId);

            if($zone){
            $client = new Client;
                $client ->nom  = $request->get('nom');
                $client -> prenom = $request->get('prenom');
                $client-> telephone = $request->get('telephone');
                $client-> email =  $request->get('email');
                $client-> zone_id = $zone ->id;

                $client->save();

                    event(new ClientCreated($client));

                // Création du dossier à l'intérieur du bloc if
                $dossier = Dossier::create([
                    'client_id' => $client->id,
                    'nom' => "Dossier_Client_{$client->id}",
                ]);

                return redirect()->route('client.index')->with('success', 'Client ajouté avec succès');
            } else {
                return redirect()->back()->with('error', 'La zone spécifiée n\'a pas été trouvée.');
            }
        }

        // event(new ClientCreated($client));

    public function show($id)
    {
        $client = Client::findOrFail($id);
        $zone = Zone::find($client->zone_id);
        return view('client.show', compact('client','zone' ));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $zones = Zone::all();
        return view('client.edit', compact('client', 'zones'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'zone_id'=> 'required'
        ]);

        $zoneId = $request->get('zone_id');
        $zone = Zone::find($zoneId);

        if($zone){
        $client = new Client;
            $client ->nom  = $request->get('nom');
            $client -> prenom = $request->get('prenom');
            $client-> telephone = $request->get('telephone');
            $client-> email =  $request->get('email');
            $client-> zone_id = $zone ->id;

            $client->update();
            return redirect()->route('client.index')->with('success', 'Client ajouté avec succès');
                    } else {
                        return redirect()->back()->with('error', 'La zone spécifiée n\'a pas été trouvée.');
                    }
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('client.index')->with('success', 'Client supprimé avec succès');
    }

}
