
@extends('Dashbord.layouts.users')


@section('bonjour')

    <h1>Gestion des utilisateurs</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom :</th>
            <td>{{ $user->nom }}</td>
        </tr>

        <tr>

            <th>Prenom:</th>
            <td>{{ $user->prenom }}</td>

        </tr>


        <tr>

            <th>Email:</th>
            <td>{{ $user->email }}</td>

        </tr>

        <tr>

            <th>Password:</th>
            <td>{{ $user->email }}</td>

        </tr>


    </table>

@endsection
