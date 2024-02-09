@extends('Dashboards.layout.Colis')

@section('Col1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">GESTION DES COLIS</h1>

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
                            window.location.href = '{{ url('/categorie.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Categorie</th>
                    <th>Actions</th>

                </tr>

                @foreach ($colis as $item)

                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->categorie }}</td>
                        <td>

                            <form action="{{ url('colis/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('colis/'. $item->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a class="btn btn-primary" href="{{ url('colis/'. $item->id .'/edit') }}">
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
