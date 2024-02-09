@extends('Dashboards.layout.Bordereau')
@section('Bod2')

<div style="margin-left: 3%; font-weight: bold;">
    <h1 class="text-center">AJOUTER UN BORDEREAU</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-2">
            <button type="button" id="ajouterLigne" class="btn btn-success btn-lg"> Nouvelle ligne</button>
        </div>
    </div>

    <br>

    <div>
        <form id="bordereauForm" action="{{ url('enregistrer') }}" method="POST">
            @csrf

            <!-- Les champs du premier formulaire (bordereau) -->
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="date" style="color: #007bff;">Date:</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="nom_des" style="color: #007bff;">Nom destinataire:</label>
                        <input type="text" class="form-control" id="nom_des" name="nom_des">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="coursier_id" style="color: #007bff;">Coursier :</label>
                        <select class="form-control" id="coursier_id" name="coursier_id">
                            <option>Sélectionnez un coursier</option>
                            @foreach($coursiers as $coursier)
                            <option value="{{ $coursier->id }}">{{ $coursier->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Les champs du deuxième formulaire (lbordereau) -->
                <div id="nouvelleLigne" class="col-md-12"></div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>

</div>

<!-- Formulaire pour ajouter une nouvelle ligne -->
<form action="{{ url('lbordereau') }}" method="POST" id="newLineForm" style="display: none;">
    <div class="form-row">
        <div class="col-md-3">
            <div class="form-group mb-3">
                <select class="form-control" id="colis_id" name="colis_id">
                    <option>Sélectionnez une catégorie</option>
                    @foreach($colis as $col)
                    <option value="{{ $col->id }}">{{ $col->categorie }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="nom" placeholder="nom du colis">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group mb-3">
                <input type="number" class="form-control" name="prix" placeholder="Prix">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-3">
                <input type="number" class="form-control" name="quantite" placeholder="Quantité">
            </div>
        </div>
    </div>
</form>

<!-- Script JavaScript pour ajouter dynamiquement des lignes -->
<script>
    var btnAjouterLigne = document.getElementById('ajouterLigne');
    btnAjouterLigne.addEventListener('click', function() {
        // Cloner le formulaire de nouvelle ligne
        var newLineForm = document.getElementById('newLineForm').cloneNode(true);
        newLineForm.removeAttribute('id'); // Supprimer l'identifiant pour éviter les doublons

        // Afficher le formulaire de nouvelle ligne
        newLineForm.style.display = 'block';

        // Ajouter la nouvelle ligne au formulaire
        document.getElementById('nouvelleLigne').appendChild(newLineForm);
    });
</script>

@endsection
