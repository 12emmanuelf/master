@extends('Dashboards.layout.Clients')

@section('Cli1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">GESTION DES CLIENTS</h1>

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
                    <th>Zone</th>
                    <th>Actions</th>

                </tr>

                @foreach ($clients as $item)

                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->prenom}}</td>
                        <td>{{ $item->telephone}}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->zone_id }}</td>
                        <td>

                            <form action="{{ url('client/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('client/'. $item->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a class="btn btn-primary" href="{{ url('client/'. $item->id .'/edit') }}">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach
            </table>

    </div>



  </div>


@endsection
