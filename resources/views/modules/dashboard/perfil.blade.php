@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3>Actualizar perfil</h3>
                    </div>
                    <form action="{{route('dashboard.update',$user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="names">Nombres</label>
                            <input name="names" id="names" type="text" class="form-control" placeholder="Nombres" value="{{$user->names}}">
                        </div>

                        <div class="form-group">
                            <label for="lastnames">Apellidos</label>
                            <input name="lastnames" id="lastnames" type="text" class="form-control" placeholder="Apellidos" value="{{$user->lastnames}}">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block btn-sm">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
