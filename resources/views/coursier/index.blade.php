@extends('Dashboards.layout.Coursiers')
@section('Cou1')

<div class="container-fluid" id="container-wrapper">

    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h2>GESTION DES COURSIERS</h2>

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
                    <th>Zone</th>
                    <th>CNI</th>
                    <th>Type_Vehicule</th>
                    <th>Photo </th>
                    <th>Email</th>
                    <th>Plaque_immatriculation </th>
                    <th>Actions</th>

                </tr>

                @foreach ($coursiers as $item)

                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->nom}}</td>
                        <td>{{ $item->prenom}}</td>
                        <td>{{ $item->numero_telephone}}</td>
                        <td>{{ $item->numero_telephone_2}}</td>
                        <td>{{ $item->numero_permis_conduire}}</td>
                        <td>{{ $item->salaire}}</td>
                        <td>{{ $item->zone->nom}}</td>
                        <td>{{ $item->cni }}</td>
                        <td>{{ $item->type_vehicule }}</td>
                        <td>{{ $item->photo }}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->plaque_immatriculation }}</td>
                        <td>


                            <form action="{{ url('coursier/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('coursier/'. $item->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a class="btn btn-primary" href="{{ url('coursier/'. $item->id .'/edit') }}">
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
    <!-- Modal Logout -->


  </div>


@endsection
