
@extends("Dashboards.layout.coursiers")
@section("Cou3")
<div>



    <h1 class="text-center">Modifier le coursier</h1>



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
    <form method="post" action="{{ url('coursier/'. $coursier->id) }}" >
        @method('PATCH')
        @csrf


        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nom" class="text-gray" style="color: #007bff;">Nom :</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom" value={{ $coursier->nom}}>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="prenom" class="text-gray" style="color: #007bff;">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrez un prénom" name="prenom" value={{ $coursier->prenom}}>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="numero_telephone" class="text-gray" style="color: #007bff;">Numéro de téléphone :</label>
                    <input type="tel" class="form-control" id="numero_telephone" placeholder="Entrez un numéro" name="numero_telephone" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" value={{ $coursier->numero_telephone}}>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="numero_telephone_2" class="text-gray" style="color: #007bff;">Deuxième numéro de téléphone :</label>
                    <input type="tel" class="form-control" id="numero_telephone_2" placeholder="Entrez un deuxième numéro" name="numero_telephone_2" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" value={{ $coursier->numero_telephone_2}}>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="numero_permis_conduire" class="text-gray" style="color: #007bff;">Numéro de permis de conduire :</label>
                    <input type="text" class="form-control" id="numero_permis_conduire" placeholder="Numéro de permis de conduire" name="numero_permis_conduire" value={{ $coursier->numero_permis_conduire}}>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="salaire" class="text-gray" style="color: #007bff;">Salaire :</label>
                    <input type="number" class="form-control" id="salaire" placeholder="Salaire" name="salaire" value={{ $coursier->salaire}}>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="zone_id" style="color: #007bff;">Zone :</label>
                    <select class="form-control" id="zone_id" name="zone_id" value={{ $coursier->zone_id}}>
                        <option >Sélectionnez une Zone</option>
                        @foreach($zones as $zone)
                            <option value="{{ $zone->id }}">{{ $zone->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                     <label for="cni" class="text-gray" style="color: #007bff;">CNI:</label>
                     <input type="text" class="form-control" id="cni" name="cni" name="prenom" value={{ $coursier->cni}}>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="type_vehicule" class="text-gray" style="color: #007bff;">Type de véhicule :</label>
                    <select class="form-control" id="type_vehicule" name="type_vehicule" value={{ $coursier->type_vehicule}}>
                        <option value="">Sélectionnez</option>
                        <option value="vélo">Vélo</option>
                        <option value="moto">Moto</option>
                        <option value="voiture">Voiture</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="photo" class="text-gray" style="color: #007bff;">Photo :</label>
                    <input type="URL" class="form-control" id="photo" placeholder="photo" name="photo" value={{ $coursier->photo }}>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="email" class="text-gray" style="color: #007bff;">Email :</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value={{ $coursier->email}}>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="plaque_immatriculation" class="text-gray" style="color: #007bff;">Plaque d'immatriculation :</label>
                    <input type="text" class="form-control" id="plaque_immatriculation" placeholder="Plaque d'immatriculation" name="plaque_immatriculation" value={{ $coursier->plaque_immatriculation}}>

                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>
 </div>
</div>
@endsection
