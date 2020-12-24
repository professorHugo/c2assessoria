<?php
if( isset($_GET['Condutor']) ){
  $Condutor = $_GET['Condutor'];

  if( $Condutor == 2 ) {
    //Mostrar Campo para nome do condutor
    ?>
      <label for="nome_condutor" class="col-md-2 col-form-label col-form-label-lg float-left">Nome: </label>
      <div class="col-md-10 float-left">
        <input type="text" id="nome_condutor" name="nome_condutor" class="form-control form-control-lg" placeholder="Digite o nome do condutor">
      </div>
    <?php
  }
}