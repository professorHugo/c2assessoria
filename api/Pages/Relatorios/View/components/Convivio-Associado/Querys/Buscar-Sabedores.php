<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>".
    $QueryBuscarSabedores = "
      SELECT * FROM 
        tb_entrevistados_convivio
      WHERE 
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '1'
    ";
    echo "</pre>";
    $ExeQrBuscarSabedores = mysqli_query($connection, $QueryBuscarSabedores);
    $RowQrBuscarSabedores = mysqli_num_rows($ExeQrBuscarSabedores);
    if( $RowQrBuscarSabedores = 1 ){
      while( $ReturnBuscarSabedores = mysqli_fetch_assoc($ExeQrBuscarSabedores) ){
        $TotalSabedores = $ReturnBuscarSabedores['total_sabedores'];
        $Confirmacao1Sabedores = $ReturnBuscarSabedores['confirmacao1_sabedores'];
        $Confirmacao2Sabedores = $ReturnBuscarSabedores['confirmacao2_sabedores'];
        $Confirmacao3Sabedores = $ReturnBuscarSabedores['confirmacao3_sabedores'];
        $Confirmacao4Sabedores = $ReturnBuscarSabedores['confirmacao4_sabedores'];
        $Confirmacao5Sabedores = $ReturnBuscarSabedores['confirmacao5_sabedores'];
        $Confirmacao6Sabedores = $ReturnBuscarSabedores['confirmacao6_sabedores'];
        $Confirmacao7Sabedores = $ReturnBuscarSabedores['confirmacao7_sabedores'];
        $Confirmacao8Sabedores = $ReturnBuscarSabedores['confirmacao8_sabedores'];
        if( $ReturnBuscarSabedores['informacao_geral_sabedores'] != '' ){
          $InformacaoGeralSabedores = $ReturnBuscarSabedores['informacao_geral_sabedores'];
        }
      }
    }
  }else{
    //PROD
    "<br><pre>".
    $QueryBuscarSabedores = "
      SELECT * FROM 
        tb_entrevistados_convivio
      WHERE 
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '1'
    ";
    "</pre>";
    $ExeQrBuscarSabedores = mysqli_query($connection, $QueryBuscarSabedores);
    $RowQrBuscarSabedores = mysqli_num_rows($ExeQrBuscarSabedores);
    if( $RowQrBuscarSabedores = 1 ){
      while( $ReturnBuscarSabedores = mysqli_fetch_assoc($ExeQrBuscarSabedores) ){
        $TotalSabedores = $ReturnBuscarSabedores['total_sabedores'];
        $Confirmacao1Sabedores = $ReturnBuscarSabedores['confirmacao1_sabedores'];
        $Confirmacao2Sabedores = $ReturnBuscarSabedores['confirmacao2_sabedores'];
        $Confirmacao3Sabedores = $ReturnBuscarSabedores['confirmacao3_sabedores'];
        $Confirmacao4Sabedores = $ReturnBuscarSabedores['confirmacao4_sabedores'];
        $Confirmacao5Sabedores = $ReturnBuscarSabedores['confirmacao5_sabedores'];
        $Confirmacao6Sabedores = $ReturnBuscarSabedores['confirmacao6_sabedores'];
        $Confirmacao7Sabedores = $ReturnBuscarSabedores['confirmacao7_sabedores'];
        $Confirmacao8Sabedores = $ReturnBuscarSabedores['confirmacao8_sabedores'];
        if( $ReturnBuscarSabedores['informacao_geral_sabedores'] != '' ){
          $InformacaoGeralSabedores = $ReturnBuscarSabedores['informacao_geral_sabedores'];
        }
      }
    }
  }