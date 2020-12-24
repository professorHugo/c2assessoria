<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryUpdateVistoria = "
      UPDATE tb_vistorias_realizadas
      SET
        vistoria_aprovada = '$RespostaVistoria',
        data_vistoria = '$DataVistoria'
      WHERE
        protocolo_vistoria = '$Protocolo'
    ";
    echo "</pre>";
    if( $ExeQrUpdateVistoria = mysqli_query($connection, $QueryUpdateVistoria) ){
      echo "<br>Dados da vistoria atualizados";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryUpdateVistoria = "
      UPDATE tb_vistorias_realizadas
      SET
        vistoria_aprovada = '$RespostaVistoria',
        data_vistoria = '$DataVistoria'
      WHERE
        protocolo_vistoria = '$Protocolo'
    ";
    "</pre>";
    if( $ExeQrUpdateVistoria = mysqli_query($connection, $QueryUpdateVistoria) ){
      "<br>Dados da vistoria atualizados";
    }else{
      "<br>Erro: " . mysqli_error($connection);
    }
  }