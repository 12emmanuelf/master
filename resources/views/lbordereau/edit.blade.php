
@extends("Dashboards.layout.Ligne_bordereau")
@section("lbod3")
<div class="container mt-5">



    <h1>Modifier la ligne</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('lbordereau/'. $lbordereau->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">
            <label for="colis_id" style="color: #007bff;">Catégorie :</label>
            <select class="form-control" id="colis_id" name="colis_id">
                <option>Sélectionnez une catégorie</option>
                @foreach($colis as $col)
                    <option value="{{ $col->id }}" {{ $col->id == $lbordereau->colis_id ? 'selected' : '' }}>{{ $col->categorie }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="bordereau_id" style="color: #007bff;">N°bordereau :</label>
            <select class="form-control" id="bordereau_id" name="bordereau_id">
                <option>Sélectionnez un bordereau</option>
                @foreach($bordereaus as $bord)
                    <option value="{{ $bord->id }}">{{ $bord->categorie }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group mb-3">
             <input type="text" class="form-control" name="nom" placeholder="nom du colis" value="{{ $lbordereau->nom}}">
        </div>

        <div class="form-group mb-3">

            <input type="number" class="form-control" name="prix" placeholder="Prix" value="{{ $lbordereau->prix}}">
        </div>


        <div class="form-group mb-3">
            <input type="number" class="form-control" name="quantite" placeholder="Quantité" value="{{ $lbordereau->quantite}}">
        </div>



        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>
@endsection
