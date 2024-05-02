@extends('layout')
@section('title', 'home')
@section('content')


    <div class="hero-wrap js-fullheight">
        <video autoplay loop muted playsinline
            style="
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    top: 0;
    left: 0;
  ">
            <source src="/video/bg-video.mp4" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo.
        </video>
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">

                <div class="col-md-7 ftco-animate">

                    <h1 class="mb-4">{{ trans('messages.titulo_principal') }}</h1>

                </div>

            </div>
        </div>
    </div>

     {{-- PARTE 1 --}}
    <section class="ftco-section services-section" id="clientes">
        <div class="container">
            <div class="carousel-container">
                <h2 style="text-align: center;">Construa autoridade exibindo seus clientes</h2>
                <div class="carousel-slide" id="carouselSlide">
                  <img src="images/cliente.webp" alt="Imagem do Cliente">
                  <img src="images/cliente.webp" alt="Imagem do Cliente">
                  <img src="images/cliente.webp" alt="Imagem do Cliente">
                  <img src="images/cliente.webp" alt="Imagem do Cliente">
                  <img src="images/cliente.webp" alt="Imagem do Cliente">
                  <img src="images/cliente.webp" alt="Imagem do Cliente">
                </div>
                <div class="slide-content">
                  <p>Descrição única para todas as imagens.</p>
                </div>
                <div class="carousel-navigation">
                  <button id="prevBtn">Anterior</button>
                  <button id="nextBtn">Próximo</button>
                </div>
              </div>
        </div>
    </section>

    {{-- PARTE 2 --}}

    <section class="ftco-section" id="beneficios">

        <div class="container overflow-hidden text-center">
            <div class="row gy-5">

              <div class="col-6">
                <img src="images/ben.png" alt="Imagem Esquerda">
              </div>

              <div class="col-6">
                <h3 class="title">Benefício 1</h3>
                <p class="description">Descreva de forma prática como você vai gerar
                    este benefício para o cliente e mostre o que
                    muda na vida dele.</p>
              </div>

              <div class="col-6">
                    <h3 class="title">Benefício 2</h3>
                    <p class="description">Descreva de forma prática como você vai gerar
                        este benefício para o cliente e mostre o que
                        muda na vida dele.</p>
              </div>
              <div class="col-6">
                <div class="image-container">
                  <img src="images/ben.png" alt="Imagem Esquerda">
                  <img src="images/ben.png" alt="Imagem Esquerda">
                </div>
              </div>

              <div class="col-6">
                <img src="images/ben.png" alt="Imagem Esquerda">
              </div>

              <div class="col-6">
                <h3 class="title">Benefício 3</h3>
                <p class="description">Descreva de forma prática como você vai gerar
                    este benefício para o cliente e mostre o que
                    muda na vida dele.</p>
              </div>

            </div>
          </div>

    </section>

    <section class="ftco-section" id="features">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                     {{-- {{ trans('messages.comunidades_que_atuamos') }} --}}
                    <strong> <h4 class="mb-4"> Liste aqui as principais features da sua solução</h4> </strong>
                </div>
            </div>

            <div class="container text-center">
                <div class="row g-2">
                  <div class="col-4">
                    <div class="p-3">
                      <div class="row">
                        <div class="col-3">
                          <img src="images/ben.png" alt="Ícone" class="icone">
                        </div>
                        <div class="col-9">
                          <div class="conteudo">
                            <h4 class="titulo">Título do Item</h4>
                            <p class="descricao">Descrição do Item que pode ser mais longa se necessário e precisa alinhar corretamente com o título.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Adicione mais divs col-4 conforme necessário -->
                </div>
              </div>
        </div>
    </section>


    {{-- Atividades --}}

    <section class="ftco-section img ftco-select-destination" style="background-image: url('{{ asset('/storage/bg_3.webp') }}');">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-6 heading-section text-center ftco-animate">
                    <span class="subheading">{{ trans('messages.o_que_oferecemo_de_melhor') }}</span>
                    <h2 class="mb-4">{{ trans('messages.nossas_atividades') }}</h2>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">



                <div class="col-md-12">

                    <div class="carousel-destination owl-carousel">

                        @foreach ($opcoes as $opcoe)
                            <div class="item">
                                <div class="project-destination">
                                    <a href="/atividade-{{ $opcoe->id }}" class="img"
                                        style="background-image: url('{{ asset('/storage/' . $opcoe->imagem) }}');">
                                        <div class="text">
                                            <h3>{{ $opcoe->nome }}</h3>

                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>



            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-6 heading-section text-center ftco-animate">
                <span class="subheading">{{ trans('messages.momentos') }}</span>
                <h2 class="mb-4">{{ trans('messages.galeria') }}</h2>
            </div>
        </div>
    </div>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($imagens as $imagem)
                    <div class="col-lg-4 col-md-6 galeria-item">
                        <div class="portfolio-img"><img src="{{ asset('/storage/' . $imagem->imagem) }}"
                                class="img-fluid" alt="{{ $imagem->imagem }}"></div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="modalImagem" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background-color: transparent; border: none;">
                    <div class="modal-body">
                        <img src="" class="img-fluid" id="imagemModal" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url('{{ asset('/storage/bg_feedback.webp') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Feedback</h2>
                </div>
            </div>

            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($depoimentos as $depoimento)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="{{ $depoimento->id }}"></p>
                                        <p class="mb-4">{{ $depoimento->depoimento }}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('/storage/' . $depoimento->foto) }}')">
                                            </div>
                                            <div class="pl-3 depoimento-info">
                                                <p class="name depoimento-nome">{{ $depoimento->nome }}</p>
                                                <span class="position">{{ $depoimento->ocupação }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="https://api.whatsapp.com/send/?phone=559292197150&text=Ol%C3%A1%2C+gostaria+de+tirar+algumas+d%C3%BAvidas&type=phone_number&app_absent=0"
         target="_blank" class="btn btn-success whatsapp-btn">
        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="whatsapp">
    </a>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <style>

        img{
            border-radius: 40px;
        }
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 2px 2px 3px #000;
        }

        .whatsapp-btn img {
            width: 50px;
            height: 50px;
        }

        /* PARTE 1 */

        .carousel-container {
            max-width: 1000px;
            margin: 20px auto;
            overflow: hidden;
            position: relative;
        }

        .carousel-slide {
            display: flex;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        .carousel-slide img {
            width: 30vw; /* ajustar conforme necessário */
            min-width: 200px; /* tamanho mínimo */
            margin: 0 5px; /* espaçamento entre imagens */
        }

        .slide-content {
            margin-top: 10px;
            text-align: center;
        }

        .carousel-navigation {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .carousel-navigation button {
            padding: 5px 10px;
            margin: 0 5px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* PARTE 2 */

        #beneficios img{
          max-width: 100%;

        }

        .image-container {
            position: relative;
            }

            .image-container img {
            width: 100%;
            display: block;
            }

            .image-container img:last-child {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 1; /* Coloca a segunda imagem na frente */
            }

            .image-container img:first-child {
            position: relative;
            z-index: 2; /* Coloca a primeira imagem atrás */
            }

        /* PARTE 3 */

        /* Estilo para centralizar a imagem (ícone) */
        .icone {
        max-width: 130%; /* Certifica-se de que a imagem não ultrapasse a largura da coluna */
        }

        /* Estilo para o conteúdo (título e descrição) */
        .conteudo {
        text-align: left; /* Alinhar o texto do conteúdo à esquerda */
        }

        /* Estilo para a título */
        .titulo {
        margin-top: 0; /* Remover margem superior padrão do título */
        }

        /* Estilo para a descrição */
        .descricao {
        margin-bottom: 0; /* Remover margem inferior padrão da descrição */
        }

    </style>

    <script>

        const carouselSlide = document.getElementById('carouselSlide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let isDown = false;
        let startX;
        let scrollLeft;

        carouselSlide.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - carouselSlide.offsetLeft;
            scrollLeft = carouselSlide.scrollLeft;
        });

        carouselSlide.addEventListener('mouseleave', () => {
            isDown = false;
        });

        carouselSlide.addEventListener('mouseup', () => {
            isDown = false;
        });

        carouselSlide.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - carouselSlide.offsetLeft;
            const walk = (x - startX) * 3; // Ajuste da sensibilidade do movimento do mouse
            carouselSlide.scrollLeft = scrollLeft - walk;
        });

        prevBtn.addEventListener('click', () => {
            carouselSlide.scrollBy({
            left: -carouselSlide.clientWidth,
            behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            carouselSlide.scrollBy({
            left: carouselSlide.clientWidth,
            behavior: 'smooth'
            });
        });

    </script>

@endsection
