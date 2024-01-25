@extends('Dashboards.layout.Colis')
@section('Co1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">Gestion des Colis</h1>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('colis/create') }}">Ajouter</a>
                </div>

            </div>



            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <script>
                        setTimeout(function(){
                            window.location.href = '{{ url('/colis.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Destinataire</th>
                    <th>Adresse</th>
                    <th>telephone</th>
                    <th>reference</th>
                    <th>nom du coursier</th>
                    <th>Actions</th>

                </tr>

                @foreach ($colis as $index => $colis)

                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $colis->Destinataire }}</td>
                        <td>{{ $colis->adresse}}</td>
                        <td>{{ $colis->telephone}}</td>
                        <td>{{ $colis->lieu}}</td>
                        <td>{{ $colis->reference}}</td>
                        <td>{{ $colis->nomC}}</td>
                        <td>

                            <form action="{{ url('colis/'. $colis->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('colis/'. $colis->id) }}">
                                    <i class="bi bi-eye text-dark"></i> Voir
                                </a>

                                <a class="btn btn-primary" href="{{ url('colis/'. $colis->id .'/edit') }}">
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
