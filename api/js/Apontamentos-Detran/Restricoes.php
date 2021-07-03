<?php
if( isset($_GET['Restricoes']) ){
  $Restricoes = $_GET['Restricoes'];

  if( $Restricoes == 1){
    ?>

      
      <label for="outras_restricoes" class="col-12 col-form-label col-form-label-lg">
        Outras Informações sobre restrições:
      </label>
      <textarea
        name="outras_restricoes"
        id="outras_restricoes"
        cols="30" rows="5"
        class="form-control form-control-lg col-12"
      ></textarea>
    

    <?php
  }
}