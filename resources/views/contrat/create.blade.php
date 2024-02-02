@extends('Dashboards.layout.Contrats')
@section('Con2')

<div style="margin-left: 3%; font-weight: bold;">
<h1 class="text-center">AJOUTER UN CLIENT</h1>


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
<form action="{{ url('contrat') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="type" class=" text-gray" style="color: #007bff;">Type:</label>
        <input type="text"  class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
    </div>

    <div class="form-group mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
      </div>

    <div class="form-group mb-3">
        <label for="client_id" style="color: #007bff;">Client :</label>
        <select class="form-control" id="client_id" name="client_id">
            <option >Sélectionnez une Client</option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->nom }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregister</button>

</form>
</div>
</div>

@endsection
