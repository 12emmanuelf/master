
@extends("Dashboards.layout.Clients")

@section("Cli3")
<div>



    <h1 class="text-center">MODIFIER LE CLIENT </h1>


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
            <form method="post" action="{{ route('clients.update', ['id' => $client->id]) }}" >
                @method('PATCH')
                @csrf


                <div class="form-group mb-3">

                    <label for="nom"  style="color: #007bff;">Nom:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $client->nom }}">

                </div>

                <div class="form-group mb-3">

                    <label for="prenom"  style="color: #007bff;">Prenom:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Entrer une prenom" name="prenom" value="{{ $client->prenom }}">

                </div>

                <div class="form-group mb-3">

                    <label for="telephone"  style="color: #007bff;">Telephone:</label>
                    <input type="phone" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres" class="form-control" id="telephone" placeholder="Téléphone" name="telephone"   value="{{ $client->telephone}}">

                </div>


                <div class="form-group mb-3">

                    <label for="email"  style="color: #007bff;">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Entrer Email" name="email" value="{{ $client->email }}">

                </div>

                <div class="form-group mb-3">
                    <label for="zone_id" style="color: #007bff;">Zone :</label>
                    <select class="form-control" id="zone_id" name="zone_id" value="{{ old('zone_id') }}">
                        <option >Sélectionnez une Zone</option>
                        @foreach($zones as $zone)
                            <option value="{{ $zone->id }}">{{ $zone->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>
@endsection
