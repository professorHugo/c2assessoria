<script src="js/Motorista-Aplicativo/index.js"></script>
<script src="js/Motorista-Aplicativo/File-Buttons.js"></script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Motorista-Aplicativo&Salvar"
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
  >Motorista por aplicativo</h4>

  <div class="form-group row">
    <label 
      for="motorista_aplicativo" 
      class="col-form-label col-form-label-lg col-xs-12 col-sm-12"
      style="font-size: 1.1rem"
    >Condutor/Associado é motorista por aplicativo: </label>

    <div class="col-xs-12 col-sm-12">
      <select 
        name="motorista_aplicativo" 
        id="motorista_aplicativo" 
        class="form-control form-control-lg"
        requred onchange="selectMotoristaApp();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <div class="form-group row" id="return_motorista_aplicativo">
    <label 
      for="apresentou_comprovante" 
      class="col-form-label col-form-label-lg col-xs-12 col-sm-12"
    >Aprestentou cadastro/corridas realizadas: </label>
    <div class="col-xs-12 col-sm-12">
      <select 
        name="apresentou_comprovante" 
        id="apresentou_comprovante" 
        class="form-control form-control-lg"
        required onchange="apresentouComprovante();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <div class="form-group row" id="return_apresentou_comprovante">
    <?php include 'components/containers/Img-Comprovantes.php'?>
  </div>

  <div class="form-group row col-xs-12 col-sm-12">
    <label 
      for="descricao_apresentou_comprovante" 
      class="col-form-label col-form-label-lg col-xs-12 col-sm-12"
    >Descrição: </label>
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
  if( isset($_POST['Salvar']) && isset($_GET['Salvar']) ){
    include 'components/Salvar.php';
    if( $SysMode == 2 ){
      include 'components/Modal-Salvar.php';
    }
  }