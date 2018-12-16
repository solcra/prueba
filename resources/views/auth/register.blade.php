@extends('layouts.app')

@section('content')
<div class="w-100 h-100">
    <div class="row  h-100">
        @include('left.leftbody')
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 h-100 d-flex align-items-center">
          <div class="container">
              <div class="row justify-content-right">
                <div class="col-12 head-loguin">
                    <img src="{{ asset('img/logo_login.png') }}" alt="">
                    <h1>Registrate</h1>
                </div>
                <div class="col-12 col-md-4">
                    <form method="POST" action="{{ route('register') }}">
                      @csrf

                        <div class="form-group row">
                            <label for="name" class="col-12 col-md-12 col-form-label text-left">Nombres</label>
                            <div class="col-12 col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-12 col-md-12 col-form-label text-left">Apellidos</label>
                            <div class="col-12 col-md-12">
                              <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                              @if ($errors->has('apellidos'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('apellidos') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group row">
                              <label for="celular" class="col-12 col-md-12 col-form-label text-left">Celular</label>
                              <div class="col-12 col-md-12">
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>

                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                              <label for="username" class="col-12 col-md-12 col-form-label text-left">Nombre de usuario</label>
                              <div class="col-12 col-md-12">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group row">
                          <label for="email" class="col-12 col-md-12 col-form-label text-left">Correo eletronico</label>

                          <div class="col-12 col-md-12">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                          <label for="password-confirm" class="col-12 col-md-12 col-form-label text-left">Valide contraseña</label>

                          <div class="col-12 col-md-12">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-12 text-center">
                              <button type="submit" class="btn btn-primary">
                                  REGISTRATE GRATIS
                              </button>
                          </div>
                      </div>
                    </form>
                </div>
              </div>
          </div>  
        </div>
    </div>
</div>
@endsection
