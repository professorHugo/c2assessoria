<?php
if( isset($_GET['MotoristaApp']) ){
  $MotoristaApp = $_GET['MotoristaApp'];

  if( $MotoristaApp == 1 ){
    ?>
      <label 
        for="apresentou_comprovante" 
        class="col-form-label col-form-label-lg col-lg-6 col-sm-12"
      >Aprestentou cadastro/corridas realizadas: </label>
      <div class="col-lg-6 col-sm-12">
        <select 
          name="apresentou_comprovante" 
          id="apresentou_comprovante" 
          class="form-control form-control-lg"
          required onchange="apresentouComprovante();"
        >
          <option value="" selected disabled>Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    <?php
  }
}
