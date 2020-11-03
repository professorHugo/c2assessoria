<script src="js/Perfil-Condutor/Perfil-Condutor.js"></script>
<script>
$(function(){
    $('#button-upload').on('click', function() {
        $('#print_prontuario_condutor').trigger('click');
    });

    $('#print_prontuario_condutor').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_prontuario_condutor').val(fileName);
    });
});
</script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar" 
  method="post"
  enctype="multipart/form-data"
>
  <div class="form-group row">
    <div class="col-12">
      <h4>
        Perfil do Condutor: <br>
        <?php
           "<br><pre>" . 
          $QueryBuscarCondutor = "
            SELECT * FROM 
              tb_relatorios relatorio
            INNER JOIN tb_condutores condutores
              ON relatorio.protocolo_evento = condutores.protocolo_evento
            WHERE relatorio.protocolo_evento = '$Protocolo'
          ";
           "</pre>";
          $ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);
          $RowQrBuscarCondutor = mysqli_num_rows($ExeQrBuscarCondutor);
          if( $RowQrBuscarCondutor = 1 ){
            while( $ReturnCondutor = mysqli_fetch_assoc($ExeQrBuscarCondutor) ){
              echo $ReturnCondutor['nome_condutor'];
            }
          }
        ?>
      </h4>
    </div>
    <label 
      for="estado_civil_condutor" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Estado Civil: 
    </label>

    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <select 
        name="estado_civil_condutor" 
        id="estado_civil_condutor" 
        class="form-control form-control-lg" 
        required
      >
        <?php
          echo $QueryBuscarEstadoCivil = "SELECT * FROM tb_tipos_civil";
          $ExeQrBuscarEstadoCivil = mysqli_query($connection, $QueryBuscarEstadoCivil);
          $RowQrBuscarEstadoCivil = mysqli_num_rows($ExeQrBuscarEstadoCivil);

          if( $RowQrBuscarEstadoCivil > 0 ){
            ?>
              <option value="" disabled selected>Escolha</option>
            <?php
            while( $EstadoCivil = mysqli_fetch_assoc($ExeQrBuscarEstadoCivil) ){
              ?>
                <option value="<?php echo $EstadoCivil['id_civil']?>">
                  <?php echo $EstadoCivil['descricao_civil']?>
                </option>
              <?php
            }
          }else{
            ?>
              <option value="" disabled selected>Estados Civis ainda não cadastrados</option>
            <?php
          }
        ?>
      </select> 
    </div>

    <label 
      for="profissao_condutor" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Profissão: 
    </label>
    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <input 
        type="text" 
        name="profissao_condutor" 
        id="profissao_condutor"
        class="form-control form-control-lg"
      >
    </div>
  </div>

  <div class="form-group row">
    <label 
      for="veiculo_proprio" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Veículo Próprio: 
    </label>

    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <select 
        name="veiculo_proprio" 
        id="veiculo_proprio" 
        class="form-control form-control-lg"
        required
        onchange="acionarVeiculosProprios();desativarVeiculosProprios();"
      >
        <option value="">Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>

    <div class="col-sm-12 col-md-6" id="veiculo_condutor_return" style="margin-top: 10px">
      <!-- Caso tenha veículos adicionais -->
    </div>

    <div class="col-12" id="veiculos_adicionais">
      <!-- Caso tenha veículos adicionais -->
      
    </div>

  </div>

  <div class="form-group row">
    <label 
      for="registro_cnh" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top:10px"
    >
      Registro CNH
    </label>

    <div class="col-sm-7 col-md-4" style="margin-top:10px">
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
      <label 
        for="prontuario_condutor" 
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Prontuário DETRAN: 
      </label>
      <div class="col-sm-7 com-md-6 float-left" style="margin-top: 10px">
        <input 
          type="file" 
          name="print_prontuario_condutor" 
          id="print_prontuario_condutor"
          style="display: none;"
        >
        <input 
          type="text" 
          name="file_prontuario_condutor" 
          id="file_prontuario_condutor"
          placeholder="Escolha o arquivo"
          class="form-control form-control-lg col-9 float-left"
          readonly
        >
        <button 
          type="button" 
          class="btn-default form-control form-control-lg col-3 float-left"
          id="button-upload"
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