<?php
if( isset($_GET['UAPP']) ){
  $UsoApp = $_GET['UAPP'];

  if( $UsoApp == 1 ){
    ?>

      <label 
        for="comprovante_apresentado" 
        class="col-form-label col-form-label-lg col-lg-6 col-sm-12 float-left"
      >Compr. Apresentado:</label>

      <div class="col-lg-6 col-sm-12 float-left">
        <select 
          name="comprovante_apresentado" 
          id="comprovante_apresentado" 
          class="form-control form-control-lg"
          onchange="comprovanteApresentado();comprovanteApresentadoImg()"
        >
          <option value="" selected disabled>Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>

    <?php
  }  
}

?>

