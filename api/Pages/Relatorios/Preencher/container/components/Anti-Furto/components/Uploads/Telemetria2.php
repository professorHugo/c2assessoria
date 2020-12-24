<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Telemetria 2: " . $Telemetria2 = $_FILES['print_foto_telemetria_rastreador2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_telemetria_rastreador2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Telemetria2 = "Comprovante_Telemetria2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Telemetria2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_telemetria_rastreador2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 da Telemetria carregada";
  
        //BuscarCadastro da foto 2 da Telemetria
        echo "<br><pre>" . 
        $QueryBuscarFotoTelemetria2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'telemetria2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Telemetria2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoTelemetria2 = mysqli_query($connection, $QueryBuscarFotoTelemetria2);
        $RowQrBuscarFotoTelemetria2 = mysqli_num_rows($ExeQrBuscarFotoTelemetria2);
  
        if( $RowQrBuscarFotoTelemetria2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoTelemetria2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'telemetria2',
              '$Protocolo',
              '$CPFAssociado',
              '$Telemetria2'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoTelemetria2 = mysqli_query($connection, $QueryCadastrarFotoTelemetria2);
          if( $ExeQrCadastrarFotoTelemetria2 ){
            echo "<br>Foto 2 da Telemetria cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 2 da Telemetria
            echo "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'telemetria2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Telemetria2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoTelemetria2 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoTelemetria2 = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria2) ){
              $IdTelemetria2 = $FotoTelemetria2['id_foto'];
            }
  
            //Update da Telemetria
            echo "<br><pre>" . 
            $QueryUpdateTelemetria2 = "
              UPDATE tb_sistemas_anti_furto
              SET
                telemetria2 = '$IdTelemetria2'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateTelemetria2 = mysqli_query($connection, $QueryUpdateTelemetria2);
            if( $ExeQrUpdateTelemetria2 ){
              echo "<br>Update realizado na foto 2 da Telemetria";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Telemetria 2: " . $Telemetria2 = $_FILES['print_foto_telemetria_rastreador2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_telemetria_rastreador2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Telemetria2 = "Comprovante_Telemetria2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Telemetria2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_telemetria_rastreador2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 da Telemetria carregada";
  
        //BuscarCadastro da foto 2 da Telemetria
        "<br><pre>" . 
        $QueryBuscarFotoTelemetria2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'telemetria2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Telemetria2'
        ";
        "</pre>";
        $ExeQrBuscarFotoTelemetria2 = mysqli_query($connection, $QueryBuscarFotoTelemetria2);
        $RowQrBuscarFotoTelemetria2 = mysqli_num_rows($ExeQrBuscarFotoTelemetria2);
  
        if( $RowQrBuscarFotoTelemetria2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoTelemetria2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'telemetria2',
              '$Protocolo',
              '$CPFAssociado',
              '$Telemetria2'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoTelemetria2 = mysqli_query($connection, $QueryCadastrarFotoTelemetria2);
          if( $ExeQrCadastrarFotoTelemetria2 ){
            "<br>Foto 2 da Telemetria cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 2 da Telemetria
            "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'telemetria2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Telemetria2'
            ";
            "</pre>";
            $ExeQrBuscarFotoTelemetria2 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoTelemetria2 = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria2) ){
              $IdTelemetria2 = $FotoTelemetria2['id_foto'];
            }
  
            //Update da Telemetria
            "<br><pre>" . 
            $QueryUpdateTelemetria2 = "
              UPDATE tb_sistemas_anti_furto
              SET
                telemetria2 = '$IdTelemetria2'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateTelemetria2 = mysqli_query($connection, $QueryUpdateTelemetria2);
            if( $ExeQrUpdateTelemetria2 ){
              "<br>Update realizado na foto 2 da Telemetria";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }