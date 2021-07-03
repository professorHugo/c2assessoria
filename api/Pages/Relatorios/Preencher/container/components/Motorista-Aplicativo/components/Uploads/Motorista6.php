<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $MotoristaApp6 = "Motorista_App6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp6;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img6']['tmp_name'], $target_file ) ){
        echo "<br>Foto 6 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto6 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMotoristaApp6 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp6);
        $RowQrBuscarFotoMotoristaApp6 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp6);
  
        if( $RowQrBuscarFotoMotoristaApp6 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app6',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp6'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMotoristaApp6 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp6);
          if( $ExeQrCadastrarFotoMotoristaApp6 ){
            echo "<br>Foto 6 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 6 comprovante App
            echo "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMotoristaApp6 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp6);
  
            while( $Foto6 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp6) ){
              $FotoMotorista6 = $Foto6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMotoristaApp6 = "
              UPDATE tb_motorista_aplicativo
              SET foto6_motorista = '$FotoMotorista6'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMotoristaApp6 = mysqli_query($connection, $QueryUpdateMotoristaApp6);
  
            if( $ExeQrUpdateMotoristaApp6 ){
              echo "<br>Foto 6 comprovante App do motorista aplicativo atualizado";
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
      "<br>Foto 6 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $MotoristaApp6 = "Motorista_App6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp6;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img6']['tmp_name'], $target_file ) ){
        "<br>Foto 6 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto6 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp6'
        ";
        "</pre>";
        $ExeQrBuscarFotoMotoristaApp6 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp6);
        $RowQrBuscarFotoMotoristaApp6 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp6);
  
        if( $RowQrBuscarFotoMotoristaApp6 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app6',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp6'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMotoristaApp6 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp6);
          if( $ExeQrCadastrarFotoMotoristaApp6 ){
            "<br>Foto 6 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 6 comprovante App
            "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp6'
            ";
            "</pre>";
            $ExeQrBuscarFotoMotoristaApp6 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp6);
  
            while( $Foto6 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp6) ){
              $FotoMotorista6 = $Foto6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMotoristaApp6 = "
              UPDATE tb_motorista_aplicativo
              SET foto6_motorista = '$FotoMotorista6'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMotoristaApp6 = mysqli_query($connection, $QueryUpdateMotoristaApp6);
  
            if( $ExeQrUpdateMotoristaApp6 ){
              "<br>Foto 6 comprovante App do motorista aplicativo atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }