<?php
if( isset($_GET['E']) ){
  $Testemunhas = $_GET['E'];

  if( $Testemunhas == 1 ){
    ?>
      <label 
        for="quantidade_entrevistados" 
        class="col-xs-9 col-sm-9 col-md-9 col-form-label col-form-label-lg float-left"
        style="margin-top:15px"
      >Adicionar Entrevistado: </label>
      <div style="margin-bottom:10px"></div>
      <div class="col-xs-3 col-sm-3 col-md-3 float-left">
        <button type="button"
          class="btn btn-success"
          data-toggle="modal"
          data-target="#Modal-Add-Entrevistado"
          style="font-size: 2rem;padding: 3px 15px"
          id="quantidade_entrevistados"
        >
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
        </button>
      </div>
    <?php
  }
}