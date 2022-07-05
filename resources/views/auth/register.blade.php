@extends('layouts.outer')

@section('content')
    <!-- login -->
    <div class="form-dinamico">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Criar Conta</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <form class="main_form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="login-form @error('name') is-invalid @enderror" placeholder="Nome"
                                    type="text" name="name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus id="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="login-form @error('email') is-invalid @enderror" placeholder="Email"
                                    type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    id="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="login-form @error('password') is-invalid @enderror" placeholder="Password"
                                    type="password" name="password" required autocomplete="new-password" id="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input class="login-form" placeholder="Confirmar Password" type="password"
                                    name="password_confirmation" required autocomplete="new-password" id="password-confirm">
                            </div>

                            <div class="col-md-12 text-dinamico">
                                <button type="submit" class="send_btn">{{ __('Criar Conta') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
