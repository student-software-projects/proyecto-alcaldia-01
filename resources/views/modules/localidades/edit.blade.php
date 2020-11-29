@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Actualizar localidad</h3>
                        </div>
                        <form action="{{route('localidades.update',$localidad->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="localidad">Nombre localidad</label>
                                <input name="localidad" id="localidad" type="text" class="form-control" placeholder="Nombre localidad" value="{{$localidad->localidad}}" autofocus>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block btn-sm">Actualizar</button>
                            <a  class="btn btn-info btn-block btn-sm" href="{{ route('localidades.index') }}">Cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

