@extends('layout')
@section('title', 'onde')
@section('content')



    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/background-impact.jpg')";
        background-position: center; background-repeat: no-repeat; background-size: cover; ">
               <div class="overlay"></div>
               <div class="container">
                 <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                   <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>{{ trans('messages.sobre_nos') }} <i class="fa fa-chevron-right"></i></span></p>
                    {{-- <h1 class="mb-0 bread">{{ trans('messages.sobre_nos') }}</h1> --}}
                    <h1 class="mb-0 bread">Onde</h1>
                    <a href="#sobre"> <i  class="fa fa-angle-double-down fa-lg" style="color: white" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
             </section>

             <div class="container-sm">

                <section id="produto">
                    <h2>O Produto</h2>
                    <p>Nosso chocolate de cacau orgânico é feito com ingredientes naturais e de alta qualidade, proporcionando um sabor delicioso e uma experiência única.</p>
                    <div class="image-container">
                        <img src="chocolate.jpg" alt="Chocolate de cacau orgânico">
                    </div>
                </section>


                <section id="onde-comprar">
                    <h2>Onde Comprar</h2>
                    <p>Você pode encontrar nossas barras de chocolate de cacau orgânico em lojas de produtos naturais, mercados orgânicos e em nossa loja online.</p>
                    <ul>
                        <li><a href="https://www.lojaexemplo.com">Loja Online</a></li>
                        <li>Loja de Produtos Naturais " Bem-Estar Natural" - Endereço: Rua das Flores, 123</li>
        <li>Mercado Orgânico "Sabor da Terra" - Endereço: Avenida Principal, 456</li>
        </ul>
    </section>

    </div>


    <style>
        section {
            margin-bottom: 40px;
        }

        h1,
        h2 {
            color: #ed7423;
        }



        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #ed7423;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>


    <script>
        $(document).ready(function() {
            // Rolar a tela para baixo até 500 pixels ao carregar a página
            $('html, body').animate({
                scrollTop: 700
            }, 2000); // 1000 é a duração da animação em milissegundos
        });
    </script>


@endsection
