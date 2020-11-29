@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">Eliminar jugador</h3>
                        </div>
                        <form action="{{route('jugadores.destroy',$jugador->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <h6 class="text-center mt-2">Desea eliminar el jugador {{$jugador->nombres}} {{$jugador->apellidos}}.</h6>
                            <button type="submit" class="btn btn-success btn-lg mt-4 float-right">Si, eliminar.</button>
                            <a href="{{ route('jugadores.index') }}" class="btn btn-danger btn-lg mt-4 float-left">No, regresar.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




