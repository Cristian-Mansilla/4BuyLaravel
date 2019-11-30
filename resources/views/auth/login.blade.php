@extends('layouts.app')

@section('fondo')
  bg-login
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center margin-top">
        <div class="col-md-8">
            <div class="card bg-blue box-shadow position-relative">
              <div class="card-header titulo">{{ __('Iniciar sesión') }}
                <img class="logo-user box-shadow" src="/Imagenes/Login/user.jpg" alt="">
              </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="p-4">
                      <div class="form-group row">
                          <label for="usuario" class="col-md-4 col-form-label text-md-right">Usuario: </label>

                          <div class="col-md-6">
                              <input id="usuario" type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus>

                              @error('user')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6 offset-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                      {{ __('Recordarme') }}
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                              {{ __('Iniciar sesión') }}
                            </button>

                              @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('¿Olvidaste tu contraseña?') }}
                                  </a>
                              @endif
                          </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
