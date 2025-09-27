@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Municipios de {{ $estado }}</h2>
    <ul class="list-group">
        @foreach($municipios as $municipio)
        <li class="list-group-item">{{ $municipio }}</li>
        @endforeach
    </ul>
    <a href="{{ route('estados.index') }}" class="btn btn-secondary mt-3">Regresar</a>
</div>
@endsection