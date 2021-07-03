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
    }
  }