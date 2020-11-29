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
                <a class="btn btn-primary mt-4 mb-3" href="{{route('localidades.create')}}">Crear nueva localidad</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre localidad</th>
                            <th>Fecha creación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($localidades as $localidad)
                            <tr>
                                <td>{{$localidad->id}}</td>
                                <td>{{$localidad->localidad}}</td>
                                <td>{{$localidad->created_at}}</td>
                                <td>
                                    <a href="{{route('localidades.show',$localidad->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{route('localidades.edit',$localidad->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="{{route('localidades.delete',$localidad->id)}}" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

