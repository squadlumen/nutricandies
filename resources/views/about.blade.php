@extends('layout')
@section('title','sobre')
@section('content')



  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/ben.png')";
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  ">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
       <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Impacto <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">IMPACTO</h1>
        <a href="#sobre"> <i  class="fa fa-angle-double-down fa-lg" style="color: white" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
 </section>

 <section id="sobre" class="ftco-section services-section">
   <div class="container">

    <section id="about">
      <div class="container">
          <h2>Sobre nós</h2>
          <p>A Empresa XYZ é líder no fornecimento de soluções inovadoras para...</p>
          <p>Desde sua fundação em 19XX, a Empresa XYZ tem sido uma referência no setor. Nossa jornada começou com um pequeno grupo de visionários...</p>
          <p>Hoje, com mais de XX anos de experiência, continuamos a inovar e a oferecer soluções que transformam...</p>
      </div>
  </section>

  <section id="history">
      <div class="container_main">
          <h2>Nossa História</h2>
          <div class="clearfix">
              <img src="https://via.placeholder.com/200" alt="Empresa XYZ">
              <p>Desde sua fundação em 19XX, a Empresa XYZ tem sido uma referência no setor. Nossa jornada começou com um pequeno grupo de visionários...</p>
              <p>Hoje, com mais de XX anos de experiência, continuamos a inovar e a oferecer soluções que transformam...</p>
          </div>
      </div>
  </section>

  <section id="services">
      <div class="container_main">
          <h2>Nossos Serviços</h2>
          <div class="service">
              <h3>Serviço 1</h3>
              <p>Descrição do Serviço 1...</p>
          </div>
          <div class="service">
              <h3>Serviço 2</h3>
              <p>Descrição do Serviço 2...</p>
          </div>
          <div class="service">
              <h3>Serviço 3</h3>
              <p>Descrição do Serviço 3...</p>
          </div>
      </div>
  </section>

  <section id="contact">
      <div class="container_main">
          <h2>Entre em Contato</h2>
          <form>
              <div class="form-group">
                  <label for="name">Nome:</label>
                  <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="message">Mensagem:</label>
                  <textarea id="message" name="message" required></textarea>
              </div>
              <button type="submit">Enviar</button>
          </form>
      </div>
  </section>
    </div>
 </section>




 <section id="video" class="container ftco-section ftco-about img" style="background-image: url('{{ asset('/storage/' . $sobre->capa_video_principal) }}');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  ">
  <div class="overlay"></div>
  <div class="container py-md-5">
    <div class="row py-md-5">
      <div class="col-md d-flex align-items-center justify-content-center">
        <a href="http://tchibumnaamazonia.com:8000/storage/{{ $sobre->video_principal }}"
          class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          <span class="fa fa-play"></span>
        </a>
      </div>
    </div>
  </div>
</section>

<style>

.container_main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        p {
            color: #666;
        }
        .history {
            margin-top: 40px;
        }
        .history img {
            float: left;
            margin-right: 20px;
            width: 200px;
            height: auto;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
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
