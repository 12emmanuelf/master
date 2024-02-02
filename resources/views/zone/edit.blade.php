
@extends("Dashboards.layout.Zones")

@section("Vi3")
<div>



    <h1 class="text-center">MODIFIER LA ZONE </h1>


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
            <form method="post" action="{{ route('zone.update', ['zone' => $zone->id]) }}" >
                @method('PATCH')
                @csrf


                <div class="form-group mb-3">
                    <label for="commune_id" style="color: #007bff;">Commune:</label>
                    <select class="form-control" id="commune_id" name="commune_id">
                        <option value="">Sélectionnez une Commune</option>
                        @foreach($communes as $commune)
                            <option value="{{ $commune->id }}">{{ $commune->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">

                    <label for="nom"  style="color: #007bff;">Zone:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrer la zone" name="nom" value="{{ $zone->nom }}">

                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>
@endsection
