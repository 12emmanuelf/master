@extends('Dashboards.layout.Zones')

@section('Zo1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">Gestion des Zone</h1>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('zone/create') }}">Ajouter</a>
                </div>

            </div>



            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <script>
                        setTimeout(function(){
                            window.location.href = '{{ url('/zone.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Nom</th>
                    <th>Commune</th>
                    <th>Actions</th>

                </tr>

                @foreach ($zones as $index => $zone)

                    <tr>
                        <td>{{ $index + 1}}</td>
                        <td>{{ $zone->nom }}</td>
                        <td>{{ $zone->commune_id }}</td>
                        <td>

                            <form action="{{ url('zone/'. $zone->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('zone/'. $zone->id) }}">
                                    <i class="fas fa-eye"></i> Voir
                                </a>

                                <a class="btn btn-primary" href="{{ url('zone/'. $zone->id .'/edit') }}">
                                    <i class="fas fa-edit"></i> Éditer
                                </a>

                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach
            </table>

    </div>



  </div>


@endsection
