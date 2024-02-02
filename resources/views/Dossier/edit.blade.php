@foreach ($dossiers as $dossier)
    <p>{{ $dossier->nom }}</p>
    <!-- Afficher d'autres détails du dossier si nécessaire -->
@endforeach
