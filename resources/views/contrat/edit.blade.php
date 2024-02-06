
@extends("Dashboards.layout.Contrats")

@section("Con3")
<div>



    <h1 class="text-center">MODIFIER LE CONTRAT </h1>


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
            <form method="post" action="{{ route('contrat.update', ['id' => $contrat->id]) }}" >
                @method('PATCH')
                @csrf


                <div class="form-group mb-3">

                    <label for="type"  style="color: #007bff;">Type:</label>
                    <input type="text" class="form-control" id="Type" placeholder="Entrer le type" name="nom" value="{{ $contrat->type }}">

                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" value="{{ $contrat->description }}"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="durer" class="form-label">Durée en mois</label>
                    <input type="number" class="form-control" id="durer" name="durer" value="{{ $contrat->durer }}">
                </div>

                <div class="form-group mb-3">
                    <label for="client_id" style="color: #007bff;">Client :</label>
                    <select class="form-control" id="client_id" name="client_id" >
                        <option >Sélectionnez une client</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}" @if(old('client_id') == $client->id) selected @endif>{{ $client->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>
@endsection
