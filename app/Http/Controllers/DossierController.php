<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    public function index()
    {

        $dossiers = Dossier::all();
        return view('Dossier.index', compact('dossiers'));
    }

    public function createDossier(Request $request)
        {
                $client_id = $request->input('client_id');
                $client = Client::find($client_id);

                // Créer un nouveau dossier associé au client
                $dossier = Dossier::create([
                    'client_id' => $client->id,
                    'nom' => "Dossier_{$client->id}_{$client->nom}",
                ]);

                // Récupérer tous les dossiers après la création du nouveau dossier
                $dossiers = Dossier::all();

                // Passer les dossiers à la vue dossier.index
                return view('Dossier.index', compact('dossiers'));
        }






}
