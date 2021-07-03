<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Data/Hora Update: " . $DataUpdate = date('Y-m-d H:i');
    echo "<br><pre>" . 
    $QueryUpdateStatusRelatorio = "
      UPDATE
        tb_relatorios
      SET
        horario_update = '$DataUpdate',
        status_relatorio = 'Preenchendo'
      WHERE
        protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateStatusRelatorio = mysqli_query($connection, $QueryUpdateStatusRelatorio);

    if( $ExeQrUpdateStatusRelatorio ){
      echo "<br>Data e status do relatório atualizados para o protocolo " . $Protocolo;
    }else{
      echo "<br>Erro ao atualizar data e horário do relatório: " . mysqli_error($connection);
    }
  }else{

    //DEV
    "<br><br>Data/Hora Update: " . $DataUpdate = date('Y-m-d H:i');
    "<br><pre>" . 
    $QueryUpdateStatusRelatorio = "
      UPDATE
        tb_relatorios
      SET
        horario_update = '$DataUpdate',
        status_relatorio = 'Preenchendo'
      WHERE
        protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrUpdateStatusRelatorio = mysqli_query($connection, $QueryUpdateStatusRelatorio);

    if( $ExeQrUpdateStatusRelatorio ){
      "<br>Data e status do relatório atualizados para o protocolo " . $Protocolo;
    }else{
      echo "<br>Erro ao atualizar data e horário do relatório: " . mysqli_error($connection);
    }
  }