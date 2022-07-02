@extends('layouts.outer')

@section('content')
    <!-- register -->
    <div class="form-dinamico">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <form method="POST" id="request" class="main_form" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="login-form @error('email') is-invalid @enderror" placeholder="Email"
                                    type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    autofocus id="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="login-form @error('password') is-invalid @enderror" placeholder="Password"
                                    type="password" name="password" required autocomplete="current-password" id="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 text-dinamico" style="margin-left: 0px">
                                <input class="form-check-input-c text-dinamico" type="checkbox" name="remember"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-dinamico"
                                    for="remember">{{ __('Lembrar-me') }}</label>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"
                                        style="float: right">Esqueci-me da passowrd?</a>
                                @endif
                            </div>

                            <div class="col-md-12 text-dinamico">
                                <button type="submit" class="send_btn">{{ __('Login') }}</button>

                                <a href="/register">Criar conta</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->
@endsection
