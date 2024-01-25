@extends('Dashboards.layout.coursiers')
@section('Cou4')

    <h1 class='text-center'>COURSIER</h1>

  <div class="col-md-10 mx-auto">

    <table class="table table-bordered">

        <tr>
            <th style="color: #007bff;">Nom :</th>
            <td>{{ $coursier->nom }}</td>
        </tr>

        <tr>

            <th style="color: #007bff;">Prenom:</th>
            <td>{{ $coursier->prenom }}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">numero_telephone:</th>
            <td>{{ $coursier->numero_telephone}}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">numero_telephone_2:</th>
            <td>{{ $coursier->numero_telephone_2}}</td>

        </tr>

        <tr>
            <th style="color: #007bff;">numero_permis_conduire:</th>
            <td>{{ $coursier->numero_permis_conduire }}</td>
        </tr>


        <tr>

            <th style="color: #007bff;">salaire:</th>
            <td>{{ $coursier->salaire}}</td>

        </tr>

        <tr>
            <th style="color: #007bff;">statut:</th>
            <td>{{ $coursier->statut }}</td>
        </tr>

        <tr>
            <th style="color: #007bff;">CNI:</th>
            <td>{{ $coursier->cni}}</td>
        </tr>

        <tr>

            <th style="color: #007bff;">type_vehicule:</th>
            <td>{{ $coursier->type_vehicule}}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">photo:</th>
            <td>{{ $coursier->photo}}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">email:</th>
            <td>{{ $coursier->email}}</td>

        </tr>

        <tr>

            <th style="color: #007bff;">plaque_immatriculation :</th>
            <td>{{ $coursier->plaque_immatriculation }}</td>

        </tr>
    </table>
  </div>

@endsection
