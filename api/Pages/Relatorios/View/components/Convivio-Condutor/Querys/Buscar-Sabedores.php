<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>".
    $QueryBuscarSabedoresCondutor = "
      SELECT * FROM 
        tb_entrevistados_convivio
      WHERE 
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '2'
    ";
    echo "</pre>";
    $ExeQrBuscarSabedoresCondutor = mysqli_query($connection, $QueryBuscarSabedoresCondutor);
    $RowQrBuscarSabedoresCondutor = mysqli_num_rows($ExeQrBuscarSabedoresCondutor);
    if( $RowQrBuscarSabedoresCondutor = 1 ){
      while( $ReturnBuscarSabedoresCondutor = mysqli_fetch_assoc($ExeQrBuscarSabedoresCondutor) ){
        $TotalSabedoresCondutor = $ReturnBuscarSabedoresCondutor['total_sabedores'];
        $Confirmacao1SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao1_sabedores'];
        $Confirmacao2SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao2_sabedores'];
        $Confirmacao3SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao3_sabedores'];
        $Confirmacao4SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao4_sabedores'];
        $Confirmacao5SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao5_sabedores'];
        $Confirmacao6SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao6_sabedores'];
        $Confirmacao7SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao7_sabedores'];
        $Confirmacao8SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao8_sabedores'];
        if( $ReturnBuscarSabedoresCondutor['informacao_geral_sabedores'] != '' ){
          $InformacaoGeralSabedoresCondutor = $ReturnBuscarSabedoresCondutor['informacao_geral_sabedores'];
        }
      }
    }
  }else{
    //PROD
    "<br><pre>".
    $QueryBuscarSabedoresCondutor = "
      SELECT * FROM 
        tb_entrevistados_convivio
      WHERE 
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '2'
    ";
    "</pre>";
    $ExeQrBuscarSabedoresCondutor = mysqli_query($connection, $QueryBuscarSabedoresCondutor);
    $RowQrBuscarSabedoresCondutor = mysqli_num_rows($ExeQrBuscarSabedoresCondutor);
    if( $RowQrBuscarSabedoresCondutor = 1 ){
      while( $ReturnBuscarSabedoresCondutor = mysqli_fetch_assoc($ExeQrBuscarSabedoresCondutor) ){
        $TotalSabedoresCondutor = $ReturnBuscarSabedoresCondutor['total_sabedores'];
        $Confirmacao1SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao1_sabedores'];
        $Confirmacao2SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao2_sabedores'];
        $Confirmacao3SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao3_sabedores'];
        $Confirmacao4SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao4_sabedores'];
        $Confirmacao5SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao5_sabedores'];
        $Confirmacao6SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao6_sabedores'];
        $Confirmacao7SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao7_sabedores'];
        $Confirmacao8SabedoresCondutor = $ReturnBuscarSabedoresCondutor['confirmacao8_sabedores'];
        if( $ReturnBuscarSabedoresCondutor['informacao_geral_sabedores'] != '' ){
          $InformacaoGeralSabedoresCondutor = $ReturnBuscarSabedoresCondutor['informacao_geral_sabedores'];
        }
      }
    }
  }