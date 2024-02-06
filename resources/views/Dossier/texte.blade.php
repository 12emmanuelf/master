{{-- @extends('Dashboards.layout.Dossiers')
@section('Do1')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texte à Trous</title>
</head>
<body>
    @foreach ($clients as $client)
            Bonjour Mr {{ $client->nom }} a souscrit un contrat
            @foreach ($contrats as $contrat)
                @if ($contrat->client_id === $client->id)
                    {{ $contrat->type }}
                @endif
            @endforeach
            le {{ $date->format('d/m/Y H:i') }} qui lui donne accès à nos services. Le ou les livreurs associés sont .
    @endforeach
</body>
</html>
@endsection --}}
