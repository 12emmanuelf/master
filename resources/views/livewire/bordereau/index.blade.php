<div>

    <div class="row">

        <div class="col-lg-11">

            <h1 style="font-weight: bold;">Bordereau</h1>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('bordereau/create') }}" wire:click="checkout">Ajouter</a>
        </div>

    </div>


    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <script>
            setTimeout(function(){
                window.location.href = '{{ url('/bordereau.index') }}';
            }, {{ session('delay', 3) * 1000 }});
        </script>
    </div>
@endif

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>date</th>
            <th>Nom destinataire</th>
            <th>Coursier</th>
            <th>Actions</th>

        </tr>

        @foreach ($bordereaus as $item)

            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->nom_des }}</td>
                <td>{{ $item->coursier->nom}}</td>
                <td>


                    <form action="{{ url('bordereau/'. $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('bordereau/'. $item->id) }}">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a class="btn btn-primary" href="{{ url('bordereau/'. $item->id .'/edit') }}">
                            <i class="fas fa-edit"></i>
                        </a>

                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>

                        <a class="btn btn-success" href="{{ url('bordereau/'. $item->id .'/download') }}">
                            <i class="fas fa-download"></i>
                        </a>

                    </form>

                </td>

            </tr>

        @endforeach
    </table>

</div>
