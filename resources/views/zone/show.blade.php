
@extends('Dashboards.layout.Zones')
@section('Zo4')

    <h1 class="text-center">ZONE</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Nom :</th>
            <td>{{ $zone->nom }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">Nom :</th>
            <td>{{ $commune->nom }}</td>
        </tr>



    </table>
</div>
@endsection
