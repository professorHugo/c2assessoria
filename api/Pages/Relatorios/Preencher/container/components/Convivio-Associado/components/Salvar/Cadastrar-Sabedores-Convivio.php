<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarSabedoresConvivio = "
      SELECT * FROM 
        tb_entrevistados_convivio
      WHERE
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '1'
    ";
    echo "</pre>";
    $ExeQrBuscarSabedoresConvivio = mysqli_query($connection, $QueryBuscarSabedoresConvivio);
    $RowQrBuscarSabedoresConvivio = mysqli_num_rows($ExeQrBuscarSabedoresConvivio);

    if( $RowQrBuscarSabedoresConvivio < 1 ){
      echo "<br>Cadastrar Sabedor do convívio do associado.";
      echo "<br><pre>" . 
      $QueryCadastrarSabedorConvivio = "
        INSERT INTO tb_entrevistados_convivio(
          protocolo_sabedores,
          representante_sabedor,
          total_sabedores
        )VALUES(
          '$Protocolo',
          '1',
          '1'
        )
      ";
      echo "</pre>";
      if( $ExeQrCadastrarSabedoresConvivio = mysqli_query($connection, $QueryCadastrarSabedorConvivio) ){
        echo "<br>Registro de entrevistados sabedores criado.";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Atualizar a quantidade de entrevistado sabedores";

      echo "<br><pre>" . 
      $QueryBuscarSabedoresConvivio = "
        SELECT * FROM 
          tb_entrevistados_convivio
        WHERE
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = '1'
      ";
      echo "</pre>";
      $ExeQrBuscarSabedoresConvivio = mysqli_query($connection, $QueryBuscarSabedoresConvivio);
      while( $QuantidadeSabedores = mysqli_fetch_assoc($ExeQrBuscarSabedoresConvivio) ){
        $Quantidade = $QuantidadeSabedores['total_sabedores'];
      }

      $QtdNova = $Quantidade+1;

      echo "<br><pre>" . 
      $QueryUpdateSabedoresConvivio = "
        UPDATE tb_entrevistados_convivio
        SET
          total_sabedores = '$QtdNova'
        WHERE
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = '1'
      ";
      echo "</pre>";
      if( $ExeQrUpdateSabedoresConvivio = mysqli_query($connection, $QueryUpdateSabedoresConvivio) ){
        echo "<br><br>Quantidade de entrevistados sabedores do convívio do associado atualizado com sucesso!";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarSabedoresConvivio = "
      SELECT * FROM 
        tb_entrevistados_convivio
      WHERE
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '1'
    ";
    "</pre>";
    $ExeQrBuscarSabedoresConvivio = mysqli_query($connection, $QueryBuscarSabedoresConvivio);
    $RowQrBuscarSabedoresConvivio = mysqli_num_rows($ExeQrBuscarSabedoresConvivio);

    if( $RowQrBuscarSabedoresConvivio < 1 ){
      "<br>Cadastrar Sabedor do convívio do associado.";
      "<br><pre>" . 
      $QueryCadastrarSabedorConvivio = "
        INSERT INTO tb_entrevistados_convivio(
          protocolo_sabedores,
          representante_sabedor,
          total_sabedores
        )VALUES(
          '$Protocolo',
          '1',
          '1'
        )
      ";
      "</pre>";
      if( $ExeQrCadastrarSabedoresConvivio = mysqli_query($connection, $QueryCadastrarSabedorConvivio) ){
        "<br>Registro de entrevistados sabedores criado.";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Atualizar a quantidade de entrevistado sabedores";

      "<br><pre>" . 
      $QueryBuscarSabedoresConvivio = "
        SELECT * FROM 
          tb_entrevistados_convivio
        WHERE
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = '1'
      ";
      "</pre>";
      $ExeQrBuscarSabedoresConvivio = mysqli_query($connection, $QueryBuscarSabedoresConvivio);
      while( $QuantidadeSabedores = mysqli_fetch_assoc($ExeQrBuscarSabedoresConvivio) ){
        $Quantidade = $QuantidadeSabedores['total_sabedores'];
      }

      $QtdNova = $Quantidade+1;

      "<br><pre>" . 
      $QueryUpdateSabedoresConvivio = "
        UPDATE tb_entrevistados_convivio
        SET
          total_sabedores = '$QtdNova'
        WHERE
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = '1'
      ";
      "</pre>";
      if( $ExeQrUpdateSabedoresConvivio = mysqli_query($connection, $QueryUpdateSabedoresConvivio) ){
        "<br><br>Quantidade de entrevistados sabedores do convívio do associado atualizado com sucesso!";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }