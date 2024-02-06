@extends('Dashboards.layout.Dossiers')
@section('Do4')

    <h1 class="text-center">Dossiers</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Nom du client :</th>
            <td>{{ $client->nom }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Prenom du client :</th>
            <td>{{ $client->prenom }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Téléphone :</th>
            <td>{{ $client->telephone }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Email :</th>
            <td>{{ $client->email }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Secteur d'activité :</th>
            <td>{{ $client->secteur_activité}}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Quartier:</th>
            <td>{{ $client->zone->nom }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Commune :</th>
            <td>{{ $client->commune ? $client->commune->nom}}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Contrat:</th>
            <td>{{ $client->contrat->type }}</td>
        </tr>

    </table>
</div>
@endsection
