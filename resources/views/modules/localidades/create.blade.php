@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Nueva localidad</h3>
                        </div>
                        <form action="{{route('localidades.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="localidad">Nombre localidad</label>
                                <input name="localidad" id="localidad" type="text" class="form-control" placeholder="Nombre localidad" autofocus>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success btn-block btn-sm">Guardar</button>
                            <a  class="btn btn-info btn-block btn-sm" href="{{ route('localidades.index') }}">Cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
