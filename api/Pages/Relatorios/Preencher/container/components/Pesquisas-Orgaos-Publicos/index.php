<script src="js/Pesquisas-Orgaos-Publicos/File-Buttons.js"></script>
<script src="js/Pesquisas-Orgaos-Publicos/index.js"></script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Pesquisas-Orgaos-Publicos&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php'?>

  <h4 class="col-12"
    style="
      border-bottom: 2px solid #ddd;
      float: left;
    "
  >Pesquisa de Órgãos Públicos - Boletim de Ocorrência</h4>

  <?php 
    include 'components/Bloco-PC.php';
    include 'components/Bloco-PM.php'
  ?>

  <?php 
    include 'components/containers/Img-Pesquisas.php';
  ?>

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