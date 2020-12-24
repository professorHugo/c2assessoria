<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Telemetria 3: " . $Telemetria3 = $_FILES['print_foto_telemetria_rastreador3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_telemetria_rastreador3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Telemetria3 = "Comprovante_Telemetria3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Telemetria3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_telemetria_rastreador3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 da Telemetria carregada";
  
        //BuscarCadastro da foto 3 da Telemetria
        echo "<br><pre>" . 
        $QueryBuscarFotoTelemetria3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'telemetria3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Telemetria3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoTelemetria3 = mysqli_query($connection, $QueryBuscarFotoTelemetria3);
        $RowQrBuscarFotoTelemetria3 = mysqli_num_rows($ExeQrBuscarFotoTelemetria3);
  
        if( $RowQrBuscarFotoTelemetria3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoTelemetria3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'telemetria3',
              '$Protocolo',
              '$CPFAssociado',
              '$Telemetria3'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoTelemetria3 = mysqli_query($connection, $QueryCadastrarFotoTelemetria3);
          if( $ExeQrCadastrarFotoTelemetria3 ){
            echo "<br>Foto 3 da Telemetria cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 3 da Telemetria
            echo "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'telemetria3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Telemetria3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoTelemetria3 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoTelemetria3 = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria3) ){
              $IdTelemetria3 = $FotoTelemetria3['id_foto'];
            }
  
            //Update da Telemetria
            echo "<br><pre>" . 
            $QueryUpdateTelemetria3 = "
              UPDATE tb_sistemas_anti_furto
              SET
                telemetria3 = '$IdTelemetria3'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateTelemetria3 = mysqli_query($connection, $QueryUpdateTelemetria3);
            if( $ExeQrUpdateTelemetria3 ){
              echo "<br>Update realizado na foto 3 da Telemetria";
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
      "<br>Telemetria 3: " . $Telemetria3 = $_FILES['print_foto_telemetria_rastreador3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_telemetria_rastreador3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Telemetria3 = "Comprovante_Telemetria3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Telemetria3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_telemetria_rastreador3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 da Telemetria carregada";
  
        //BuscarCadastro da foto 3 da Telemetria
        "<br><pre>" . 
        $QueryBuscarFotoTelemetria3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'telemetria3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Telemetria3'
        ";
        "</pre>";
        $ExeQrBuscarFotoTelemetria3 = mysqli_query($connection, $QueryBuscarFotoTelemetria3);
        $RowQrBuscarFotoTelemetria3 = mysqli_num_rows($ExeQrBuscarFotoTelemetria3);
  
        if( $RowQrBuscarFotoTelemetria3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoTelemetria3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'telemetria3',
              '$Protocolo',
              '$CPFAssociado',
              '$Telemetria3'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoTelemetria3 = mysqli_query($connection, $QueryCadastrarFotoTelemetria3);
          if( $ExeQrCadastrarFotoTelemetria3 ){
            "<br>Foto 3 da Telemetria cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 3 da Telemetria
            "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'telemetria3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Telemetria3'
            ";
            "</pre>";
            $ExeQrBuscarFotoTelemetria3 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoTelemetria3 = mysqli_fetch_assoc($ExeQrBuscarFotoTelemetria3) ){
              $IdTelemetria3 = $FotoTelemetria3['id_foto'];
            }
  
            //Update da Telemetria
            "<br><pre>" . 
            $QueryUpdateTelemetria3 = "
              UPDATE tb_sistemas_anti_furto
              SET
                telemetria3 = '$IdTelemetria3'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateTelemetria3 = mysqli_query($connection, $QueryUpdateTelemetria3);
            if( $ExeQrUpdateTelemetria3 ){
              "<br>Update realizado na foto 3 da Telemetria";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }