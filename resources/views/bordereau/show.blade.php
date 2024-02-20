
@extends('Dashboards.layout.app')
@section('contenu')

    <h1 class="text-center">BORDEREAU</h1>

<div class="col-md-10 mx-auto">

        @livewire('bordereau.show')
</div>
@endsection
