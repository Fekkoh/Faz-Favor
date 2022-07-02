@extends('layouts.outer')

@section('content')
<!-- about section -->
{{-- <div class="text-bg-c" style="background-color: #5e5ab5"> --}}
{{-- <div class="about" style="background-color: #5e5ab5"> --}}
  {{--   <div class="container">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="titlepage">
                    <h2>Sobre Nós</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 botao">
                <p>Este website tem o intuito de fazer com que as pessoas sejam mais solidárias. <br><br>
                    Se precisar de ajuda basta pedir e alguém irá ajudar, no botão abaixo. <br><br>
                    Se simplesmente quiser ajudar pessoas este também é um local ideal pode ajudar quantas fezes quiser sem limite, no botão abaixo.</p>
                    <a href="{{ route('needhelp.create')}}">Preciso de um favor</a>
                    <a href="/contact">Quero ajudar</a>
            </div>

            <div class="col-md-6" style="margin-bottom: 20px">
                <div class="about_img">
                    <figure><img src="assets/images/about.jpg" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="about" style="background-color: #5e5ab5">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="text-bg">
                    <div class="titlepage">
                        <h2>Sobre nós</h2>
                        <p>Este website tem o intuito de fazer com que as pessoas sejam mais solidárias. <br><br>
                            Se precisar de ajuda basta pedir e alguém irá ajudar, no botão abaixo. <br><br>
                            Se simplesmente quiser ajudar pessoas este também é um local ideal pode ajudar quantas fezes quiser sem limite, no botão abaixo.</p>
                        <a href="{{ route('favor_request.create')}}">Preciso de um favor</a>
                        <a href="/search">Quero ajudar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="about_img">
                    <figure><img src="assets/images/about.jpg" alt="#"/></figure>
                </div>
            </div>
       </div>
    </div>
</div>
 <!-- end about section -->
@endsection
