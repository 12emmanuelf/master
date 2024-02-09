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

        <div class="col-lg-9">

            <button type="submit" class="btn btn-primary">Enregistrer</button>

        </div>

        <div class="col-lg-2">
            <button type="submit" id="ajouterLigne" class="btn btn-success btn-lg"> Nouvelle ligne</button>
        </div>

    </div>

    <br>




    <div >
        <form id="bordereauForm" action="{{ url('bordereau') }}" method="POST">
            @csrf

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
            </div>

            <!-- Placeholder pour ajouter de nouvelles lignes -->
            <div id="nouvelleLigne"></div>

        </form>
    </div>
</div>

<!-- Script JavaScript pour ajouter dynamiquement des lignes -->
<script>
    var btnAjouterLigne = document.getElementById('ajouterLigne');
    btnAjouterLigne.addEventListener('click', function() {
      // Création d'une nouvelle div pour la ligne
      var nouvelleLigne = document.createElement('div');
      nouvelleLigne.classList.add('ligne');

      // Création des champs de formulaire pour la nouvelle ligne
      var input1 = document.createElement('input');
        input1.setAttribute('type', 'text');
        input1.setAttribute('name', 'colis_id');
        input1.setAttribute('placeholder', 'Colis');
        input1.classList.add('form-control', 'col-md-3');

        var input2 = document.createElement('input');
        input2.setAttribute('type', 'decimal');
        input2.setAttribute('name', 'prix');
        input2.setAttribute('placeholder', 'Prix');
        // input2.classList.add('form-control', 'col-md-5');

        var input3 = document.createElement('input');
        input3.setAttribute('type', 'decimal');
        input3.setAttribute('name', 'quantite');
        input3.setAttribute('placeholder', 'Quantité');
        // input3.classList.add('form-control', 'col-md-4');

        // Créer une div pour la rangée
        var rowDiv = document.createElement('div');
        rowDiv.classList.add('row');

        // Ajouter les champs à la rangée
        rowDiv.appendChild(input1);
        rowDiv.appendChild(input2);
        rowDiv.appendChild(input3);

        // Ajouter la rangée à la nouvelle ligne
        nouvelleLigne.appendChild(rowDiv);
            nouvelleLigne.appendChild(input1);
            nouvelleLigne.appendChild(input2);
            nouvelleLigne.appendChild(input3);
            // Ajoutez autant de champs que nécessaire

      // Ajout de la nouvelle ligne au formulaire
      document.getElementById('nouvelleLigne').appendChild(nouvelleLigne);
    });
</script>

@endsection
