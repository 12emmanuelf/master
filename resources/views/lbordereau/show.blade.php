
@extends('Dashboards.layout.Ligne_bordereau')
@section('lBod4')

    <h1 class="text-center">LIGNE_BORDEREAU</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Nom :</th>
            <td>{{ $lbordereau->Nom }}</td>
        </tr>

        <tr>

            <th style="color: #007bff;">Prix:</th>
            <td>{{ $lbordereau->prix }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Quantité:</th>
            <td>{{ $lbordereau->quantite }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">Categorie:</th>
            <td>{{ $lbordereau->colis->categorie }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">N°Bordereau:</th>
            <td>{{ $lbordereau->bordereau->id}}</td>

        </tr>


    </table>
</div>
@endsection
