<script src="js/Perfil-Condutor/Perfil-Condutor.js"></script>
<script src="js/Perfil-Condutor/File-Buttons.js"></script>
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
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Perfil-Condutor&Salvar" 
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
              ?>
              <input type='hidden' name='nome_condutor' value="<?php echo $ReturnCondutor['nome_condutor']?>">
              <input type='hidden' name='cpf_associado' value="<?php echo$ReturnCondutor['cpf_associado']?>">
              <?php
            }
          }
        ?>
      </h4>
    </div>
    <label 
      for="estado_civil_condutor" 
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Estado Civil: 
    </label>

    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <?php include 'components/container/Estado-Civil-Condutor.php' ?> 
    </div>

    <label 
      for="profissao_condutor" 
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Profissão: 
    </label>
    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <?php include 'components/container/Profissao-Condutor.php'?>
    </div>
  </div>

  <div class="form-group row">
    <label 
      for="vinculo_proprietario" 
      class="col-form-label col-form-label-lg col-xs-4 col-sm-4"
    >Vínculo: </label>
    <div class="col-xs-8 col-sm-8">
      <?php include 'components/container/Vinculo-Condutor.php'?>
    </div>
  </div>

  <div class="form-group row">
    <label 
      for="veiculo_proprio" 
      class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
      style="margin-top: 10px"
    >
      Veículo Próprio: 
    </label>

    <div class="col-xs-7 col-sm-7 col-md-3" style="margin-top: 10px">
      <?php include 'components/container/Veiculo-Proprio.php'?>
    </div>

    <div class="col-12" style="margin-top:10px">
      <?php include 'components/container/Veiculos-Add-E-Quantidade.php'?>
    </div>
    
    <div class="col-12" style="margin-top:10px">
      <?php include 'components/container/Mostrar-Veiculos-Condutor.php'?>
    </div>

  </div>

  <div class="form-group row">
    <?php include 'components/container/CNH.php'?>
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
        name="Salvar"
      >
        Salvar
      </button>
    </div>
  </div>

</form>

<?php
if( isset($_GET['Salvar']) ){
  include 'components/Salvar-Perfil-Condutor.php';
  if( $SysMode == 2 ){
    include 'components/container/Modal-Perfil-Salvo.php';
  }
}