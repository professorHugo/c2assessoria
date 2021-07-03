<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarVeiculoExtra1 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoExtra1'
    ";
    echo "</pre>";
    $ExeQrBuscarVeiculosExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
    $RowQrBuscarVeiculosExtra1 = mysqli_num_rows($ExeQrBuscarVeiculosExtra1);
    if( $RowQrBuscarVeiculosExtra1 = 1 ){
      while( $Veiculo1 = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra1) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $Veiculo1['marca_veiculo'] ?><br>
            Modelo: <?php echo $Veiculo1['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($Veiculo1['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $Veiculo1['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarVeiculoExtra1 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoExtra1'
    ";
    "</pre>";
    $ExeQrBuscarVeiculosExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
    $RowQrBuscarVeiculosExtra1 = mysqli_num_rows($ExeQrBuscarVeiculosExtra1);
    if( $RowQrBuscarVeiculosExtra1 = 1 ){
      while( $Veiculo1 = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra1) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $Veiculo1['marca_veiculo'] ?><br>
            Modelo: <?php echo $Veiculo1['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($Veiculo1['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $Veiculo1['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }
  