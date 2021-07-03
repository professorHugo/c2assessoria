<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarVeiculoProprio1 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoProprio1'
    ";
    echo "</pre>";
    $ExeQrBuscarVeiculoProprio1 = mysqli_query($connection, $QueryBuscarVeiculoProprio1);
    $RowQrBuscarVeiculoProprio1 = mysqli_num_rows($ExeQrBuscarVeiculoProprio1);
    if( $RowQrBuscarVeiculoProprio1 = 1 ){
      while( $VeiculoProprio1 = mysqli_fetch_assoc($ExeQrBuscarVeiculoProprio1) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $VeiculoProprio1['marca_veiculo'] ?><br>
            Modelo: <?php echo $VeiculoProprio1['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($VeiculoProprio1['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $VeiculoProprio1['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarVeiculoProprio1 = "
      SELECT * FROM tb_veiculos
      WHERE id_veiculo = '$VeiculoProprio1'
    ";
    "</pre>";
    $ExeQrBuscarVeiculoProprio1 = mysqli_query($connection, $QueryBuscarVeiculoProprio1);
    $RowQrBuscarVeiculoProprio1 = mysqli_num_rows($ExeQrBuscarVeiculoProprio1);
    if( $RowQrBuscarVeiculoProprio1 = 1 ){
      while( $VeiculoProprio1 = mysqli_fetch_assoc($ExeQrBuscarVeiculoProprio1) ){
        ?>
          <div class="col-12 veiculos-extra float-left">
            <b>Veículo 1: </b><br>
            Marca: <?php echo $VeiculoProprio1['marca_veiculo'] ?><br>
            Modelo: <?php echo $VeiculoProprio1['modelo_veiculo'] ?><br>
            Placa: <?php echo substr_replace($VeiculoProprio1['placa_veiculo'], "-", 3, 0) ?><br>
            Proteção: <?php echo $VeiculoProprio1['protecao_veiculo'] ?>
          </div>
        <?php
      }
    }
  }
  