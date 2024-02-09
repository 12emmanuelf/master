
@extends("Dashboards.layout.Colis")

@section("Col3")
<div>



    <h1 class="text-center">MODIFIER LE COLIS </h1>


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
        <form method="post" action="{{ route('colis.update', ['id' => $colis->id]) }}">
            @method('PATCH')
                @csrf


                <div class="form-group mb-3">

                    <label for="categorie"  style="color: #007bff;">Categorie:</label>
                    <input type="text" class="form-control" id="categorie" placeholder="Entrer la categorie du colis" name="categorie" value="{{ $commune->categorie }}">

                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>
@endsection
