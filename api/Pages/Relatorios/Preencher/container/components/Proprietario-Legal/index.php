<script src="js/Proprietario-Legal/Proprietario-Legal.js"></script>
<script src="js/Proprietario-Legal/File-Buttons.js"></script>
<script src="js/Proprietario-Legal/BuscarCEPProprietario.js"></script>
<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Proprietario-Legal&Salvar"
  method="post"
  enctype="multipart/form-data"
  style="width: 100%"
>
  <div class="form-group row">
    
    <?php 
      include "components/containers/Dados-Associado.php";

      include "components/containers/Form-Content/Select-Proprietario.php";

      include "components/containers/Form-Content/Return-Ajax.php";

      include "components/containers/Form-Content/Fotos-Documento-Veiculo.php";
      
      include "components/containers/Form-Content/Texto-Proprietario.php";

      include "components/containers/Form-Content/Space.php";

      include "components/containers/Form-Content/Declaracao-Terceiro.php";

      include "components/containers/Form-Content/Space.php";
      
      include "components/containers/Form-Content/Foto-CNH-Terceiro.php";

      include "components/containers/Form-Content/Endereco-Terceiro.php";
      
    ?>

    

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
if( isset($_POST['Salvar']) || isset($_GET['Salvar']) ){
  include 'components/Salvar.php';
  if( $SysMode == 2 ){
    include 'components/containers/Modal-Proprietario-Legal-Salvo.php';
  }
}