
@extends("Dashboards.layout.Colis")
@section("Co2")
<div class="container mt-5">



    <h1>Modifier Coursier</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('client/'. $colis->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="expedition" class="form-label">Expédition à</label>
            <input type="text" class="form-control" id="expedition" name="expedition">

        </div>

        <div class="form-group mb-3">

            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" >

        </div>

        <div class="form-group mb-3">

            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville">

        </div>


        <div class="form-group mb-3">
            <label for="n_colis" class="form-label">N° Colis</label>
            <input type="text" class="form-control" id="n_colis" name="n_colis" >
        </div>

        <div class="form-group mb-3">

            <label for="poids" class="form-label">Poids (kg)</label>
                <input type="text" class="form-control" id="poids" name="poids" >
        </div>
        <div class="form-group mb-3">

            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>

        <div class="form-group mb-3">

            <label for="reference" class="form-label">Référence</label>
            <input type="text" class="form-control" id="reference" name="reference">
        </div>


        <div class="form-group mb-3">

            <label for="expediteur" class="form-label">Expéditeur</label>
            <input type="text" class="form-control" id="expediteur" name="expediteur"  value="{{ $colis->expediteur}}">
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>
@endsection
