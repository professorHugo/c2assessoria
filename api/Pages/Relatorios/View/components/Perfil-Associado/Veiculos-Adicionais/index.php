<div class="col-12" id="Veiculos-Extras">
  <?php
    if( $SysMode == 1 ){
      //DEV
      switch( $QtdVeiculosExtras ){
        case 1 : 
          echo "<br>1 Veículo Extra";
          include 'Veiculo1.php';
        break;
        case 2 : 
          echo "<br>2 Veículo Extra";
          include 'Veiculo1.php';
          include 'Veiculo2.php';
        break;
        case 3 : 
          echo "<br>3 Veículo Extra";
          include 'Veiculo1.php';
          include 'Veiculo2.php';
          include 'Veiculo3.php';
        break;
      }
    }else{
      //PROD
      switch( $QtdVeiculosExtras ){
        case 1 : 
          "<br>1 Veículo Extra";
          include 'Veiculo1.php';
        break;
        case 2 : 
          "<br>2 Veículo Extra";
          include 'Veiculo1.php';
          include 'Veiculo2.php';
        break;
        case 3 : 
          "<br>3 Veículo Extra";
          include 'Veiculo1.php';
          include 'Veiculo2.php';
          include 'Veiculo3.php';
        break;
      }
    }
  ?>
</div>