
@extends("Dashboards.layout.Clients")

@section("Cli3")
<div>



    <h1 class="text-center">MODIFIER LE CLIENT </h1>


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
            <form method="post" action="{{ route('clients.update', ['client' => $client->id]) }}" >
                @method('PATCH')
                @csrf


                <div class="form-group mb-3">

                    <label for="nom"  style="color: #007bff;">Nom:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $client->nom }}">

                </div>

                <div class="form-group mb-3">

                    <label for="prenom"  style="color: #007bff;">Prenom:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer une prenom" name="prenom" value="{{ $client->prenom }}">

                </div>

                <div class="form-group mb-3">

                    <label for="telephone"  style="color: #007bff;">Telephone:</label>
                    <input type="phone" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" class="form-control" id="telephone" placeholder="Téléphone" name="telephone"   value="{{ $client->telephone}}">

                </div>


                <div class="form-group mb-3">

                    <label for="email"  style="color: #007bff;">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Entrer Email" name="email" value="{{ $client->email }}">

                </div>

                <div class="form-group mb-3">
                    <label for="commune" style="color: #007bff;">Commune:</label>
                    <select class="form-control" id="commune" name="commune" value="{{ old('zone') }}">
                        <option value="commune 1">Abobo</option>
                        <option value="commune 2">Adjamé</option>
                        <option value="commune 3">Anyama</option>
                        <option value="commune 4">Attécoubé</option>
                        <option value="commune 5">Bingerville</option>
                        <option value="commune 6">Cocody</option>
                        <option value="commune 7">Koumassi</option>
                        <option value="commune 8">Marcory</option>
                        <option value="commune 9">Plateau</option>
                        <option value="commune 10">Port-Bouët</option>
                        <option value="commune 11">Songon</option>
                        <option value="commune 12">Treichville</option>
                        <option value="commune 13">Yopougon</option>

                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="zone" style="color: #007bff;">Zone:</label>
                    <select class="form-control" id="zones" placeholder="Nom du quartier" name="zone" value="{{ old('zone') }}">
                        <!-- Options de zone seront ajoutées dynamiquement par JavaScript -->
                    </select>
                </div>


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
                            var communeSelectionnee = $("#commune").val();
                            var zones = zonesParCommune[communeSelectionnee] || [];

                            // Supprime les options actuelles
                            $("#zones").empty();

                            // Ajoute les nouvelles options
                            $.each(zones, function (index, value) {
                                $("#zones").append('<option value="' + value + '">' + value + '</option>');
                            });
                        }

                        // Appelle la fonction lorsqu'il y a un changement dans la sélection de commune
                        $("#commune").change(function () {
                            mettreAJourZones();
                        });

                        // Initialise les options de zone pour la commune par défaut au chargement de la page
                        mettreAJourZones();
                    });
                </script>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>
@endsection
