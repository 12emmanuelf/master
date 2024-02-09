
@extends('Dashboards.layout.Colis')
@section('Col4')

    <h1 class="text-center">COlis</h1>

<div class="col-md-10 mx-auto">
    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Categorie :</th>
            <td>{{ $colis->categorie}}</td>
        </tr>



    </table>
</div>
@endsection
