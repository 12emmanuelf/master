
@extends('Dashboards.layout.Contrats')
@section('Con4')

    <h1 class="text-center">CONTRAT</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Type :</th>
            <td>{{ $contrat->type }}</td>
        </tr>

        <tr>

            <th style="color: #007bff;">Description:</th>
            <td>{{ $contrat->description }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Durée en mois:</th>
            <td>{{ $contrat->durer }}</td>

        </tr>


        <tr>
            <th style="color: #007bff;">Client:</th>
            <td>{{ $contrat->client_id }}</td>
        </tr>


    </table>
</div>
@endsection
