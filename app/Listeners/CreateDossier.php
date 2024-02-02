<?php

namespace App\Listeners;

use App\Models\Dossier;
use App\Events\ClientCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateDossier
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

        // Créer un nouveau dossier associé au client
        Dossier::create([
            'client_id' => $client->id,
            'nom' => "Dossier_Client_{$client->id}",
        ]);
    }
}
