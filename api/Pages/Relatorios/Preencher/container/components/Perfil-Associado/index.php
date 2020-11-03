<script src="js/Perfil-Associado/Perfil-Associado.js"></script>
<script>
$(function(){
    $('#button-upload').on('click', function() {
        $('#print_prontuario_associado').trigger('click');
    });

    $('#print_prontuario_associado').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_prontuario_associado').val(fileName);
    });
});
</script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Associado&Salvar" 
  method="post"
  enctype="multipart/form-data"
>
  <div class="form-group row">
    <div class="col-12">
      <h4>
        Perfil do Associado: <br>
        <?php
           "<br><pre>" . 
          $QueryBuscarAssociado = "
            SELECT * FROM 
              tb_relatorios relatorio
            INNER JOIN tb_associados associado
              ON relatorio.cpf_associado = associado.cpf_associado
            WHERE protocolo_evento = '$Protocolo'
          ";
           "</pre>";
          $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
          $RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
          if( $RowQrBuscarAssociado = 1 ){
            while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
              echo $ReturnAssociado['nome_associado'];
              echo "<input type='hidden' name='id_associado' value='".$ReturnAssociado[id_associado]."'>";
              echo "<input type='hidden' name='cpf_associado' value='".$ReturnAssociado[cpf_associado]."'>";
            }
          }
        ?>
      </h4>
    </div>
    <label 
      for="estado_civil_associado" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Estado Civil: 
    </label>

    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <select 
        name="estado_civil_associado" 
        id="estado_civil_associado" 
        class="form-control form-control-lg" 
        required
      >
        <?php
          
          "<br><pre>" . 
          $QueryBuscarAssociado = "
            SELECT * FROM 
              tb_relatorios relatorio
            INNER JOIN tb_associados associado
              ON relatorio.cpf_associado = associado.cpf_associado
            WHERE protocolo_evento = '$Protocolo'
          ";
            "</pre>";
          $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
          $RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
          if( $RowQrBuscarAssociado = 1 ){
            while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
              $CivilAssociado = $ReturnAssociado['civil_associado'];
            }
          }
          
          if( $CivilAssociado != NULL ){
            
            ?>
              <option value="<?php echo $CivilAssociado?>">
                <?php echo $CivilAssociado?>
              </option>
            <?php
            $QueryBuscarEstadoCivil = "
              SELECT * FROM tb_tipos_civil 
              WHERE 
                ativacao = '1' &&
                descricao_civil != '$CivilAssociado'
            ";
            $ExeQrBuscarEstadoCivil = mysqli_query($connection, $QueryBuscarEstadoCivil);
            $RowQrBuscarEstadoCivil = mysqli_num_rows($ExeQrBuscarEstadoCivil);

            if( $RowQrBuscarEstadoCivil > 0 ){
              
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
          }else{
            $QueryBuscarEstadoCivil = "SELECT * FROM tb_tipos_civil WHERE ativacao = '1'";
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
          }
        ?>
      </select> 
    </div>

    <label 
      for="profissao_associado" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Profissão: 
    </label>
    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <input 
        type="text" 
        name="profissao_associado" 
        id="profissao_associado"
        class="form-control form-control-lg"
      >
    </div>
  </div>

  <div class="form-group row">
    <label 
      for="outro_veiculo" 
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Outros Veículos: 
    </label>

    <div class="col-sm-7 col-md-3" style="margin-top: 10px">
      <select 
        name="outro_veiculo" 
        id="outro_veiculo" 
        class="form-control form-control-lg"
        required
        onchange="acionarVeiculosAdicionais();desativarVeiculosAdicionais();"
      >
        <option value="">Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>

    <div class="col-sm-12 col-md-6" id="quantidadeReturn" style="margin-top: 10px">
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
      <!-- Retorno do prontuário, mostrar a caixa de upload se for habilitado -->
      <label 
        for="status_cnh" 
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px;"
      >
        Status da CNH
      </label>

      <div class="col-sm-7 col-md-6 float-left" style="margin-top:10px">
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
      <label 
        for="prontuario_associado" 
        class="col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >
        Prontuário DETRAN: 
      </label>

      <div class="col-sm-7 com-md-3 float-left" style="margin-top: 10px">
        <input 
          type="file" 
          name="print_prontuario_associado" 
          id="print_prontuario_associado"
          style="display: none;"
        >
        <input 
          type="text" 
          name="file_prontuario_associado" 
          id="file_prontuario_associado"
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
        name="Salvar"
      >
        Salvar
      </button>
    </div>
  </div>

</form>



<?php
if( isset($_GET['Salvar']) ){
  include 'components/Salvar-Perfil-Associado.php';
}