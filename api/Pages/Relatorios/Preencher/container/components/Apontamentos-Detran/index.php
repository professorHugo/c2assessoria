<script src="js/Apontamentos-Detran/Apontamentos.js"></script>
<script src="js/Apontamentos-Detran/File-Buttons.js"></script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Apontamentos-Detran&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <?php include 'components/Dados-Associado.php';?>

  <!-- Dados DETRAN -->
  <div class="form-group row">
    <label
      for="estado_detran"
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >DETRAN:
    </label>
    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <select
        name="estado_detran"
        id="estado_detran"
        class="form-control form-control-lg"
        required
      >
        <option value="" disabled selected>Selecione</option>
        <?php
          $QueryBuscarEstadosDetran = "SELECT * FROM tb_detran_estados WHERE ativacao = 1";
          $ExeQrBuscarEstadosDetran = mysqli_query($connection, $QueryBuscarEstadosDetran);
          $RowQrBuscarEstadosDetran = mysqli_num_rows($ExeQrBuscarEstadosDetran);
          if( $RowQrBuscarEstadosDetran >= 1 ){
            while( $ReturnDetran = mysqli_fetch_assoc($ExeQrBuscarEstadosDetran) ){
              $IdDetran = $ReturnDetran['id_detran'];
              $Estado = $ReturnDetran['estado_detran'];
              ?>
                <option value="<?php echo $IdDetran?>">
                  <?php echo $Estado?>
                </option>
              <?php
            }
          }else{
            ?>
              <option value="" disabled selected>Nenhum estado ativado</option>
            <?php
          }
        ?>
      </select>
    </div>


    <label
      for="multas_evento"
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px; font-size: 1rem"
    >Multa pertinente ao evento:
    </label>
    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <select
        name="multas_evento"
        id="multas_evento"
        class="form-control form-control-lg"
        required
        onchange="eventoMultasDetran();"
      >
        <option value="" disabled selected>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>

    <?php include 'components/containers/Fotos-Multa.php' ?>

  </div>

  <!-- Restrições Diversas -->
  <div class="form-group row">
    <label
      for="restricoes_diversas"
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Restrições Diversas:
    </label>
    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <select
        name="restricoes_diversas"
        id="restricoes_diversas"
        class="form-control form-control-lg"
        required
        onchange="restricoesDiversas();"
      >
        <option value="" disabled selected>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

  <!-- Retorno Restrições Diversas -->
  <div class="form-group row" id="return_restricoes_diversas" style="width:100%"></div>

  <!-- Vistoria Cautelar -->
  <div class="form-group row" id="return_vistoria_cautelar">
    <label
      for="vistoria_cautelar"
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Vistoria Cautelar:
    </label>
    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <select
        name="vistoria_cautelar"
        id="vistoria_cautelar"
        class="form-control form-control-lg"
        required
        onchange="vistoriaCautelar();"
      >
        <option value="" disabled selected>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>

    <div style="width:100%" id="return_vistoria_realizada">
      <!-- Return caso vistoria Realizada -->
    </div>


    <!-- Return Vistoria -->
    <?php include 'components/containers/Fotos-Vistoria.php' ?>

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
      include 'components/Modal-Apontamentos-Detran-Salvos.php';
    }
  }