<script src="js/Antifurto/Antifurto.js"></script>
<script src="js/Antifurto/File-Buttons.js"></script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Anti-Furto&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/containers/Dados-Associado.php'?>
  <div class="form-group row">
    <label
      for="sistema_antifurto"
      class="col-12 col-md-4 col-form-label col-form-label-lg"
      style="margin-top: 1.5rem;"
    >Sistema Antifurto:
    </label>

    <div class="col-12 col-sm-4" style="margin-top: 25px">
      <select
        name="sistema_antifurto"
        id="sistema_antifurto"
        class="form-control form-control-lg"
        required
        onchange="escolhaSistemaAntifurto();selectAntifurtoOutros();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Rastreador</option>
        <option value="2">Alarmes Padrão</option>
        <option value="3">Não há sistema</option>
        <option value="4">Outro</option>
      </select>
    </div>

    <div class="col-12 col-sm-4" id="outros-sistemas" style="display: none">
      <div style="margin-top: 1.5rem"></div>
      <input 
        type="text" 
        class="form-control form-control-lg" 
        name="outros_sistemas" 
        id="outros_sistemas"
        placeholder="Digite o tipo de sistema"
      >
    </div>

    <div class="row col-12" id="comprovante_instalacao_return">
      <!-- Retorno para escolher comprovante de instalação -->
    </div>


  </div>


  <?php include 'components/containers/Fotos-Comprovantes.php'?>


  <?php include 'components/containers/Fotos-Telemetria.php'?>




  <div class="clearfix" style="margin: 1rem 0"></div>
  <hr>

  <div class="form-group row col-12">
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