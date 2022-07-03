@extends('layouts.outer')

@section('content')
    <!-- laptop1 -->
        <div class="favor_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 favor_request" id="over">
                        <div class="favor_image">
                            <img src="assets/images/about.jpg" alt="#"/>
                        </div>
                    </div>

                    <div class="col-md-4 favor_request botao_favor_request" id="over" style="height: 150px">
                        <h6>Utilizador</h6>
                        <div class="utilizador">
                            <p>{{-- {{ $favor_request->user->name }} --}}Username</p>
                        </div>
                        <a class="" href="#">Aceitar pedido</a>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-7 favor_request">
                        <p class="data">Publicado {{ $favor_request->created_at }}</p>
                        <h1 class="titulo">{{ $favor_request->title }}</h1>
                        <p class="area">{{ $favor_request->area->name }}</p>
                        <hr>
                        <div class="descricao">
                            <h2>Descrição</h2>
                            <p>{{ $favor_request->description }}</p>
                        </div>
                        <hr>
                        <p>Preciso de ajuda dia {{ $favor_request->date }} às {{ $favor_request->hour }}</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- end laptop1 -->

    <script>
    </script>
@endsection
