@extends('layouts.outer')

@section('content')
        <!-- banner -->
        <section class="banner_main" style="background-color: #5e5ab5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8" style="padding-left: 200px">
                            <div class="text-bg">
                                <h1>Faz Favor</h1>
                                <p style="color: white">Faz Favor é um site para as pessoas poderem-se ajudar umas às outras sem qualquer custo.</p>
                                <a href="{{ route('favor_request.create')}}">Preciso de um favor</a> <a href="/search">Quero ajudar</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="text_img" style="width: 200px">
                                <img src="assets/images/logo.png" alt="#" style="border-radius: 25%"/>
                            </div>
                        </div>
                    </div>
               </div>
         </section>
         <!-- end banner -->
         <!-- two_box -->
         <div class="two_box">
            <div class="container">
               <div class="row botaoi">
                  <div class="col-md-6">
                     <div class="box_text">
                        <h3>Precisa de um favor?</h3>
                        <p>Ao clicar no botão acima irá ser direcionado para um formulário, basta preencher o formulário e será enviado um pedido de favor em que assim que tiver alguém disponivel será notificado.</p>
                        <a href="{{ route('favor_request.create')}}">Preciso de um favor</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box_text ">
                        <h3>Quer ajudar?</h3>
                        <p>Ao clicar no botão acima irá ser direcionado para a nossa pagina de pedidos de favor em que poderá escolher alguma que esteja dentro das suas capacidades.</p>
                        <a href="/search">Quero ajudar</a>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- two_box -->
@endsection
