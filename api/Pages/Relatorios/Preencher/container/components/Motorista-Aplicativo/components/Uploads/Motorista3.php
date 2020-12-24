<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $MotoristaApp3 = "Motorista_App3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto3 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMotoristaApp3 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp3);
        $RowQrBuscarFotoMotoristaApp3 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp3);
  
        if( $RowQrBuscarFotoMotoristaApp3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app3',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMotoristaApp3 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp3);
          if( $ExeQrCadastrarFotoMotoristaApp3 ){
            echo "<br>Foto 3 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 3 comprovante App
            echo "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMotoristaApp3 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp3);
  
            while( $Foto3 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp3) ){
              $FotoMotorista3 = $Foto3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMotoristaApp3 = "
              UPDATE tb_motorista_aplicativo
              SET foto3_motorista = '$FotoMotorista3'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMotoristaApp3 = mysqli_query($connection, $QueryUpdateMotoristaApp3);
  
            if( $ExeQrUpdateMotoristaApp3 ){
              echo "<br>Foto 3 comprovante App do motorista aplicativo atualizado";
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
      "<br>Foto 3 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $MotoristaApp3 = "Motorista_App3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto3 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp3'
        ";
        "</pre>";
        $ExeQrBuscarFotoMotoristaApp3 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp3);
        $RowQrBuscarFotoMotoristaApp3 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp3);
  
        if( $RowQrBuscarFotoMotoristaApp3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app3',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMotoristaApp3 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp3);
          if( $ExeQrCadastrarFotoMotoristaApp3 ){
            "<br>Foto 3 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 3 comprovante App
            "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp3'
            ";
            "</pre>";
            $ExeQrBuscarFotoMotoristaApp3 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp3);
  
            while( $Foto3 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp3) ){
              $FotoMotorista3 = $Foto3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMotoristaApp3 = "
              UPDATE tb_motorista_aplicativo
              SET foto3_motorista = '$FotoMotorista3'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMotoristaApp3 = mysqli_query($connection, $QueryUpdateMotoristaApp3);
  
            if( $ExeQrUpdateMotoristaApp3 ){
              "<br>Foto 3 comprovante App do motorista aplicativo atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }