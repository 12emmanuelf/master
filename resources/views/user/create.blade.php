@extends('Dashboards.layout.Users')
@section('Uti2')

<div style="margin-left: 3%; font-weight: bold;">
    <h1 class="text-center">AJOUTER UN UTILISATEUR</h1>


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
    <form action="{{ url('user') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name" class=" text-gray" style="color: #007bff;">Nom:</label>
            <input type="text"  class="form-control" id="name" placeholder="Entrez un nom" name="name">
        </div>




        <div class="form-group mb-3">
            <label for="email" style="color: #007bff;">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>

        <div class="form-group mb-3">

            <label for="password" style="color: #007bff;">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Entrez un mot de passe" name="password">

        </div>



        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>
    </div>
</div>

@endsection
