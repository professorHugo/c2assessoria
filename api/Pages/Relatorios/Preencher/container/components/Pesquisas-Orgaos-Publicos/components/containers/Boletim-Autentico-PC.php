<?php
if( isset($_GET['APC']) ){
  $BoletimPCApresentado = $_GET['APC'];

  if( $BoletimPCApresentado == 1 ){
    ?>

      <div class="col-6 float-left">
        <label for="boletim_pc_autentico" class="col-form-label col-form-label-lg">
          Autentico: 
        </label>
      </div>


      <div class="col-6 float-left">
        <select 
          name="boletim_pc_autentico" 
          id="boletim_pc_autentico" 
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