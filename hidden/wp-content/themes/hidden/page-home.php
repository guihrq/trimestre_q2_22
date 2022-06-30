<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- SECTION CARROSSEL -->

 <section class="container-fluid">
   <div class="row bg-dark text-white">
      
      <!-- CARROSSEL -->

      <div class="col-lg-7 p-0">
        <div id="carouselCidades" class="carousel slide" data-ride="carousel">
        	<div class="carousel-indicators">
        		<button type="button" data-bs-target="#carouselCidades" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        		<button type="button" data-bs-target="#carouselCidades" data-bs-slide-to="1" aria-label="Slide 2"></button>
        		<button type="button" data-bs-target="#carouselCidades" data-bs-slide-to="2" aria-label="Slide 3"></button>
        	</div>

        	<div class="carousel-inner">
        		<div class="carousel-item active">
        			<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/california.jpg" alt="First slide">
        			<div class="carousel-caption">
        				<h3 class="display-4">California</h3>
        			</div>
        		</div>
        		<div class="carousel-item">
        			<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/dublin.jpg" alt="Second slide">
        			<div class="carousel-caption">
        				<h3 class="display-4">Dublin</h3>
        			</div>
        		</div>
        		<div class="carousel-item">
        			<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/paris.jpg" alt="Third slide">
        			<div class="carousel-caption">
        				<h3 class="display-4">Paris</h3>
        			</div>
        		</div>
        	</div>

        	<button class="carousel-control-prev" type="button" data-bs-target="#carouselCidades" role="button" data-bs-slide="prev">
        		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
        		<span class="visually-hidden">Anterior</span>
        	</button>

        	<button class="carousel-control-next" type="button" data-bs-target="#carouselCidades" role="button" data-bs-slide="next">
        		<span class="carousel-control-next-icon" aria-hidden="true"></span>
        		<span class="visually-hidden">Próximo</span>
        	</button>
        </div>
      </div>

      <!-- FIM CARROSSEL -->

      <!-- FORM CARROSSEL -->

      <div class="col-lg-5 p-4 align-self-center">
        <h1 class="display-4">Realize o display do seu sonho</h1>
        <p class="lead">O melhor display é Hidden, mais de 5.000 displays concluídos.</p>
        
        <form action="">
          <div class="input-group mb-3 input-group-lg">
            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
            <button class="btn btn-primary" type="button">Inscreva-se</button>
          </div>
        </form>
      </div>

      <!-- FORM CARROSSEL -->

    </div>
  </section>

  <!-- FIM SECTION CARROSSEL -->

  <!-- MURAL IMAGENS -->

  <section class="py-5 bg-light text-center">
    <div class="container">
      <div class="my-5">
        <span class="h6 d-block">TUDO DE MELHOR PARA VOCÊ</span>
        <h2 class="display-4 text-primary">Aproveite as Vantagens</h2>
      </div>
      
      <!-- TELA SUPER GRID 4 (3 COLUNAS), TELA MEDIA GRID 6 (2 COLUNAS) -->

      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div style="height: 100px;" class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/passaporte.svg" alt="Passaporte">
          </div>
          <h3>Documentos</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div style="height: 100px;" class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/passagens.svg" alt="Passagens">
          </div>
          <h3>Passagens</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div style="height: 100px;" class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/translado.svg" alt="Translado">
          </div>
          <h3>Translado</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div style="height: 100px;" class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/praias.svg" alt="Praias">
          </div>
          <h3>Praias</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div style="height: 100px;" class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/bagagens.svg" alt="Bagagens">
          </div>
          <h3>Bagagens</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
        </div>

        <div class="col-xl-4 col-md-6">
          <div style="height: 100px;" class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/turismo.svg" alt="Turismo">
          </div>
          <h3>Turismo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- FIM MURAL IMAGENS -->

  <!-- BANNER DIVISOR E QUOTE -->

  <section id="home-quote" class="p-md-5">  <!-- NESTE ID ESTÁ O BANNER NO CSS -->
    <blockquote class="blockquote text-center text-white p-md-5 p-3">
      <p class="display-4"><em>"A felicidade não está na estrada que leva a algum lugar. A felicidade é a própria estrada."</em></p>
      <footer class="blockquote-footer text-white">Bob Dylan</footer>
    </blockquote>
  </section>

  <!-- FIM BANNER DIVISOR -->

  <!-- SECTION DE PERGUTNAS FREQUENTES -->

  <section class="container peerguntas">
    <div class="my-5 text-center">
      <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
      <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
    </div>

    <!-- PERGUNTAS FREQUENTES TOGGLE -->

    <div class="row justify-content-center">
      <div class="col-md-6" id="perguntasFrequentes">
        <p>
        	<a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#pergunta1" role="button" aria-expanded="false" aria-controls="pergunta1">→ É possível cancelar o Display?</a>
          	<div id="pergunta1" class="collapse">
            	<div class="card card-body">
            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
            	</div>
          	</div>
        </p>

        <p>
        	<a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#pergunta2" role="button" aria-expanded="false" aria-controls="pergunta2">→ Qual a garantia que tenho se perder o voo?</a>
          	<div id="pergunta2" class="collapse">
            	<div class="card card-body">
            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
            	</div>
          	</div>
        </p>

        <p>
        	<a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#pergunta3" role="button" aria-expanded="false" aria-controls="pergunta3">→ Qual a principal forma de Displays no mercado?</a>
          	<div id="pergunta3" class="collapse">
            	<div class="card card-body">
            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
            	</div>
          	</div>
        </p>

        <p>
        	<a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#pergunta4" role="button" aria-expanded="false" aria-controls="pergunta4">→ Qual o melhor tipo de Display?</a>
          	<div id="pergunta4" class="collapse">
            	<div class="card card-body">
            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
            	</div>
          	</div>
        </p>

        <p>
        	<a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#pergunta5" role="button" aria-expanded="false" aria-controls="pergunta5">→ Vocês dão descontos para grupos grandes?</a>
          	<div id="pergunta5" class="collapse">
            	<div class="card card-body">
            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
            	</div>
          	</div>
        </p>
      </div>
    </div>
    <div class="dropdown-divider"></div>
  </section>

  <!-- FIM SECTION DE PERGUTNAS FREQUENTES -->

  <!-- MURAL DE IMAGENS -->

  <section class="container peerguntas">
    <div class="text-center my-5">
      <span class="h6 d-block">O MELHOR USO DE DISPLAYS</span>
      <h1 class="display-4 text-primary">Descubra Dublin</h1>
    </div>

    <div class="row">
      <div class="col-md">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-1.jpg" alt="Foto 1">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-2.jpg" alt="Foto 2">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-3.jpg" alt="Foto 3">
      </div>
      <div class="col-md">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-4.jpg" alt="Foto 4">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-5.jpg" alt="Foto 5">
      </div>
      <div class="col-md">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-6.jpg" alt="Foto 6">
        <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/local/foto-7.jpg" alt="Foto 7">
      </div>
    </div>
  </section>

  <!-- FIM MURAL DE IMAGENS -->


  <!-- INCLUDE FORMULARIO DE CONTATO -->
  <?php include(TEMPLATEPATH . "/includes/contato.php"); ?>


  <!-- SECTION PLANOS  -->

  <section class="container peerguntas">
    <div class="text-center my-5">
    <span class="h6 d-block">SEU PLANO, SEU DISPLAY</span>
    <h1 class="display-4 text-primary">Escolha o Plano</h1>
    </div>

    <div class="row">
      <div class="col-md mb-5">
        <div class="bg-light rounded p-4 box-shadow">
          <h2>Gold</h2>
          <ul class="lista-plano list-unstyled">
            <li><span data-toggle="tooltip" data-placement="top" title="Isso mesmo, são 30 dias totais durante a vigência.">→ 30 dias de vigência</span></li>
            <li>→ 3 destinos diferentes</li>
            <li>→ Tudo pago pela empresa</li>
            <li>→ Ingressos para festas</li>
          </ul>
          <form>
            <div class="form-group">
              <select class="form-control bg-light" id="inputCidades">
                <option>Selecione a cidade</option>
                <option>California</option>
                <option>Paris</option>
                <option>Dublin</option>
              </select>
            </div>
          </form>
          <div class="row align-items-center mt-4">
            <div class="col">
              <a href="#inscricao" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
            </div>
            <div class="col">
              <span class="h4">R$5.000</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md mb-5">
        <div class="bg-light rounded p-4 box-shadow">
          <h2>Platinum <span class="badge badge-success">Novo</span></h2>
          <ul class="lista-plano list-unstyled">
            <li>→ 60 dias de Vigência adicioinal</li>
            <li>→ 6 destinos diferentes</li>
            <li>→ Tudo pago pela empresa</li>
            <li>→ Ingressos para festas</li>
          </ul>
          <form>
            <div class="form-group">
              <select class="form-control bg-light" id="inputCidades">
                <option>Selecione a cidade</option>
                <option>California</option>
                <option>Paris</option>
                <option>Dublin</option>
              </select>
            </div>
          </form>
          <div class="row align-items-center mt-4">
            <div class="col">
              <a href="#inscricao" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
            </div>
            <div class="col">
              <span class="h4">R$7.500</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>