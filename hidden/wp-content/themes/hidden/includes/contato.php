<section class="container peerguntas">
  <div class="my-5 text-center">
    <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
    <h1 class="display-4 text-primary">Fale Conosco</h1>
  </div>

  <div class="row">
    <div class="col-lg mb-5">
      <form class="bg-light rounded p-4 box-shadow" action="">
        <div class="form-group">
          <label for="clienteNome">Nome</label>
          <input type="text" class="form-control" id="clienteNome">
        </div>
        <div class="form-group">
          <label for="clienteEmail">Email</label>
          <input type="email" class="form-control" id="clienteEmail">
        </div>
        <div class="form-group">
          <label for="clienteMensagem">Mensagem</label>
          <textarea id="clienteMensagem" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Enviar Mensagem</button>
      </form>
    </div>

    <div class="col-lg">
      <h2 class="h6">NOSSO ENDEREÇO</h2>
      <a href="#"><img class="img-fluid box-shadow rounded mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/mapa.png" alt="Endereço da Empresa"></a>
      
      <h2 class="h6">DADOS DE CONTATO</h2>
      <ul class="list-unstyled text-secondary">
        <li>contato@hidden.com.br</li>
        <li>21 99999-9999</li>
        <li>De Seg. à Sex. das 8h às 18h</li>
      </ul>
      
      <h2 class="h6">REDES SOCIAIS</h2>
      <ul class="list-unstyled" style="max-width: 260px">
        <li><a class="btn btn-outline-secondary btn-sm mb-2 w-100" style="max-width: 140px" href="#" >Facebook</a></li>
        <li><a class="btn btn-outline-secondary btn-sm mb-2 w-100" style="max-width: 140px" href="#">Twitter</a></li>
        <li><a class="btn btn-outline-secondary btn-sm mb-2 w-100" style="max-width: 140px"href="#">Youtube</a></li>
      </ul>
    </div>
  </div>
</section>