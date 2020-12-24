<script src="js/Perfil-Associado/Perfil-Associado.js"></script>
<script src="js/Perfil-Associado/File-Buttons.js"></script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Associado&Salvar" 
  method="post"
  enctype="multipart/form-data"
>
  <div class="form-group row">
    <div class="col-12">
      <h4>
        Perfil do Associado: <br>
        <?php include 'components/Dados-Associado.php'?>
      </h4>
    </div>
    <label 
      for="estado_civil_associado" 
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Estado Civil: 
    </label>

    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <?php include "components/container/Estado-Civil-Associado.php";?>
    </div>

    <label 
      for="profissao_associado" 
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Profissão: 
    </label>
    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <?php include "components/container/Profissao-Associado.php"?>
    </div>
  </div>

  <div class="form-group row">
    <label 
      for="outro_veiculo" 
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Outros Veículos: 
    </label>

    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <?php include 'components/container/Veiculos-Extra-Associado.php'?>
    </div>
    
    <div class="col-12" style="margin-top:10px">
      <?php include 'components/container/Quantidade-Veiculos-Associado.php'?>
    </div>
    
    <div class="col-12" style="margin-top:10px">
      <?php include 'components/container/Mostrar-Veiculos-Associado.php'?>
    </div>

  </div>

  <div class="form-group row">
    <?php include 'components/container/CNH.php' ?>
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
        name="Salvar"
      >
        Salvar
      </button>
    </div>
  </div>

</form>



<?php
if( isset($_POST['Salvar']) && isset($_GET['Salvar']) ){
  include 'components/Salvar-Perfil-Associado.php';
  if( $SysMode == 2 ){
    include 'components/container/Modal-Perfil-Salvo.php';
  }
}