<script src="js/Proprietario-Anterior/File-Buttons.js"></script>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post"
  enctype="multipart/form-data"
  style="width: 100%"
>
  <div class="form-group row">

    <?php 
      include "components/Dados-Proprietario-Anterior.php";
    ?>

    <div class="col-12" style="margin-bottom:1.5rem"></div>

    <?php
      include "components/Fotos-Documento-Proprietario.php";
    ?>

    <div class="col-12" style="margin-bottom:1.5rem"></div>

    <?php
      include "components/Imagens-Declaracao.php";
    ?>


  </div>


  <?php 
    include "components/Texto-Proprietario-Anterior.php";
  ?>


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