<div class="col-12" id="Dados-Apontamentos-Detran">
  <h3 class="rotulos">Apontamentos no DETRAN: </h3>

  <div class="col-2 float-left">
    <b>Estado: </b> <br>
    <?php echo $EstadoDetran ?>
  </div>

  <div class="col-3 float-left">
    <b>Multa pertinente evento: </b><br>
    <?php
      if( $MultaRegistroDetran == 1 ){
        echo "Sim";
      }else{
        echo "Não";
      }
    ?>
  </div>

  <div class="col-2 float-left">
    <b>Restriões diversas: </b><br>
    <?php 
      if( $RestricoesDiversas == 1 ){
        echo "Sim";
      }else{
        echo "Não";
      }
    ?>
  </div>

  <div class="col-3 float-left">
    <b>Restrições Financeiras: </b><br>
    <?php echo $RestricoesFinanceiras?>
  </div>

  <div class="col-2 float-left">
    <b>Queixa:</b><br>
    <?php echo $QueixaRegistro?>
  </div>

</div>

<?php 
  if( $MultaRegistroDetran == 1 ){
    ?>
      <div class="col-12 space-3 float-left" id="Fotos-Multa-Detran">
        <?php include 'components/Fotos-Multa-Detran.php'?>
      </div>
    <?php
  }
?>

