<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Contexto: " . $DinamicaEvento = $_POST['dinamica_evento'];
    echo "<br><pre>" .
    $QueryBuscaRelatorio = "
      SELECT * FROM tb_relatorios
      WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscaRelatorio = mysqli_query($connection, $QueryBuscaRelatorio);
    $RowQrBuscaRelatorio = mysqli_num_rows($ExeQrBuscaRelatorio);
  
    if( $RowQrBuscaRelatorio = 1 ){
      echo "<br><pre>" . 
      $QueryUpdateDinamica = "
        UPDATE tb_relatorios
        SET
          dinamica_do_evento = '$DinamicaEvento'
        WHERE
          protocolo_evento = '$Protocolo'
      ";
      echo "</pre>";
  
      $ExeQrUpdateDinamica = mysqli_query($connection, $QueryUpdateDinamica);
      if( $ExeQrUpdateDinamica ){
        echo "<br>Dinâmica do evento atualizada";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>Contexto: " . $DinamicaEvento = $_POST['dinamica_evento'];
    "<br><pre>" .
    $QueryBuscaRelatorio = "
      SELECT * FROM tb_relatorios
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscaRelatorio = mysqli_query($connection, $QueryBuscaRelatorio);
    $RowQrBuscaRelatorio = mysqli_num_rows($ExeQrBuscaRelatorio);
  
    if( $RowQrBuscaRelatorio = 1 ){
      "<br><pre>" . 
      $QueryUpdateDinamica = "
        UPDATE tb_relatorios
        SET
          dinamica_do_evento = '$DinamicaEvento'
        WHERE
          protocolo_evento = '$Protocolo'
      ";
      "</pre>";
  
      $ExeQrUpdateDinamica = mysqli_query($connection, $QueryUpdateDinamica);
      if( $ExeQrUpdateDinamica ){
        "<br>Dinâmica do evento atualizada";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }