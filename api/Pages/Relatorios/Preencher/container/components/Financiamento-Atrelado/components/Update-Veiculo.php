<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFinanceiroVeiculo = "
      SELECT * FROM tb_financeiro_veiculo
      WHERE protocolo_financeiro = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarFinanceiroVeiculo = mysqli_query($connection, $QueryBuscarFinanceiroVeiculo);
    $RowQrBuscarFinanceiroVeiculo = mysqli_num_rows($ExeQrBuscarFinanceiroVeiculo);
    if( $RowQrBuscarFinanceiroVeiculo = 1 ){
      while( $Financeiro = mysqli_fetch_assoc($ExeQrBuscarFinanceiroVeiculo) ){
        $IdFinanceiro = $Financeiro['id_financeiro'];
      }
      echo "<br><pre>" . 
      $QueryUpdateFinanceiroVeiculo = "
        UPDATE tb_veiculos
        SET
          financeiro_veiculo = '$IdFinanceiro'
        WHERE
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      echo "</pre>";
      $ExeQrUpdateFinanceiroVeiculo = mysqli_query($connection, $QueryUpdateFinanceiroVeiculo);
      if( $ExeQrUpdateFinanceiroVeiculo ){
        echo "<br>Financeiro do veículo atualizado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{
    //PROD

    "<br><pre>" . 
    $QueryBuscarFinanceiroVeiculo = "
      SELECT * FROM tb_financeiro_veiculo
      WHERE protocolo_financeiro = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarFinanceiroVeiculo = mysqli_query($connection, $QueryBuscarFinanceiroVeiculo);
    $RowQrBuscarFinanceiroVeiculo = mysqli_num_rows($ExeQrBuscarFinanceiroVeiculo);
    if( $RowQrBuscarFinanceiroVeiculo = 1 ){
      while( $Financeiro = mysqli_fetch_assoc($ExeQrBuscarFinanceiroVeiculo) ){
        $IdFinanceiro = $Financeiro['id_financeiro'];
      }
      "<br><pre>" . 
      $QueryUpdateFinanceiroVeiculo = "
        UPDATE tb_veiculos
        SET
          financeiro_veiculo = '$IdFinanceiro'
        WHERE
          protocolo_evento = '$Protocolo' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      "</pre>";
      $ExeQrUpdateFinanceiroVeiculo = mysqli_query($connection, $QueryUpdateFinanceiroVeiculo);
      if( $ExeQrUpdateFinanceiroVeiculo ){
        "<br>Financeiro do veículo atualizado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }