<script src="js/Proprietario-Legal/Proprietario-Legal.js"></script>
<script src="js/Proprietario-Legal/File-Buttons.js"></script>
<script src="js/Proprietario-Legal/BuscarCEPProprietario.js"></script>
<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post"
  enctype="multipart/form-data"
  style="width: 100%"
>
  <div class="form-group row">
    
    <?php 
      include "components/Select-Proprietario.php";

      include "components/Return-Ajax.php";

      include "components/Fotos-Documento-Veiculo.php";
      
      include "components/Texto-Proprietario.php";

      include "components/Space.php";

      include "components/Declaracao-Terceiro.php";

      include "components/Space.php";
      
      include "components/Foto-CNH-Terceiro.php";

      include "components/Endereco-Terceiro.php";
      
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
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>
  
</form>