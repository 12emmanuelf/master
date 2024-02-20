
@extends('Dashboards.layout.app')
@section('contenu')

    <h1 class="text-center">COMMUNE</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Nom :</th>
            <td>{{ $commune->nom }}</td>
        </tr>



    </table>
</div>
@endsection
