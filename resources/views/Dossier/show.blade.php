@include('Dashboards.layout.Dossiers')
@section('Do4')

    <h1>Gestion des Clients</h1>


    <table class="table table-bordered">

        <tr>
            <th>Expedition A :</th>
            <td>{{ $colis->dsetinataire}}</td>
        </tr>

        <tr>

            <th>Adresse:</th>
            <td>{{ $colis->adresse}}</td>

        </tr>

        <tr>

            <th>Telephone:</th>
            <td>{{ $colis->telephone }}</td>

        </tr>


        <tr>

            <th>Réference:</th>
            <td>{{ $colis->reference }}</td>

        </tr>

        <tr>

            <th>Nom du coursier:</th>
            <td>{{ $colis->nomC }}</td>

        </tr>



    </table>


@endsection
