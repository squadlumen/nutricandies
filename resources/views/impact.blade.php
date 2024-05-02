@extends('layout')
@section('title', 'impact')
@section('content')



    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/nutricandies-cacau.png')" ;
        background-position: center; background-repeat: no-repeat; background-size: cover;>
        <div class=" overlay">
        </div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>{{ trans('messages.sobre_nos') }} <i
                                class="fa fa-chevron-right"></i></span></p>
                    {{-- <h1 class="mb-0 bread">{{ trans('messages.sobre_nos') }}</h1> --}}
                    <h1 class="mb-0 bread">IMPACT</h1>
                    <a href="#sobre"> <i class="fa fa-angle-double-down fa-lg" style="color: white"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-sm">

        <section id="publico-alvo">
            <h2>Público-Alvo</h2>
            <p>Nosso público-alvo são pessoas preocupadas com a saúde e bem-estar, interessadas em opções de alimentos
                naturais e nutritivos.</p>
        </section>

        <section id="beneficios-cacau">

            <h2>Benefícios do Cacau</h2>

            <p>O cacau é uma fruta rica em antioxidantes, vitaminas e minerais essenciais para a saúde, além de ser a base
                para a produção de chocolate. O cacau é uma fruta rica em antioxidantes, vitaminas e minerais essenciais para a saúde, além de ser a base
                para a produção de chocolate.</p>

            <div class="image-container">
                <img src="/images/calma-chocolates.jpg" class="img-fluid rounded mx-auto d-block w-50" alt="Fruta de cacau">
            </div>
        </section>

        <section id="impacto-chocolate">
            <h2>Impacto do Chocolate</h2>
            <p>O chocolate produzido a partir do cacau pode proporcionar benefícios à saúde quando consumido com moderação,
                especialmente o chocolate amargo com alto teor de cacau.</p>

                <div class="image-container">
                    <img src="/images/calma-chocolates.jpg" class="img-fluid rounded mx-auto d-block w-50" alt="Fruta de cacau">
                </div>
        </section>

    </div>


    <style>
        main {
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
        }

        h2{
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
