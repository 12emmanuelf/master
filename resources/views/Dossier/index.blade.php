@extends('Dashboards.layout.Dossiers')
@section('Do1')

<h1 class="dossier-tit">LISTE DES DOSSIERS </h1>

<div class="dossier-container">
    @foreach($dossiers as $dossier)
        <div class="dossier-item">
            <a href="{{ route('client.show', ['id' => $dossier->id]) }}" class="access-link"><img src="{{ asset('img/dossier.jfif') }}" alt="Dossier Icon" class="dossier-icon"></a>
            <p class="Dossier-name">{{ $dossier->nom }}</p>

        </div>
    @endforeach
</div>

<style>
        .dossier-tit {
       margin-left: 20px
    }
    .dossier-container {
        display: flex;
        flex-wrap: wrap;
    }

    .dossier-item {
        margin: 20px 30px 20px 0;
    }

    .dossier-icon {
        width: 80px;
        height: 80px;
        margin-left: 20px;
        vertical-align: middle;
    }

    .Dossier-name {
        margin-left: 30px; /* Ajoutez une marge en bas du nom du dossier */
    }

    .access-link {
        margin-left: 10px;
    }
</style>

@endsection
