<?php
if( isset($_GET['Status']) ){
  $Status = $_GET['Status'];

  if( $Status == 1 ){
    ?>

      <div class="custom-control custom-switch">
        <div class="col float-left">
          <input
            type="checkbox"
            name="data_confirmada"
            id="data_confirmada"
            class="custom-control-input"
          >
          <label for="data_confirmada" class="custom-control-label">Data confirmada</label>
        </div>

        <div class="col float-left">
          <input
            type="checkbox"
            name="hora_confirmada"
            id="hora_confirmada"
            class="custom-control-input"
          >
          <label for="hora_confirmada" class="custom-control-label">Hora confirmada</label>
        </div>

        <div class="col float-left">
          <input
            type="checkbox"
            name="trajeto_confirmada"
            id="trajeto_confirmada"
            class="custom-control-input"
          >
          <label for="trajeto_confirmada" class="custom-control-label">Trajeto confirmado</label>
        </div>  

      </div>
      
    <?php
  }
}
?>