@extends('layouts.admin.app')

@section('content')
    <div class="jumbotron mt-4">
        <h1 class="display-4">Alcalida equipos de futbol</h1>
        <a href="{{route('equipos.index')}}" class="btn btn-primary btn-lg">Registrar un nuevo equipo</a>
    </div>
@endsection

