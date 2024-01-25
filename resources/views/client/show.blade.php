
@extends('Dashboards.layout.Clients')
@section('Cli4')

    <h1 class="text-center">CLIENT</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Nom :</th>
            <td>{{ $client->nom }}</td>
        </tr>

        <tr>

            <th style="color: #007bff;">Prenom:</th>
            <td>{{ $client->prenom }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Telephone:</th>
            <td>{{ $client->telephone }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Email:</th>
            <td>{{ $client->email }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Email:</th>
            <td>{{ $commune->nom }}</td>

        </tr>


    </table>
</div>
@endsection
