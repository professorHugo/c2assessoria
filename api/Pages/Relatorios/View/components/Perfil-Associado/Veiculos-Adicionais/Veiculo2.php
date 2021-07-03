<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarVeiculoExtra2 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoExtra2'
    ";
    echo "</pre>";
    $ExeQrBuscarVeiculosExtra2 = mysqli_query($connection, $QueryBuscarVeiculoExtra2);
    $RowQrBuscarVeiculosExtra2 = mysqli_num_rows($ExeQrBuscarVeiculosExtra2);
    if( $RowQrBuscarVeiculosExtra2 = 1 ){
      while( $Veiculo2 = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra2) ){
        ?>
          <div class="col-12 veiculos-extra">
            <b>Veículo 2: </b><br>
            Marca: <?php echo $Veiculo2['marca_veiculo'] ?><br>
            Modelo: <?php echo $Veiculo2['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($Veiculo2['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $Veiculo2['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarVeiculoExtra2 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoExtra2'
    ";
    "</pre>";
    $ExeQrBuscarVeiculosExtra2 = mysqli_query($connection, $QueryBuscarVeiculoExtra2);
    $RowQrBuscarVeiculosExtra2 = mysqli_num_rows($ExeQrBuscarVeiculosExtra2);
    if( $RowQrBuscarVeiculosExtra2 = 1 ){
      while( $Veiculo2 = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra2) ){
        ?>
          <div class="col-12 veiculos-extra">
            <b>Veículo 2: </b><br>
            Marca: <?php echo $Veiculo2['marca_veiculo'] ?><br>
            Modelo: <?php echo $Veiculo2['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($Veiculo2['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $Veiculo2['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }
  