@extends('Dashboards.layout.Ligne_bordereau')

@section('lBod1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">ligne_Bordereau</h1>

                </div>
{{--
                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('lbordereau/create') }}">Ajouter</a>
                </div> --}}

            </div>


            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <script>
                    setTimeout(function(){
                        window.location.href = '{{ url('/lbordereau.index') }}';
                    }, {{ session('delay', 3) * 1000 }});
                </script>
            </div>
        @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Nom</th>
                    <th>Colis</th>
                    <th>Bordereau</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Actions</th>

                </tr>

                @foreach ($lbordereaus as $item)

                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->Nom }}</td>
                        <td>{{ $item->Colis->categorie }}</td>
                        <td>{{ $item->bordereau->id}}</td>
                        <td>


                            <form action="{{ url('lbordereau/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('lbordereau/'. $item->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a class="btn btn-primary" href="{{ url('lbordereau/'. $item->id .'/edit') }}">
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
