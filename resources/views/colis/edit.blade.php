@extends("Dashboards.layout.Colis")
@section("Co3")
<div class="container mt-5">



    <h1>Modifier Client</h1>


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

            <label for="expedition" class="form-label">Expédition à</label>
            <input type="text" class="form-control" id="expedition" name="expedition" value="{{ $colis->expedition}}">
        </div>

        <div class="form-group mb-3">

            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $colis->adresse}}">
        </div>

        <div class="form-group mb-3">

            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" value="{{ $colis->ville}}">
        </div>


        <div class="form-group mb-3">

            <label for="code_postal" class="form-label">Code Postal</label>
                <input type="text" class="form-control" id="code_postal" name="code_postal" value="{{ $colis->code_postale}}">
        </div>

        <div class="form-group mb-3">
            <label for="n_colis" class="form-label">N° Colis</label>
            <input type="text" class="form-control" id="n_colis" name="n_colis" value="{{ $colis->n_colis}}">
        </div>
        <div class="form-group mb-3">

            <label for="poids" class="form-label">Poids (kg)</label>
                <input type="text" class="form-control" id="poids" name="poids" value="{{ $colis->poids}}">
        </div>
        <div class="form-group mb-3">

            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $colis->poids}}">
        </div>

        <div class="form-group mb-3">

            <label for="reference" class="form-label">Référence</label>
            <input type="text" class="form-control" id="reference" name="reference" value="{{ $colis->reference}}">
        </div>

        <div class="form-group mb-3">

            <label for="expediteur" class="form-label">Expéditeur</label>
            <input type="text" class="form-control" id="expediteur" name="expediteur"  value="{{ $colis->expediteur}}">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>
@endsection
