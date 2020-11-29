
@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('message'))
                    <div class="alert alert-{{ session('color') }} alert-dismissible fade show" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <a class="btn btn-primary mt-4 mb-3" href="{{route('equipos.create')}}">Crear nuevo equipo</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre equipo</th>
                            <th>Logo</th>
                            <th>Localidad</th>
                            <th>Fecha creación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($equipos as $equipo)
                            @if($equipo->localidades != null)
                            <tr>
                                <td>{{$equipo->id}}</td>
                                <td>{{$equipo->nombre_equipo}}</td>
                                <td><img class="img-fluid rounded mx-auto d-block" src="assets/images/logo_equipos/{{$equipo->logo}}" alt="Responsive image" style="width: 50px"></td>
                                <td>{{$equipo->localidades->localidad}}</td>
                                <td>{{$equipo->created_at}}</td>
                                <td>
                                    <a href="{{route('equipos.show',$equipo->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{route('equipos.edit',$equipo->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="{{route('equipos.delete',$equipo->id)}}" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

