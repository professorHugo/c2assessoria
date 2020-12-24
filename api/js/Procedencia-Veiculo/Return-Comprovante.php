<?php
if( isset($_GET['C']) ){
  $Comprovante = $_GET['C'];

  if( $Comprovante <= 4 && $Comprovante != 1 ){
    ?>
      <label 
        for="comprovante_procedente" 
        class="col-sm-6 col-md-6 float-left col-form-label col-form-label-lg" 
      >Comprovante: 
      </label>

      <div class="col-sm-6 col-md-6 float-left">
        <select 
          name="comprovante_procedente" 
          id="comprovante_procedente" 
          class="form-control form-control-lg"
          required
          onchange="changeComprovante();"
        >
          <option value="" disabled selected>Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    <?php
  }

}