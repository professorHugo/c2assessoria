<script src="js/Financiamento-Atrelado/Financiamento.js"></script>
<script src="js/Financiamento-Atrelado/File-Buttons.js"></script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Financiamento-Atrelado&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/containers/Dados-Associado.php'?>
  <div class="form-group row">
    <label
      for="financiamento_atrelado"
      class="col-xs-6 col-sm-6 col-md-6 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Financiamento:
    </label>
    <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 10px">
      <select
        name="financiamento_atrelado"
        id="financiamento_atrelado"
        class="form-control form-control-lg"
        required
        onchange="financiamentoAtrelado();"
      >
        <option value="" disabled selected>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <!-- Return Financiamento Atrelado -->
  <div class="form-group row" id="return_financiamento_atrelado">
    
  </div>

  <!-- Return Fotos parcelas caso financiamento atrelado -->
  <?php include 'components/containers/Fotos-Parcelas.php'?>



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