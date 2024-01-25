
@extends('Dashbord.layouts.users')


@section('bonjour')

    <h1>Ajouter un utilisateur</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('user') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">

            <label for="telephone">Prenom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrez un prenom" name="prenom">

        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="phone" pattern="[0-9]{10}" title="veuiller entrez des chiffres(10)" class="form-control" id="telephone" placeholder="telphone" name="telephone">

        </div>


        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>

        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection
