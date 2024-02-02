@extends('Dashboards.layout.Zones')
@section('Zo2')

<div style="margin-left: 3%; font-weight: bold;">
<h1 class="text-center">AJOUTER UNE ZONE</h1>


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
<form action="{{ url('zone') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="commune_id" style="color: #007bff;">Commune :</label>
        <select class="form-control" id="commune_id" name="commune_id">
            <option >Sélectionnez une Commune</option>
            @foreach($communes as $commune)
                <option value="{{ $commune->id }}">{{ $commune->nom }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="nom" class=" text-gray" style="color: #007bff;">Zone:</label>
        <input type="text"  class="form-control" id="nom" placeholder="Entrez la zone" name="nom">
    </div>

    <button type="submit" class="btn btn-primary">Enregister</button>

</form>
</div>
</div>

@endsection
