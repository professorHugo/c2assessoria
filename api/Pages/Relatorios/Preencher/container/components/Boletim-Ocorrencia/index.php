<script src="js/Boletim-Ocorrencia/File-Buttons.js"></script>
<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Boletim-Ocorrencia&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php'?>
  <h4 class="col-12"
    style="
      border-bottom: 2px solid #ddd; 
      margin-bottom: 1rem;
      float: left;
  ">Boletim de Ocorrência</h4>

  <div class="form-group row">
    <label for="boletim_autentico" class="col-form-label col-form-label-lg col-xs-6 col-sm-6">
      Boletim Autêntico: 
    </label>
    <div class="col-xs-6 col-sm-6">
      <select name="boletim_autentico" id="boletim_autentico" class="form-control form-control-lg">
        <option value="">Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <h5 class="col-12"
    style="
      border-bottom: 2px solid #ddd; 
      margin-bottom: 1rem;
      margin-top: 2rem;
      float: left;
  ">Fotos/Prints do Boletim de Ocorrência</h5>

  <div class="form-group row" id="imagens-boletim">
    <?php include 'components/containers/Img-Boletim.php'?>
  </div>

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