@extends('Dashboards.layout.Communes')
@section('Co2')

<div style="margin-left: 3%; font-weight: bold;">
<h1 class="text-center">AJOUTER UNE COMMUNE</h1>


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
<form action="{{ url('commune') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="nom" class=" text-gray" style="color: #007bff;">Commune:</label>
        <input type="text"  class="form-control" id="nom" placeholder="Entrez la Commune" name="nom">
    </div>

    <button type="submit" class="btn btn-primary">Enregister</button>

</form>
</div>
</div>

@endsection
