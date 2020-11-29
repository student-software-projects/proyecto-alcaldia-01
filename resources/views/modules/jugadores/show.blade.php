@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombres jugador</th>
                            <td>{{ $jugador->nombres }}</td>
                        </tr>
                        <tr>
                            <th>Apellidos jugador</th>
                            <td>{{ $jugador->apellidos }}</td>
                        </tr>
                        <tr>
                            <th>Numero camiseta</th>
                            <td>{{ $jugador->numero_camisa }}</td>
                        </tr>
                        <tr>
                            <th>Apodo</th>
                            <td>{{ $jugador->apodo }}</td>
                        </tr>
                        <tr>
                            <th>Equipo</th>
                            <td>{{$jugador->equipos->nombre_equipo}}<img class="rounded float-right" src="assets/images/logo_equipos/{{$jugador->equipos->logo}}" alt="Responsive image" style="width: 50px"></td>
                        </tr>
                        <tr>
                            <th>Creación</th>
                            <td>{{ $jugador->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Actualización</th>
                            <td>{{ $jugador->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-block btn-sm" href="{{ route('jugadores.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection



