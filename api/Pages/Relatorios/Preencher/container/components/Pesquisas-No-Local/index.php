<script src="js/Pesquisas-No-Local/index.js"></script>
<script src="js/Pesquisas-No-Local/File-Buttons.js"></script>
<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>

  <h4>Pesquisas realizadas no local do evento</h4>
  <div class="col-12"
    style="
      border-top: 2px solid #ddd; 
      margin-bottom: 2.5rem;
      float: left;
    "
  ></div>

  <div class="form-group row" id="select_imagens_evento">
    <label 
      for="select_img_local" 
      class="col-sm-6 col-md-6 col-form-label col-form-label-lg float-left"
    >Imagens do Evento: </label>

    <div class="col-6">
      <select 
        name="select_img_local" 
        id="select_img_local" 
        class="form-control form-control-lg"
        require
        onchange="selectFotosLocal();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>

  </div>

  <div class="form-group row" id="return_imagens_evento" style="display: ">
    <!-- Exibir caso tenha imagens do local -->
    <?php include 'components/Imagens-Evento.php'?>
  </div>
 
  <div class="form-group row" style="margin-top:10px" id="select_testemunhas">
    <label 
      for="testemunhas_local" 
      class="col-sm-6 col-md-6 col-form-label col-form-label-lg float-left"
    >Testemunhas no local: </label>

    <div class="col-sm-6 col-md-6 float-left">
      <select
        class="form-control form-control-lg"
        id="testemunhas_local"
        name="testemunhas_local"
        required
        onchange="selecionarTestemunhas()"
      >
        <option value="" disabled selected>Escolha</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <div id="return_testemunhas_local" class="col-sm-12 col-md-4">
    <!-- Retorno com Ajax -->
    <label 
      for="quantidade_testemunhas" 
      class="col-sm-9 col-md-9 col-form-label col-form-label-lg float-left"
      style="margin-top:5px"
    >Adicionar Testemunha: </label>
    <div style="margin-bottom:10px"></div>
    <div class="col-sm-3 col-md-3 float-left">
      <button type="button"
        class="btn btn-success"
        data-toggle="modal"
        data-target="#Modal-Add-Testemunha"
        style="font-size: 2rem;padding: 3px 15px"
        id="quantidade_testemunhas"
      >
        <i class="fa fa-plus-circle" aria-hidden="true"></i>
      </button>
    </div>
  </div>

  <div class="clearfix" style="margin-bottom:20px"></div>

  <hr>
  <div class="col-12 float-left" id="mensagem_atencao">
    <h6 class="text-center">
      <span class="text-danger">Atenção: </span>
      Após adicionar as testemunhas, poderá inserir as imagens de suas declarações. <br>
      <span class="text-danger">OBS: </span>
      Atente-se ao posicionamento da câmera para poder enviar imagens na orientação
      correta.
    </h6>
  </div>




  <div class="clearfix" style="margin: 1rem 0"></div>
  <hr>

  <div class="form-group row">
    <div class="col-6">
      <a
        href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>"
        class="btn btn-outline-danger btn-lg btn-block"
      >
        Voltar
      </a>
    </div>

    <div class="col-6">
      <button
        type="submit"
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>
</form>



<?php include 'components/Modal-Nova-Testemunha.php';?>