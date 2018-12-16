@extends('layouts.app')

@section('content')
<div class="w-100 h-100">
    <div class="row  h-100">
        @include('left.leftbody')
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-right">
                    <div class="col-md-8">
                        <div class="col-12 head-loguin">
                            <img src="{{ asset('img/logo_login.png') }}" alt="">
                            <h1>Iniciar sesión</h1>
                        </div>
                        <div class="col-12 col-md-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-12 col-md-12 col-form-label text-left">Correo eletronico</label>

                                    <div class="col-12 col-md-12">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-12 col-md-12 col-form-label text-left">Contraseña</label>

                                    <div class="col-12 col-md-12">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                Recordar mi cuenta
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12  col-md-12 text-left">
                                        <button type="submit" class="btn btn-primary">
                                            iniciar sesión
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
