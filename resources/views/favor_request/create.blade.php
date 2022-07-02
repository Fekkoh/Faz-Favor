@extends('layouts.outer')

@section('content')
<!-- login -->
<div class="form-dinamico">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Pedir ajuda</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form class="main_form" method="POST" action="/favor_request">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input class="login-form" placeholder="Titulo" type="text" name="title" value="{{ old('title') }}" required autofocus id="title">
                        </div>

                        <div class="col-md-12">
                            <input class="login-form" placeholder="Data" type="date" name="date" value="{{ old('date') }}" required id="date"/>
                        </div>

                        <div class="col-md-12" style="color: white">
                            <input class="login-form" placeholder="Hora" type="time" name="hour" value="{{ old('hour') }}" required id="hour"/>
                        </div>

                        <div class="col-md-12">
                            <select class="login-form" name="area">
                                <option value="DO" selected="selected" disabled>Selecione uma área</option>

                                @foreach ($area as $area)
                                    @if ($area->id == old('area'))
                                        <option value="{{ $area->id }}" selected>{{ $area->name }}</option>
                                    @else
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <textarea class="login-form textarea" rows="7" placeholder="Descrição" name="description" value="{{ old('description') }}" required id="description"></textarea>
                        </div>

                        <div class="col-md-12 text-dinamico">
                            <button type="submit" class="send_btn">{{ __('Pedir ajuda') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
