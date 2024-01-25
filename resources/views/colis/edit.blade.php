@extends("Dashboards.layout.Colis")
@section("Co3")
<div class="container mt-5">



    <h1>Modifier Colis</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('colis/'. $colis->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="destinataire" class="form-label">Expédition à</label>
            <input type="text" class="form-control" id="expedition" name="expedition" value="{{ $colis->destinataire}}">
        </div>

        <div class="form-group mb-3">

            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $colis->adresse}}">
        </div>

        <div class="form-group mb-3">

            <label for="telephone"  style="color: #007bff;">Telephone:</label>
            <input type="phone" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" class="form-control" id="telephone" placeholder="Téléphone" name="telephone"   value="{{ $colis->telephone}}">

        </div>

            <label for="reference" class="form-label" style="color: #007bff;">Référence</label>
            <input type="text" class="form-control" id="reference" name="reference" value="{{ $colis->reference}}">
        </div>

        <div class="form-group mb-3">

            <label for="nomC" class="form-label" style="color: #007bff;">Nom du coursier</label>
            <input type="text" class="form-control" id="nomC" name="expediteur"  value="{{ $colis->nomC}}">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>
@endsection
