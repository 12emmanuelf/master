
@extends("Dashboards.layout.app")

@section("contenu")
<div>



    <h1 class="text-center">MODIFIER LA COMMUNE </h1>


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
        <form method="post" action="{{ route('commune.update', ['id' => $commune->id]) }}">
            @method('PATCH')
                @csrf


                <div class="form-group mb-3">

                    <label for="nom"  style="color: #007bff;">Commune:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrer la commune" name="nom" value="{{ $commune->nom }}">

                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>
@endsection
