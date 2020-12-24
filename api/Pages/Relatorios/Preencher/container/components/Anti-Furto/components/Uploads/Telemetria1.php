<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Telemetria 1: " . $Telemetria1 = $_FILES['print_foto_telemetria_rastreador1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_telemetria_rastreador1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Telemetria1 = "Comprovante_Telemetria1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Telemetria1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_telemetria_rastreador1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da Telemetria carregada";
  
        //BuscarCadastro da foto 1 da Telemetria
        echo "<br><pre>" . 
        $QueryBuscarFotoTelemetria1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'telemetria1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Telemetria1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoTelemetria1 = mysqli_query($connection, $QueryBuscarFotoTelemetria1);
        $RowQrBuscarFotoTelemetria1 = mysqli_num_rows($ExeQrBuscarFotoTelemetria1);
  
        if( $RowQrBuscarFotoTelemetria1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoTelemetria1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'telemetria1',
              '$Protocolo',
              '$CPFAssociado',
              '$Telemetria1'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoTelemetria1 = mysqli_query($connection, $QueryCadastrarFotoTelemetria1);
          if( $ExeQrCadastrarFotoTelemetria1 ){
            echo "<br>Foto 1 da Telemetria cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 1 da Telemetria
            echo "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'telemetria1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Telemetria1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoTelemetria1 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoTelemetria1 = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria1) ){
              $IdTelemetria1 = $FotoTelemetria1['id_foto'];
            }
  
            //Update da Telemetria
            echo "<br><pre>" . 
            $QueryUpdateTelemetria1 = "
              UPDATE tb_sistemas_anti_furto
              SET
                telemetria1 = '$IdTelemetria1'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateTelemetria1 = mysqli_query($connection, $QueryUpdateTelemetria1);
            if( $ExeQrUpdateTelemetria1 ){
              echo "<br>Update realizado na foto 1 da Telemetria";
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
      "<br>Telemetria 1: " . $Telemetria1 = $_FILES['print_foto_telemetria_rastreador1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_telemetria_rastreador1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Telemetria1 = "Comprovante_Telemetria1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Telemetria1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_telemetria_rastreador1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da Telemetria carregada";
  
        //BuscarCadastro da foto 1 da Telemetria
        "<br><pre>" . 
        $QueryBuscarFotoTelemetria1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'telemetria1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Telemetria1'
        ";
        "</pre>";
        $ExeQrBuscarFotoTelemetria1 = mysqli_query($connection, $QueryBuscarFotoTelemetria1);
        $RowQrBuscarFotoTelemetria1 = mysqli_num_rows($ExeQrBuscarFotoTelemetria1);
  
        if( $RowQrBuscarFotoTelemetria1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoTelemetria1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'telemetria1',
              '$Protocolo',
              '$CPFAssociado',
              '$Telemetria1'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoTelemetria1 = mysqli_query($connection, $QueryCadastrarFotoTelemetria1);
          if( $ExeQrCadastrarFotoTelemetria1 ){
            "<br>Foto 1 da Telemetria cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 1 da Telemetria
            "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'telemetria1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Telemetria1'
            ";
            "</pre>";
            $ExeQrBuscarFotoTelemetria1 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoTelemetria1 = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria1) ){
              $IdTelemetria1 = $FotoTelemetria1['id_foto'];
            }
  
            //Update da Telemetria
            "<br><pre>" . 
            $QueryUpdateTelemetria1 = "
              UPDATE tb_sistemas_anti_furto
              SET
                telemetria1 = '$IdTelemetria1'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateTelemetria1 = mysqli_query($connection, $QueryUpdateTelemetria1);
            if( $ExeQrUpdateTelemetria1 ){
              "<br>Update realizado na foto 1 da Telemetria";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }