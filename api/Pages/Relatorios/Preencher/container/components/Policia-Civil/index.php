<script src="js/Policia-Civil/File-Buttons.js"></script>
<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Policia-Civil&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php' ?>

  <h4 class="col-12"
    style="
      border-bottom: 2px solid #ddd; 
      margin-bottom: 2.5rem;
      float: left;
    "
  >Polícia Civil</h4>

  <div class="col-12">
    <select 
      name="policia_civil" 
      id="policia_civil" 
      class="form-control form-control-lg"
    >
      <option value="" selected disabled>Selecione</option>
      <option value="1">Em Pesquisa, não há irregularidades apontadas</option>
      <option value="2">Há B.O. do evento em questão, não apresentado</option>
      <option value="3">Há B.O. divergentes do informado</option>
      <option value="4">Há B.O. relacionado ao veículo em datas anteriores ao evento</option>
      <option value="5">Há apontamentos irregulares</option>
    </select>
  </div>

  <div class="form-group row" id="img-policia-civil">
    <?php include 'components/containers/Img-Policia-Civil.php';?>
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