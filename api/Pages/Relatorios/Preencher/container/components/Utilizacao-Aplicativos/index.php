<script src="js/Utilizacao-Aplicativos/File-Buttons.js"></script>
<script src="js/Utilizacao-Aplicativos/index.js"></script>
<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Utilizacao-Aplicativos&Salvar"
  method="post"
  enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php'?>
  <h4 class="col-12"
    style="
      border-bottom: 2px solid #ddd; 
      margin-bottom: 2.5rem;
      float: left;
    "
  >Utilização de aplicativos de mobilidade urbana</h4>

  <div class="form-group row">
    <label 
      for="utilizacao_app_mobilidade" 
      class="col-form-label col-form-label-lg col-xs-7 col-sm-7"
    >Usado após o evento: </label>

    <div class="col-xs-5 col-md-5">
      <select 
        name="utilizacao_app_mobilidade" 
        id="utilizacao_app_mobilidade" 
        class="form-control form-control-lg"
        required onchange="EscolherUsoApp()"
      >
        <option value="">Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>

    <div style="margin-top:1rem" class="col-12"></div>
    <div class="col-12" id="return_utilizacao_app_mobilidade" style="display:none">
      <label 
        for="comprovante_apresentado" 
        class="col-form-label col-form-label-lg col-xs-7 col-sm-7 float-left"
      >Compr. Apresentado:</label>

      <div class="col-xs-5 col-sm-5 float-left">
        <select 
          name="comprovante_apresentado" 
          id="comprovante_apresentado" 
          class="form-control form-control-lg"
          onchange="comprovanteApresentado();"
        >
          <option value="" selected disabled>Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    </div>

  </div>

  <div class="form-group row" id="return_comprovante_apresentado" style="display:none">
    <?php include 'components/containers/Status-App-Mobilidade-Urbana.php'?>
  </div>

  <div class="form-group row" id="return_img_app" style="display: none">
    <?php include 'components/containers/Img-App-Mobilidade-Urbana.php'?>
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
        name="Salvar"
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>
  
</form>

<?php
  if( isset($_POST['Salvar']) && isset($_GET['Salvar']) ){
    include 'components/Salvar.php';
    if( $SysMode == 2 ){
      include 'components/Modal-Salvar.php';
    }
  }