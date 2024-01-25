@include('Dashboards.layout.Colis')
@section('Co4')

    <h1>Gestion des Clients</h1>


    <table class="table table-bordered">

        <tr>
            <th>Expedition A :</th>
            <td>{{ $colis->expedition}}</td>
        </tr>

        <tr>

            <th>Adresse:</th>
            <td>{{ $colis->adresse}}</td>

        </tr>

        <tr>

            <th>Ville:</th>
            <td>{{ $colis->ville }}</td>

        </tr>

        <tr>

            <th>Code postale:</th>
            <td>{{ $colis->code_postale }}</td>

        </tr>

        <tr>

            <th>Poids KG:</th>
            <td>{{ $colis->poids }}</td>

        </tr>

        <tr>

            <th>Réference:</th>
            <td>{{ $colis->reference }}</td>

        </tr>

        <tr>

            <th>Expéditeur:</th>
            <td>{{ $colis->expediteur }}</td>

        </tr>



    </table>


@endsection
