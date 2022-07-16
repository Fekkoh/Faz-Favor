@extends('layouts.outer')

@section('content')
<!-- about section -->
<div class="about" style="background-color: #5e5ab5">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="text-bg">
                    <div class="titlepage">
                        <h2>Sobre nós</h2>
                        <p>Este website tem o intuito de fazer com que as pessoas sejam mais solidárias. <br><br>
                            Se precisar de ajuda basta pedir e alguém irá ajudar, basta carregar no botão "Preciso de um Favor". <br><br>
                            Se simplesmente quiser ajudar, este também é um local ideal, pode ajudar quantas fezes quiser, basta carregar no botão "Quero Ajudar".</p>
                        <a href="{{ route('favor_request.create')}}">Preciso de um favor</a>
                        <a href="/search">Quero ajudar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="about_img">
                    <img src="assets/images/pessoas.png" alt="#" />
                </div>
            </div>
       </div>
    </div>
</div>
 <!-- end about section -->
@endsection
