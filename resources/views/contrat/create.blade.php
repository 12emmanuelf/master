@extends('Dashboards.layout.Clients')
@section('Cli2')

<div style="margin-left: 3%; font-weight: bold;">
<h1 class="text-center">AJOUTER UN CLIENT</h1>


@if ($errors->any())

    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>

@endif
<div class="col-md-10 mx-auto">
<form action="{{ url('client') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="nom" class=" text-gray" style="color: #007bff;">Nom:</label>
        <input type="text"  class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
    </div>

    <div class="form-group mb-3">

        <label for="prenom" style="color: #007bff;">Prenom:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez un prenom" name="prenom">

    </div>

    <div class="form-group mb-3">

        <label for="telephone" style="color: #007bff;">Telephone:</label>
        <input type="phone" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" class="form-control" id="telephone" placeholder="Téléphone" name="telephone">

    </div>


    <div class="form-group mb-3">
        <label for="email" style="color: #007bff;">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>

    <div class="form-group mb-3">
        <label for="zone_id" style="color: #007bff;">Zone :</label>
        <select class="form-control" id="zone_id" name="zone_id">
            <option >Sélectionnez une Zone</option>
            @foreach($zones as $zone)
                <option value="{{ $zone->id }}">{{ $zone->nom }}</option>
            @endforeach
        </select>
    </div>


        {{-- <div class="form-group mb-3">
            <label for="nomZ" class=" text-gray" style="color: #007bff;">Zone:</label>
            <input type="text"  class="form-control" id="nomZ" placeholder="Entrez un nom" name="nomZ">
        </div> --}}


    {{-- <script src="{{asset('https://code.jquery.com/jquery-3.6.4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Tableau associatif pour stocker les zones associées à chaque commune
            var zonesParCommune = {
                "Abobo": ["Baoulé", "Belleville", "Doumé","Kouamékro","N'dotré","Sagbe"],
                "Adjamé": ["Djibi", "Plateau Dokui", "Abattoir","Avocatier"],
                "Anyama": ["Anyama-Kouté"],
                "Attécoubé": ["Mossikro", "Camp Militaire"],
                "Bingerville": [" Akroméa", " M'brathé", "Djibi"],
                "Cocody": ["Angré", "Deux-Plateaux", "Riviera","Cocody-Plateau","Palmeraie"],
                "Koumassi": ["Remblais", "Maroc"],
                "Marcory": ["Zone 4", "Zone 3"],
                "Plateau": ["Dokui", "Gestion", "Indénié","Vallons"],
                "Port-Bouët": ["Vridi", "Zone Industrielle"],
                "Songon": ["songon"],
                "Treichville": ["Locodjro", "Biafra"],
                "Yopougon": [" Koweït", "Maroc", " Niangon","Sideci","Selmer","Wassakara"],

                // Ajoutez les autres communes avec leurs zones respectives ici
            };

            // Fonction pour mettre à jour les options de zone en fonction de la commune sélectionnée
            function mettreAJourZones() {
                console.log("Fonction mettreAJourZones appelée.");

                var communeSelectionnee = $("#communes_id").val();
                console.log("Commune sélectionnée : " + communeSelectionnee);

                var zones = zonesParCommune[communeSelectionnee] || [];

                $("#zones").empty();

                // Ajouter toutes les zones indépendamment de la commune sélectionnée
                $.each(zones, function (index, value) {
                    $("#zones").append('<option value="' + value + '">' + value + '</option>');
                });
            }
    </script> --}}

    <button type="submit" class="btn btn-primary">Enregister</button>

</form>
</div>
</div>

@endsection
