<?php
if( isset($_GET['T']) ){
  $Testemunhas = $_GET['T'];

  if( $Testemunhas == 1 ){
    ?>
      <label 
        for="quantidade_testemunhas" 
        class="col-sm-9 col-md-9 col-form-label col-form-label-lg float-left"
        style="margin-top:5px"
      >Adicionar Testemunha: </label>
      <div style="margin-bottom:10px"></div>
      <div class="col-sm-3 col-md-3 float-left">
        <button type="button"
          class="btn btn-success"
          data-toggle="modal"
          data-target="#Modal-Add-Testemunha"
          style="font-size: 2rem;padding: 3px 15px"
          id="quantidade_testemunhas"
        >
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
        </button>
      </div>
    <?php
  }
}