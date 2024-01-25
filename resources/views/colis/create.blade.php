
@extends("Dashboards.layout.Colis")
@section("Co2")
<div style="margin-left: 3%; font-weight: bold;">



    <h1 class="text-center">Modifier Coursier</h1>


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
        <form action="{{ url('colis') }}" method="POST">
            @csrf


            <div class="form-group mb-3">

                <label for="destinataire" class="form-label" style="color: #007bff;">Expédition à</label>
                <input type="text" class="form-control" id="destinataire" name="destinataire">

            </div>

            <div class="form-group mb-3">

                <label for="adresse" class="form-label" style="color: #007bff;">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" >

            </div>

            <div class="form-group mb-3">

                <label for="telephone" style="color: #007bff;">Telephone:</label>
                <input type="phone" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" class="form-control" id="telephone" placeholder="Téléphone" name="telephone">

            </div>

            <div class="form-group mb-3">

                <label for="reference" class="form-label" style="color: #007bff;">Reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" >
            </div>
            <div class="form-group mb-3">

                <label for="nomC" class="form-label" style="color: #007bff;">Nom du coursier</label>
                <input type="text" class="form-control" id="nomC" name="nomC" >
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>

        </form>
    </div>
</div>
@endsection
