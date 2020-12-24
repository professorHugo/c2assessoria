<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryUpdateVistoria = "
      UPDATE tb_registro_detran
      SET
        restricoes_financeiras = '$RespostaRestricoesFinanceiras',
        queixa_registro = '$RespostaQueixa',
        outras_informacoes_registro = '$RespostaOutras'
      WHERE
        protocolo_registro_detran = '$Protocolo'
    ";
    echo "</pre>";
    if( $ExeQrUpdateVistoria = mysqli_query($connection, $QueryUpdateVistoria) ){
      echo "<br>Dados do DETRAN Atualizados";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryUpdateVistoria = "
      UPDATE tb_registro_detran
      SET
        restricoes_financeiras = '$RespostaRestricoesFinanceiras',
        queixa_registro = '$RespostaQueixa',
        outras_informacoes_registro = '$RespostaOutras'
      WHERE
        protocolo_registro_detran = '$Protocolo'
    ";
    "</pre>";
    if( $ExeQrUpdateVistoria = mysqli_query($connection, $QueryUpdateVistoria) ){
      "<br>Dados do DETRAN Atualizados";
    }else{
      "<br>Erro: " . mysqli_error($connection);
    }
  }