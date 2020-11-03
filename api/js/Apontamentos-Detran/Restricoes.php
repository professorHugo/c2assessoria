<?php
if( isset($_GET['Restricoes']) ){
  $Restricoes = $_GET['Restricoes'];

  if( $Restricoes == 1){
    ?>

      <div class="custom-control custom-switch">
        <div class="col-sm-6 col-md-3 float-left">
          <input
            type="checkbox"
            name="restricoes_financeiras"
            id="restricoes_financeiras"
            class="custom-control-input"
          >
          <label for="restricoes_financeiras" class="custom-control-label">Restrições Financeiras</label>
        </div>

        <div class="col-sm-6 col-md-3 float-left">
          <input
            type="checkbox"
            name="queixa_roubo_furto"
            id="queixa_roubo_furto"
            class="custom-control-input"
          >
          <label for="queixa_roubo_furto" class="custom-control-label">Queixa roubo/furto</label>
        </div>
      </div>

      <div class="col-12">
        <label for="outras_restricoes" class="col-12 col-form-label col-form-label-lg">
          Outras Informações:
        </label>
        <textarea
          name="outras_restricoes"
          id="outras_restricoes"
          cols="30" rows="5"
          class="form-control form-control-lg"
        ></textarea>
      </div>

    <?php
  }
}