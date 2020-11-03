<?php
if( isset($_GET['Proprietario-Anterior']) ){
  $ProprietarioAnterior = $_GET['Proprietario-Anterior'];

  if( $ProprietarioAnterior == 2 ){
    ?>
      <label 
        for="proprietario_anterior" 
        class="col-4 col-form-label col-form-label-lg float-left"
        style="margin-top: 10px"
      >Prop. Anterior:
      </label>

      <div class="col-8 float-left" style="margin-top:10px">
        <input 
          type="text" 
          name="proprietario_anterior" 
          id="proprietario_anterior" 
          class="form-control form-control-lg"
        >
      </div>
    <?php
  }
}