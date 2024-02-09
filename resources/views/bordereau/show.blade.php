
@extends('Dashboards.layout.Bordereau')
@section('Bod4')

    <h1 class="text-center">BORDEREAU</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Date :</th>
            <td>{{ $bordereau->date }}</td>
        </tr>

        <tr>

            <th style="color: #007bff;">Nom destinataire:</th>
            <td>{{ $bordereau->nom_des }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Coursier:</th>
            <td>{{ $bordereau->coursier->nom }}</td>

        </tr>


    </table>
</div>
@endsection
