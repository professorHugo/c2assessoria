<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Caracteristicas-Tecnicas&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php' ?>
  <h4>Características técnicas do local do evento</h4>
  <div class="col-12"
    style="
      border-top: 2px solid #ddd;
      margin-bottom: 2.5rem;
      float: left;
    "
  ></div>

    <!-- Local-Criminalidade -->
    <?php include 'components/containers/Local-Criminalidade.php'?>

    <!-- Local-Sinistralidade -->
    <?php include 'components/containers/Local-Sinistralidade.php'?>

    <!-- Local-Caracteristicas-Tecnicas -->
    <?php include 'components/containers/Local-Caracteristicas-Tecnicas.php' ?>

    <!-- Caracteristicas-Via -->
    <?php include 'components/containers/Caracteristicas-Via.php' ?>

    <!-- Velocidade-Maxima -->
    <?php include 'components/containers/Velocidade-Maxima.php'?>

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