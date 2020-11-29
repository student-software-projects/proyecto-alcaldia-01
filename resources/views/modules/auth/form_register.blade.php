@extends('layouts.auth.app')
@section('content')
<div class="home-btn d-none d-sm-block">
    <a href="{{route('login.form_login')}}" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Registarse</h5>
                                    <p>Registarse en el aplicativo</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="{{route('login.form_register')}}">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{route('login.register')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico">
                                </div>

                                <div class="form-group">
                                    <label for="names">Nombres</label>
                                    <input type="text" class="form-control" name="names" id="names" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <label for="lastnames">Apellidos</label>
                                    <input type="text" class="form-control" name="lastnames" id="lastnames" placeholder="Apellidos">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Registrarse</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Ya tienes una cuenta ? <a href="{{route('login.form_login')}}" class="font-weight-medium text-primary"> Login</a> </p></div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
