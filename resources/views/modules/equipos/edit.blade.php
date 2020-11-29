@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Nuevo equipo</h3>
                        </div>
                        <form action="{{route('equipos.update',$equipo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre_equipo">Nombre equipo</label>
                                <input name="nombre_equipo" id="nombre_equipo" type="text" class="form-control" placeholder="Nombre equipo" value="{{$equipo->nombre_equipo}}" autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">LOGO</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="logo" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Logo</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="localidades_id">Localidad</label>
                                <select name="localidades_id" id="localidades_id" class="form-control" required>
                                    <option value="0">Seleccione</option>
                                    @foreach($localidades as $localidad)
                                        <option {{ $localidad->id==$equipo->localidades_id ? ' selected ' : '' }} value="{{$localidad->id}}">{{$localidad->localidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success btn-block btn-sm">Guardar</button>
                            <a  class="btn btn-info btn-block btn-sm" href="{{ route('equipos.index') }}">Cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

