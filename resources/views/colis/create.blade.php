@extends('Dashboards.layout.app')
@section('contenu')

<div style="margin-left: 3%; font-weight: bold;">
<h1 class="text-center">AJOUTER UN COLIS</h1>


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
<form action="{{ url('colis') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="categorie" class=" text-gray" style="color: #007bff;">Categorie:</label>
        <input type="text"  class="form-control" id="categorie" placeholder="Entrez la categorie" name="categorie">
    </div>

    <button type="submit" class="btn btn-primary">Enregister</button>

</form>
</div>
</div>

@endsection
