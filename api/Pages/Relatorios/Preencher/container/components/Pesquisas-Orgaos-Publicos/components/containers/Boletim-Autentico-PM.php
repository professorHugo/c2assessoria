<?php
if( isset($_GET['APM']) ){
  $BoletimPCApresentado = $_GET['APM'];

  if( $BoletimPCApresentado == 1 ){
    ?>
      <div class="col-6 float-left">
        <label for="boletim_pm_autentico" class="col-form-label col-form-label-lg">
          Autêntico: 
        </label>
      </div>

      <div class="col-6 float-left">
        <select 
          name="boletim_pm_autentico" 
          id="boletim_pm_autentico" 
          class="form-control form-control-lg"
        >
          <option disabled selected>Escolha</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    <?php
  }
}