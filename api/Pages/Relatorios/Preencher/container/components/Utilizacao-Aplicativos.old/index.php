<script src="js/Utilizacao-Aplicativos/File-Buttons.js"></script>
<script src="js/Utilizacao-Aplicativos/File-Buttons-Motorista-App.js"></script>
<script src="js/Utilizacao-Aplicativos/index.js"></script>
<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Utilizacao-Aplicativos&Salvar"
  method="post"
  enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php';?>

  <?php include 'Utilizacao-App.php'; ?>

  <div class="form-group row" id="return_comprovante_apresentado" style="display:none">
    <?php include 'components/containers/Status-App-Mobilidade-Urbana.php'?>
  </div>

  <div class="form-group row" id="return_img_app" style="display: none">
    <?php include 'components/containers/Img-App-Mobilidade-Urbana.php'?>
  </div>

  

  <?php include 'Motorista-Aplicativos.php';?>
  




  

  
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