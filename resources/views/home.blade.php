@extends('layouts.outer')

@section('content')
<div class="form-dinamico">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>

        <div class="col-md-12 main_form text-dinamico">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h3 style="color: white">{{ __('Login feito com sucesso.') }}</h3>
        </div>
    </div>
</div>
@endsection
