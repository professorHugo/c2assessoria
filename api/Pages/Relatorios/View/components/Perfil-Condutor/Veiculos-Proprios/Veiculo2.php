<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarVeiculoProprio2 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoProprio2'
    ";
    echo "</pre>";
    $ExeQrBuscarVeiculoProprio2 = mysqli_query($connection, $QueryBuscarVeiculoProprio2);
    $RowQrBuscarVeiculoProprio2 = mysqli_num_rows($ExeQrBuscarVeiculoProprio2);
    if( $RowQrBuscarVeiculoProprio2 = 1 ){
      while( $VeiculoProprio2 = mysqli_fetch_assoc($ExeQrBuscarVeiculoProprio2) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $VeiculoProprio2['marca_veiculo'] ?><br>
            Modelo: <?php echo $VeiculoProprio2['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($VeiculoProprio2['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $VeiculoProprio2['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarVeiculoProprio2 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoProprio2'
    ";
    "</pre>";
    $ExeQrBuscarVeiculoProprio2 = mysqli_query($connection, $QueryBuscarVeiculoProprio2);
    $RowQrBuscarVeiculoProprio2 = mysqli_num_rows($ExeQrBuscarVeiculoProprio2);
    if( $RowQrBuscarVeiculoProprio2 = 1 ){
      while( $VeiculoProprio2 = mysqli_fetch_assoc($ExeQrBuscarVeiculoProprio2) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $VeiculoProprio2['marca_veiculo'] ?><br>
            Modelo: <?php echo $VeiculoProprio2['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($VeiculoProprio2['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $VeiculoProprio2['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }
  