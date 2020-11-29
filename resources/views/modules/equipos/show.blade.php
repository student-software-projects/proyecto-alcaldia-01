@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre equipo</th>
                            <td>{{ $equipo->nombre_equipo }}</td>
                        </tr>
                        <tr>
                            <th>Logo</th>
                            <td><img class="img-fluid rounded mx-auto d-block" src="assets/images/logo_equipos/{{$equipo->logo}}" alt="Responsive image" style="width: 50px"></td>
                        </tr>
                        <tr>
                            <th>Localidad</th>
                            <td>{{ $equipo->localidades->localidad }}</td>
                        </tr>
                        <tr>
                            <th>Creación</th>
                            <td>{{ $equipo->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Actualización</th>
                            <td>{{ $equipo->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-block btn-sm" href="{{ route('equipos.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection


