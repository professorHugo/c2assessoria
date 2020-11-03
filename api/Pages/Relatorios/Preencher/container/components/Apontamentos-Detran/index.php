<script src="js/Apontamentos-Detran/Apontamentos.js"></script>

<script>
$(function(){
    $('#button-upload1').on('click', function() {
        $('#print_foto1').trigger('click');
    });

    $('#print_foto1').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto1').val(fileName);
    });


    $('#button-upload2').on('click', function() {
        $('#print_foto2').trigger('click');
    });

    $('#print_foto2').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto2').val(fileName);
    });

    $('#button-upload3').on('click', function() {
        $('#print_foto3').trigger('click');
    });

    $('#print_foto3').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto3').val(fileName);
    });


    //Vistorias
    $('#button-upload_v1').on('click', function() {
        $('#print_foto_vistoria_cautelar1').trigger('click');
    });

    $('#print_foto_vistoria_cautelar1').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_vistoria_cautelar1').val(fileName);
    });

    $('#button-upload_v2').on('click', function() {
        $('#print_foto_vistoria_cautelar2').trigger('click');
    });

    $('#print_foto_vistoria_cautelar2').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_vistoria_cautelar2').val(fileName);
    });

    $('#button-upload_v3').on('click', function() {
        $('#print_foto_vistoria_cautelar3').trigger('click');
    });

    $('#print_foto_vistoria_cautelar3').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_foto_vistoria_cautelar3').val(fileName);
    });
});
</script>

<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <!-- Dados DETRAN -->
  <div class="form-group row">
    <label
      for="estado_detran"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >DETRAN:
    </label>
    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
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
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px; font-size: 1rem"
    >Multa pertinente ao evento:
    </label>
    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
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

    <div class="col-sm-12 col-md-6" id="prints_multas_evento" style="display: none">
      <label
        for="foto1"
        class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto 1:
      </label>

      <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
        <input
          type="file"
          name="print_foto1"
          id="print_foto1"
          style="display: none;"
        >
        <input
          type="text"
          name="file_foto1"
          id="file_foto1"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button
          type="button"
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload1"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>


      <label
        for="foto2"
        class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto 2:
      </label>

      <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
        <input
          type="file"
          name="print_foto2"
          id="print_foto2"
          style="display: none;"
        >
        <input
          type="text"
          name="file_foto2"
          id="file_foto2"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button
          type="button"
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload2"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>

      <label
        for="foto3"
        class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto 3:
      </label>

      <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
        <input
          type="file"
          name="print_foto3"
          id="print_foto3"
          style="display: none;"
        >
        <input
          type="text"
          name="file_foto3"
          id="file_foto3"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button
          type="button"
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload3"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Restrições Diversas -->
  <div class="form-group row">
    <label
      for="restricoes_diversas"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Restrições Diversas:
    </label>
    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
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
  <div class="form-group row" id="return_restricoes_diversas" style="width:100%">
    
  </div>

  <!-- Vistoria Cautelar -->
  <div class="form-group row" id="return_vistoria_cautelar">
    <label
      for="vistoria_cautelar"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >Vistoria Cautelar:
    </label>
    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
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
    <div class="col-12 float-left" id="fotos_vistoria" style="display:none; margin-top: 10px">
      <label
        for="foto_vistoria_cautelar1"
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto/Print1:
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input
          type="file"
          name="print_foto_vistoria_cautelar1"
          id="print_foto_vistoria_cautelar1"
          style="display: none;"
        >
        <input
          type="text"
          name="file_foto_vistoria_cautelar1"
          id="file_foto_vistoria_cautelar1"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button
          type="button"
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload_v1"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>



      <label
        for="foto_vistoria_cautelar2"
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto/Print2:
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input
          type="file"
          name="print_foto_vistoria_cautelar2"
          id="print_foto_vistoria_cautelar2"
          style="display: none;"
        >
        <input
          type="text"
          name="file_foto_vistoria_cautelar2"
          id="file_foto_vistoria_cautelar2"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button
          type="button"
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload_v2"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
      </div>


      <label
        for="foto_vistoria_cautelar3"
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Foto/Print3:
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input
          type="file"
          name="print_foto_vistoria_cautelar3"
          id="print_foto_vistoria_cautelar3"
          style="display: none;"
        >
        <input
          type="text"
          name="file_foto_vistoria_cautelar3"
          id="file_foto_vistoria_cautelar3"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button
          type="button"
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload_v3"
        >
          <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
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
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>

</form>