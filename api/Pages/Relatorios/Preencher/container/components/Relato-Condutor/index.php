<script src="js/Relato-Condutor/Relato-Condutor.js"></script>
<script src="js/Relato-Condutor/File-Buttons.js"></script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Relato-Condutor&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/containers/Dados-Associado.php' ?>
  <div class="form-group row">
    <label
      for="relato_condutor"
      class="col-12 col-form-label col-form-label-lg float-left"
    >
      Relato do condutor associado:
    </label>

    <div class="col-12">
      <textarea 
        name="relato_condutor" 
        id="relato_condutor" 
        rows="6" 
        class="form-control form-control-lg"
        placeholder="Digite aqui o relato do condutor"
      ></textarea>
    </div>
  </div>


  <!-- Fotos do documento do condutor -->

  <?php include 'components/containers/Fotos-Condutor.php'?>




  <div class="form-group row" style="margin-top: 2rem">
    <label
      for="declaracao_apresentada"
      class="col-6 col-md-3 col-form-label col-form-label-lg float-left"
    >
      Apresentou Declaração:
    </label>

    <div class="col-6 col-md-3">
      <select
        name="declaracao_apresentada"
        id="declaracao_apresentada"
        class="form-control form-control-lg"
        required
        onchange="escolhaDeclaracaoApresentada();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  
  </div>



  <!-- Fotos declaração do condutor -->
  <?php include 'components/containers/Declaracao-Condutor.php'?>


  <div class="clearfix" style="margin: 1.5rem 0"></div>
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