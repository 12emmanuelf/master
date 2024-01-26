<?php

namespace App\Listeners;

use App\Events\ClientCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateClientFolder
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ClientCreated $event)
    {
        $client = $event->client;

        // Assurez-vous que le dossier parent existe (vous pouvez personnaliser cela selon votre structure)
        $parentFolder = public_path('clients');
        if (!File::exists($parentFolder)) {
            File::makeDirectory($parentFolder, 0777, true);
        }

        // Créez le sous-dossier pour le client
        $clientFolder = $parentFolder . '/' . $client->id;
        File::makeDirectory($clientFolder, 0777, true);

        // Créez un fichier JSON avec les informations du client
        $clientData = [
            'id' => $client->id,
            'name' => $client->name,
            'email' => $client->email,
            // Ajoutez d'autres champs selon vos besoins
            'nom_coursier' => $client->nom_coursier,
        ];

        File::put($clientFolder . '/client_data.json', json_encode($clientData));
    }
}
