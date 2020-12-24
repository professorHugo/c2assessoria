<?php
   "<br><pre>" . 
    $QueryBuscarCondutor = "
      SELECT * FROM 
          tb_relatorios relatorio
      INNER JOIN tb_condutores condutor
          ON relatorio.protocolo_evento = condutor.protocolo_evento
      INNER JOIN tb_cnh_registros cnh
          ON condutor.cnh_condutor = cnh.id_cnh
      INNER JOIN tb_fotos foto
          ON cnh.img_cnh1 = foto.id_foto OR cnh.img_cnh2 = foto.id_foto
      WHERE 
          relatorio.protocolo_evento = '$Protocolo' &&
          condutor.perfil_salvo = 1
      ";
    "</pre>";

  $ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);
  $RowQrBuscarCondutor = mysqli_num_rows($ExeQrBuscarCondutor);

  if( $RowQrBuscarCondutor >= 1 ){
    while( $ReturCondutor = mysqli_fetch_assoc($ExeQrBuscarCondutor) ){
      $CNHCondutor = $ReturCondutor['cnh_condutor'];
      $Pasta = $ReturCondutor['cpf_associado'];
      $Foto = $ReturCondutor['nome_foto'];
      $CategoriaFoto = $ReturCondutor['categoria_foto'];
      ?>
        <div class="col-12 text-center">
          <h4 class="col-12 text-left" style="margin-top: 2rem">
            Prontuário 
              <?php
                  if( $CategoriaFoto == 'prontuario_condutor1' ){
                      echo "foto 1";
                  }else{
                      echo "foto 2";
                  }
              ?>
          </h4>
          <img 
            src="Docs/<?php echo $Pasta . "/" . $Foto ?>" 
            alt="<?php echo $Foto?>"
            title="<?php echo $CategoriaFoto?>"
            class="img-fluid"
          >
        </div>
      <?php
    }
  }else{
    ?>
      <label 
        for="registro_cnh" 
        class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
        style="margin-top:10px"
      >
        Registro CNH
      </label>

      <div class="col-xs-7 col-sm-7 col-md-4" style="margin-top:10px">
        <select 
          name="registro_cnh" 
          id="registro_cnh"
          class="form-control form-control-lg"
          required
          onchange="registroCNH()"
        >
          <option value="">Selecione</option>
          <option value="1">Habilitado</option>
          <option value="2">Não Habilitado</option>
        </select>
      </div>
      <div class="col-md-4"></div>

      <div class="row" id="return_prontuario" style="display:none">
        <!-- Retorno do prontuário, mostrar a caixa de upload se for habilitado -->
        <label 
          for="status_cnh" 
          class="col-xs-5 col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
          style="margin-top: 10px;"
        >
          Status da CNH
        </label>

        <div class="col-xs-7 col-sm-7 col-md-6 float-left" style="margin-top:10px">
          <select 
            name="status_cnh" 
            id="status_cnh"
            class="form-control form-control-lg"
            required
          >
            <option value="">Selecione</option>
            <option value="1">Válida</option>
            <option value="2">Vencida</option>
            <option value="3">Suspensa</option>
            <option value="4">Cassada</option>
          </select>
        </div>

        <h5 
          style="border-bottom: 1px solid #ddd; margin-top:1.8rem; width: 100%; float: left"
        >Prontuário DETRAN</h5>
        <label 
          for="prontuario_condutor1" 
          class="col-xs-5 col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
          style="margin-top: 10px"
        >
          Foto/Print 1: 
        </label>

        <div class="col-xs-7 col-sm-7 com-md-3 float-left" style="margin-top: 10px">
          <input 
            type="file" 
            name="print_prontuario_condutor1" 
            id="print_prontuario_condutor1"
            style="display: none;"
          >
          <input 
            type="text" 
            name="file_prontuario_condutor1" 
            id="file_prontuario_condutor1"
            placeholder="Escolha o arquivo"
            class="form-control form-control-lg col-9 float-left"
            readonly
          >
          <button 
            type="button" 
            class="btn-default form-control form-control-lg col-3 float-left"
            id="button-upload-condutor1"
          >
            <i class="fa fa-upload" aria-hidden="true"></i>
          </button>
        </div>


        <label 
          for="prontuario_condutor2" 
          class="col-xs-5 col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
          style="margin-top: 10px"
        >
          Foto/Print 2: 
        </label>

        <div class="col-xs-7 col-sm-7 com-md-3 float-left" style="margin-top: 10px">
          <input 
            type="file" 
            name="print_prontuario_condutor2" 
            id="print_prontuario_condutor2"
            style="display: none;"
          >
          <input 
            type="text" 
            name="file_prontuario_condutor2" 
            id="file_prontuario_condutor2"
            placeholder="Escolha o arquivo"
            class="form-control form-control-lg col-9 float-left"
            readonly
          >
          <button 
            type="button" 
            class="btn-default form-control form-control-lg col-3 float-left"
            id="button-upload-condutor2"
          >
            <i class="fa fa-upload" aria-hidden="true"></i>
          </button>
        </div>
      </div>

    <?php
  }
?>