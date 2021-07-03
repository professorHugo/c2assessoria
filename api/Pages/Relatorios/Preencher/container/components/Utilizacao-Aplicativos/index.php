<script src="js/Utilizacao-Aplicativos/index.js"></script>
<script src="js/Utilizacao-Aplicativos/index-motorista-app.js"></script>
<script src="js/Utilizacao-Aplicativos/File-Buttons-Uso-App.js"></script>
<script src="js/Utilizacao-Aplicativos/File-Buttons-Motorista-App.js"></script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Utilizacao-Aplicativos&Salvar"
  method="post"
  enctype="multipart/form-data"
  style="width:100%"
>
  <?php include 'components/Dados-Associado.php' ?>

  <!-- Utilização de aplicativo de mobilidade urbana -->
  <?php include 'components/Bloco-Utilizacao-App.php' ?>

  <div class="form-group row" id="return_comprovante_apresentado">
    <!-- Componente de Status dp App de Mobilidade Urbana  -->
    <!-- <?php include 'components/containers/Status-Mobilidade-Urbana.php'?> -->
  </div>

  <!-- Componente de Img de Uso do App -->
  <div class="form-group row" id="return_img_app" style="display:none">
    <?php include 'components/containers/Img-Uso-App.php'?>
  </div>


  <div style="width: 100%; margin-top: 5rem"></div>




  <!-- Motorista por aplicativo -->
  <?php include 'components/Bloco-Motorista-App.php'?>

  <div class="form-group row" id="return_motorista_aplicativo">
    
  </div>

  <div class="form-group row" id="return_apresentou_comprovante" style="display: none">
    <?php include 'components/containers/Img-Comprovantes-Motorista-App.php'?>
  </div>




  <div class="form-group row col-xs-12 col-sm-12">
    <label 
      for="descricao_apresentou_comprovante" 
      class="col-form-label col-form-label-lg col-xs-12 col-sm-12"
    >Observações gerais: </label>
    <div class="col-xs-12 col-sm-12">
      <textarea 
        name="descricao_apresentou_comprovante" 
        id="descricao_apresentou_comprovante" 
        cols="30" rows="5" class="form-control form-control-lg"
        placeholder="Digite o que julgar necessário sobre o comprovante apresentado"
      ></textarea>
    </div>
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
  if( isset($_GET['Salvar']) ){
    include 'components/Salvar.php';
  }
  if( $SysMode == 2 ){
    include 'components/Modal-Salvar.php';
  }