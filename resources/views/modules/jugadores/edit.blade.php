@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Actualizar jugador</h3>
                        </div>
                        <form action="{{route('jugadores.update',$jugador->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombres jugador" value="{{$jugador->nombres}}" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input name="apellidos" id="apellidos" type="text" class="form-control" placeholder="Apellidos jugador" value="{{$jugador->apellidos}}">
                            </div>
                            <div class="form-group">
                                <label for="numero_camisa">Numero camiseta</label>
                                <input name="numero_camisa" id="numero_camisa" type="text" class="form-control" placeholder="Numero camiseta jugador" value="{{$jugador->numero_camisa}}">
                            </div>
                            <div class="form-group">
                                <label for="apodo">Apodo</label>
                                <input name="apodo" id="apodo" type="text" class="form-control" placeholder="Apodo" value="{{$jugador->apodo}}">
                            </div>
                            <div class="form-group">
                                <label for="equipo_id">Equipo</label>
                                <select name="equipo_id" id="equipo_id" class="form-control" required>
                                    <option value="0">Seleccione...</option>
                                    @foreach($equipos as $equipo)
                                        @if($equipo->localidades != null)
                                        <option {{ $equipo->id==$jugador->equipo_id ? ' selected ':'' }} value="{{$equipo->id}}">{{$equipo->nombre_equipo}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success btn-block btn-sm">Actualizar</button>
                            <a  class="btn btn-info btn-block btn-sm" href="{{ route('jugadores.index') }}">Cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


