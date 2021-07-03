<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarVeiculoProprio3 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoProprio3'
    ";
    echo "</pre>";
    $ExeQrBuscarVeiculoProprio3 = mysqli_query($connection, $QueryBuscarVeiculoProprio3);
    $RowQrBuscarVeiculoProprio3 = mysqli_num_rows($ExeQrBuscarVeiculoProprio3);
    if( $RowQrBuscarVeiculoProprio3 = 1 ){
      while( $VeiculoProprio3 = mysqli_fetch_assoc($ExeQrBuscarVeiculoProprio3) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $VeiculoProprio3['marca_veiculo'] ?><br>
            Modelo: <?php echo $VeiculoProprio3['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($VeiculoProprio3['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $VeiculoProprio3['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarVeiculoProprio3 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoProprio3'
    ";
    "</pre>";
    $ExeQrBuscarVeiculoProprio3 = mysqli_query($connection, $QueryBuscarVeiculoProprio3);
    $RowQrBuscarVeiculoProprio3 = mysqli_num_rows($ExeQrBuscarVeiculoProprio3);
    if( $RowQrBuscarVeiculoProprio3 = 1 ){
      while( $VeiculoProprio3 = mysqli_fetch_assoc($ExeQrBuscarVeiculoProprio3) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $VeiculoProprio3['marca_veiculo'] ?><br>
            Modelo: <?php echo $VeiculoProprio3['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($VeiculoProprio3['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $VeiculoProprio3['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }
  