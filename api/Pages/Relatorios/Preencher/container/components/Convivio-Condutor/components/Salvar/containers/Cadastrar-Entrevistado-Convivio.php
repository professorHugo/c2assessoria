<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarEntrevistadosConvivio = "
      SELECT * FROM tb_entrevistados_convivio
      WHERE 
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = 2
    ";
    echo "</pre>";
    $ExeQrBuascarEntrevistadosConvivio = mysqli_query($connection, $QueryBuscarEntrevistadosConvivio);
    $RowQrBuascarEntrevistadosConvivio = mysqli_num_rows($ExeQrBuascarEntrevistadosConvivio);

    if( $RowQrBuascarEntrevistadosConvivio < 1 ){
      echo "<br>Ainda não tem registro de Sabedores, cadastrar";
      //Cadastrar o entrevistado convívio
      echo "<br><pre>" . 
      $QueryCadastrarEntrevistadoConvivio = "
        INSERT INTO tb_entrevistados_convivio(
          protocolo_sabedores,
          representante_sabedor,
          total_sabedores
        )VALUES(
          '$Protocolo',
          '2',
          '1'
        )
      ";
      echo "</pre>";
      if( $ExeQrCadastrarEntrevistadoConvivio = mysqli_query($connection, $QueryCadastrarEntrevistadoConvivio) ){
        echo "<br>Registro de convívio cadastrado com sucesso";
      }
    }else{
      echo "<br>O registro de convívio já existe, atualizar a quantidade de entrevistados";
      echo "<br><pre>" . 
      $QueryBuscarEntrevistadosConvivio = "
        SELECT * FROM tb_entrevistados_convivio
        WHERE 
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = 2
      ";
      echo "</pre>";
      $ExeQrBuascarEntrevistadosConvivio = mysqli_query($connection, $QueryBuscarEntrevistadosConvivio);
      while( $RegistrosConvivio = mysqli_fetch_assoc($ExeQrBuascarEntrevistadosConvivio) ){
        $QuantidadeRegistros = $RegistrosConvivio['total_sabedores'];
      }

      echo "<br>Nova Quantidade: " . $NovaQuantidade = $QuantidadeRegistros+1;

      echo "<br><pre>" . 
      $QueryUpdateEntrevistadosConvivio = "
        UPDATE tb_entrevistados_convivio
        SET
          total_sabedores = '$NovaQuantidade'
        WHERE 
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = '2'
      ";
      echo "</pre>";
      if( $ExeQrUpdateEntrevistadosConvivio = mysqli_query($connection, $QueryUpdateEntrevistadosConvivio) ){
        echo "<br>Registros totais de sabedores no convívio do associado foi atualizado com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarEntrevistadosConvivio = "
      SELECT * FROM tb_entrevistados_convivio
      WHERE 
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = 2
    ";
    "</pre>";
    $ExeQrBuascarEntrevistadosConvivio = mysqli_query($connection, $QueryBuscarEntrevistadosConvivio);
    $RowQrBuascarEntrevistadosConvivio = mysqli_num_rows($ExeQrBuascarEntrevistadosConvivio);

    if( $RowQrBuascarEntrevistadosConvivio < 1 ){
      "<br>Ainda não tem registro de Sabedores, cadastrar";
      //Cadastrar o entrevistado convívio
      "<br><pre>" . 
      $QueryCadastrarEntrevistadoConvivio = "
        INSERT INTO tb_entrevistados_convivio(
          protocolo_sabedores,
          representante_sabedor,
          total_sabedores
        )VALUES(
          '$Protocolo',
          '2',
          '1'
        )
      ";
      "</pre>";
      if( $ExeQrCadastrarEntrevistadoConvivio = mysqli_query($connection, $QueryCadastrarEntrevistadoConvivio) ){
        "<br>Registro de convívio cadastrado com sucesso";
      }
    }else{
      "<br>O registro de convívio já existe, atualizar a quantidade de entrevistados";
      "<br><pre>" . 
      $QueryBuscarEntrevistadosConvivio = "
        SELECT * FROM tb_entrevistados_convivio
        WHERE 
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = 2
      ";
      "</pre>";
      $ExeQrBuascarEntrevistadosConvivio = mysqli_query($connection, $QueryBuscarEntrevistadosConvivio);
      while( $RegistrosConvivio = mysqli_fetch_assoc($ExeQrBuascarEntrevistadosConvivio) ){
        $QuantidadeRegistros = $RegistrosConvivio['total_sabedores'];
      }

      "<br>Nova Quantidade: " . $NovaQuantidade = $QuantidadeRegistros+1;

      "<br><pre>" . 
      $QueryUpdateEntrevistadosConvivio = "
        UPDATE tb_entrevistados_convivio
        SET
          total_sabedores = '$NovaQuantidade'
        WHERE 
          protocolo_sabedores = '$Protocolo' &&
          representante_sabedor = '2'
      ";
      "</pre>";
      if( $ExeQrUpdateEntrevistadosConvivio = mysqli_query($connection, $QueryUpdateEntrevistadosConvivio) ){
        "<br>Registros totais de sabedores no convívio do associado foi atualizado com sucesso";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }