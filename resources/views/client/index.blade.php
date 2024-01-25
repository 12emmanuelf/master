@extends('Dashboards.layout.Clients')

@section('Cli1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">Gestion des Clients</h1>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('client/create') }}">Ajouter</a>
                </div>

            </div>



            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <script>
                        setTimeout(function(){
                            window.location.href = '{{ url('/client.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Commune</th>
                    <th>Actions</th>

                </tr>

                @foreach ($clients as $index => $client)

                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom}}</td>
                        <td>{{ $client->telephone}}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ optional($client->commune)->nom }}</td>
                        <td>

                            <form action="{{ url('client/'. $client->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('client/'. $client->id) }}">
                                    <i class="bi bi-eye text-dark"></i> Voir
                                </a>

                                <a class="btn btn-primary" href="{{ url('client/'. $client->id .'/edit') }}">
                                    <i class="bi bi-pencil text-dark"></i> Modifier
                                </a>

                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash text-dark"></i> Supprimer
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach
            </table>

    </div>



  </div>


@endsection
