@extends('Dashboards.layout.Users')

@section('Uti1')
<div class="container-fluid" id="container-wrapper">


    <div>
            <div class="row">

                <div class="col-lg-11">

                    <h1 style="font-weight: bold;">GESTION DES UTILISATEURS</h1>

                </div>

                <div class="col-lg-1">
                    <a class="btn btn-success" href="{{ url('user/create') }}">Ajouter</a>
                </div>

            </div>



            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <script>
                        setTimeout(function(){
                            window.location.href = '{{ url('/user.index') }}';
                        }, {{ session('delay', 3) * 1000 }});
                    </script>
                </div>
            @endif

            <table class="table table-bordered">

                <tr>

                    <th>No</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>

                </tr>

                @foreach ($users as $item)

                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->password}}</td>
                        <td>

                            <form action="{{ url('user/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-info" href="{{ url('user/'. $item->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a class="btn btn-primary" href="{{ url('user/'. $item->id .'/edit') }}">
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
