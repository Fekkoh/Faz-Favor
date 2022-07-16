@extends('layouts.outer')

@section('content')
    <!-- laptop1 -->
        <div class="favor_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 favor_request">
                        <p class="data">Publicado {{ date_format($favor_request->created_at, 'd/m/Y') }} </p>
                        <h1 class="titulo" style="font-size: 50px">{{ $favor_request->title }}</h1>
                        <p class="area" style="font-size: 20px">{{ $favor_request->area->name }}</p>
                        <hr>
                        <div class="descricao">
                            <h2 style="font-size: 25px">Descrição</h2>
                            <p style="font-size: 20px">{{ $favor_request->description }}</p>
                        </div>
                        <hr>
                        <p style="font-size: 20px">Preciso de ajuda dia <b> {{ /* date_format($favor_request->date, 'd/m/Y') */$favor_request->date }} </b> às <b>{{ $favor_request->hour }}</b></p>
                    </div>

                    <div class="col-md-4 favor_request" id="over" style="height: 175px">
                        <h6>Utilizador</h6>
                        <div class="utilizador">
                               <p style="font-size: 25px">  {{ $favor_request->userpediu->name }}</p>
                        </div>

                        @auth
                            @if (Auth::id() == $favor_request->userpediu->id )
                                <div class="botao_apagar">
                                    <form action="/my_requests" method="POST">
                                    @csrf
                                        <button class="" style="" value="{{ $favor_request->id }}" name="apagar">Apagar favor</button>
                                    </form>

                                </div>
                            @else
                                <div class="botao_favor_request">
                                    <button id="btn">Ver número</button>
                                </div>
                            @endif
                        @endauth

                        @guest

                        @endguest
                    </div>
                </div>
            </div>
        </div>
    <!-- end laptop1 -->

    <script>
        const btn = document.getElementById('btn');

        // ✅ Change button text on click
        btn.addEventListener('click', function handleClick() {
            btn.textContent = " {{ $favor_request->userpediu->phone }}";
        });

        /**
         * ✅ If you need to change the button's inner HTML use:
         *  - `innerHTML` instead of `textContent`
        */
    </script>
@endsection
