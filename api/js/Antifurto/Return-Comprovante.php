<?php
if( isset($_GET['Comprovante']) ){
  $Comprovante = $_GET['Comprovante'];

  if( $Comprovante == 1 ){
    ?>
      <label
        for="comprovante_instalacao"
        class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
        style="margin-top: 10px"
      >Comprovante:
      </label>

      <div class="col-sm-7 col-md-3" style="margin: 10px -10px 10px 10px; padding-right:0">
        <select
          name="comprovante_instalacao"
          id="comprovante_instalacao"
          class="form-control form-control-lg"
          required
          onchange="selectComprovanteRastreador();"
        >
          <option value="" selected disabled>Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      </div>
    <?php
  }
}