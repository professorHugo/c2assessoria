<script src="js/COPOM/File-Buttons.js"></script>
<script src="js/COPOM/index.js"></script>
<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=COPOM&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php'?>
  <h4 class="col-12"
    style="
      border-bottom: 2px solid #ddd; 
      margin-bottom: 2.5rem;
      float: left;
    "
  >Copom - 190</h4>

  <div class="form-group row">
    <label 
      for="comunicado_copom" 
      class="col-form-label col-form-label-lg col-xs-12 col-sm-6"
    >Comunicado do evento: </label>

    <div class="col-xs-12 col-sm-6">
      <select 
        name="comunicado_copom" 
        id="comunicado_copom" 
        class="form-control form-control-lg"
        required
        onchange="selectCopom();"
      >
        <option value="">Selecione</option>
        <option value="1">Sim, pelo Associado</option>
        <option value="2">Sim, pelo Condutor</option>
        <option value="3">Sim, através de terceiros</option>
        <option value="4">Não houve comunicado às autoridades</option>
      </select>
    </div>
    
    <div id="print_copom_exibir" class="float-left col-12" style="display: none">
      <label 
        for="print_copom" 
        class="col-form-label col-form-label-lg col-xs-12 col-sm-6"
      >Print da Ligação: </label>

      <div class="col-xs-12 col-sm-6">
        <select 
          name="print_copom" 
          id="print_copom" 
          class="form-control form-control-lg"
          required
          onchange="selectCopom();"
        >
          <option value="">Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    </div>

  </div>

  <div class="form-group row" id="img_comunicado_copom" style="width:105%; margin-left: -5%;font-size: 0.8rem">
    <?php include 'components/containers/Img-Copom.php'?>
  </div>

  <div class="form-group row" id="registro" style="display:none">
    <label for="divergencia_registro" class="col-form-label col-form-label-lg col-xs-12 col-sm-6"
    >Divergência no Registro: </label>
    <div class="col-xs-12 col-sm-6">
      <select 
        name="divergencia_registro" 
        id="divergencia_registro" 
        class="form-control form-control-lg"
        onchange="divergenciaRegistro();"
    >
      <option value="">Selecione</option>
      <option value="1">Sim</option>
      <option value="2">Não</option>
    </select>
    </div>

    <div id="texto_divergencia_exibir" style="display: none">
      <label for="texto_divergencia" class="col-form-label col-form-label-lg col-xs-12 col-sm-12"
      >Qual(ais) Divergência(as) encontrada(as): </label>
      <div class="col-12">
        <textarea 
          name="texto_divergencia" 
          id="texto_divergencia" 
          cols="30" rows="5" 
          class="form-control form-control-lg"
          placeholder="Digite o que encontrou como divergência nos registros apresentados"
        ></textarea>
      </div>
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