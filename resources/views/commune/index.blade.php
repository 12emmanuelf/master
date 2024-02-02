@extends('Dashboards.layout.Communes')

@section('Co1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">Gestion des Communes</h1>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('commune/create') }}">Ajouter</a>
                </div>

            </div>



            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <script>
                        setTimeout(function(){
                            window.location.href = '{{ url('/commune.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Nom</th>
                    <th>Actions</th>

                </tr>

                @foreach ($communes as $index => $commune)

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $commune->nom }}</td>
                        <td>

                            <form action="{{ url('commune/'. $commune->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('commune/'. $commune->id) }}">
                                    <i class="fas fa-eye"></i> Voir
                                </a>

                                <a class="btn btn-primary" href="{{ url('commune/'. $commune->id .'/edit') }}">
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
