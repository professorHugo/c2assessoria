<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarVeiculoExtra3 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoExtra3'
    ";
    echo "</pre>";
    $ExeQrBuscarVeiculosExtra3 = mysqli_query($connection, $QueryBuscarVeiculoExtra3);
    $RowQrBuscarVeiculosExtra3 = mysqli_num_rows($ExeQrBuscarVeiculosExtra3);
    if( $RowQrBuscarVeiculosExtra3 = 1 ){
      while( $Veiculo3 = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra3) ){
        ?>
          <div class="col-12 veiculos-extra">
            <b>Veículo 3: </b><br>
            Marca: <?php echo $Veiculo3['marca_veiculo'] ?><br>
            Modelo: <?php echo $Veiculo3['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($Veiculo3['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $Veiculo3['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarVeiculoExtra3 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoExtra3'
    ";
    "</pre>";
    $ExeQrBuscarVeiculosExtra3 = mysqli_query($connection, $QueryBuscarVeiculoExtra3);
    $RowQrBuscarVeiculosExtra3 = mysqli_num_rows($ExeQrBuscarVeiculosExtra3);
    if( $RowQrBuscarVeiculosExtra3 = 1 ){
      while( $Veiculo3 = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra3) ){
        ?>
          <div class="col-12 veiculos-extra">
            <b>Veículo 3: </b><br>
            Marca: <?php echo $Veiculo3['marca_veiculo'] ?><br>
            Modelo: <?php echo $Veiculo3['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($Veiculo3['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $Veiculo3['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }
  