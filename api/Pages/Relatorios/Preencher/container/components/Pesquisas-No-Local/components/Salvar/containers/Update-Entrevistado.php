<?php 
  if( $SysMode == 1 ){
    echo "<br><pre>" . 
    $QueryUpdateEntrevistado = "
      UPDATE tb_entrevistados
      SET
        relacionamento_entrevistado = '$RelacionamentoEntrevistado',
        informacao_salva = 'Sim',
        observacao_entrevistado = '$Observacao'
      WHERE
        protocolo_entrevistados = '$Protocolo' &&
        id_entrevistado = '$Entrevistado'
    ";
    echo "</pre>";
    if( $ExeQrUpdateEntrevistado = mysqli_query($connection, $QueryUpdateEntrevistado) ){
      echo "<br>Entrevistado $Entrevistado atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{
    //PROD
     "<br><pre>" . 
    $QueryUpdateEntrevistado = "
      UPDATE tb_entrevistados
      SET
        relacionamento_entrevistado = '$RelacionamentoEntrevistado',
        informacao_salva = 'Sim',
        observacao_entrevistado = '$Observacao'
      WHERE
        protocolo_entrevistados = '$Protocolo' &&
        id_entrevistado = '$Entrevistado'
    ";
     "</pre>";
    if( $ExeQrUpdateEntrevistado = mysqli_query($connection, $QueryUpdateEntrevistado) ){
       "<br>Entrevistado $Entrevistado atualizado com sucesso";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }