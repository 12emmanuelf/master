@extends('Dashboards.layout.Coursiers')
@section('Cou1')

<div class="container-fluid" id="container-wrapper">

    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h2>Gestion des coursiers</h2>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('coursier/create') }}">Ajouter</a>
                </div>

            </div>



     @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <script>
                setTimeout(function(){
                    window.location.href = '{{ url('/coursier.index') }}';
                }, {{ session('delay', 3) * 1000 }});
            </script>
        </div>
    @endif



            <div class="table-responsive">

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Numero_telephone</th>
                    <th>Numero_telephone_2</th>
                    <th>Numero_Permis_Conduire</th>
                    <th>Salaire</th>
                    <th>Statut</th>
                    <th>CNI</th>
                    <th>Type_Vehicule</th>
                    <th>Photo </th>
                    <th>Email</th>
                    <th>Plaque_immatriculation </th>
                    <th>Actions</th>

                </tr>

                @foreach ($coursiers as $index => $coursier)

                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $coursier->nom }}</td>
                        <td>{{ $coursier->prenom}}</td>
                        <td>{{ $coursier->numero_telephone}}</td>
                        <td>{{ $coursier->numero_telephone_2}}</td>
                        <td>{{ $coursier->numero_permis_conduire}}</td>
                        <td>{{ $coursier->salaire}}</td>
                        <td>{{ $coursier->statut }}</td>
                        <td>{{ $coursier->cni }}</td>
                        <td>{{ $coursier->type_vehicule }}</td>
                        <td>{{ $coursier->photo }}</td>
                        <td>{{ $coursier->email}}</td>
                        <td>{{ $coursier->plaque_immatriculation }}</td>
                        <td>

                            <form action="{{ url('coursier/'. $coursier->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info btn-sm" href="{{ url('coursier/'. $coursier->id) }}">
                                        Voir
                                </a>

                                <a class="btn btn-primary btn-sm" href="{{ url('coursier/'. $coursier->id .'/edit') }}">
                                    Modifier
                                </a>

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Supprimer
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach
            </table>
        </div>
    </div>
    <!-- Modal Logout -->


  </div>


@endsection
