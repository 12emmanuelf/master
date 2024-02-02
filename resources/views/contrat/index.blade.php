@extends('Dashboards.layout.Contrats')

@section('Con1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">Gestion des Contrats</h1>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('contrat/create') }}">Ajouter</a>
                </div>

            </div>



            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <script>
                        setTimeout(function(){
                            window.location.href = '{{ url('/contrat.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Client</th>
                    <th>Actions</th>

                </tr>

                @foreach ($contrats as $item)

                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->description}}</td>
                        <td>{{ $item->client}}</td>
                        <td>

                            <form action="{{ url('contrat/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('contrat/'. $item->id) }}">
                                    <i class="fas fa-eye"></i> Voir
                                </a>

                                <a class="btn btn-primary" href="{{ url('contrat/'. $item->id .'/edit') }}">
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
