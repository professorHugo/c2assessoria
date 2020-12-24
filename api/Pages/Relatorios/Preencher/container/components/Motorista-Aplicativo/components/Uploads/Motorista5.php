<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 5 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img5']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $MotoristaApp5 = "Motorista_App5".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp5;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img5']['tmp_name'], $target_file ) ){
        echo "<br>Foto 5 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto5 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMotoristaApp5 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp5);
        $RowQrBuscarFotoMotoristaApp5 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp5);
  
        if( $RowQrBuscarFotoMotoristaApp5 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app5',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp5'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMotoristaApp5 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp5);
          if( $ExeQrCadastrarFotoMotoristaApp5 ){
            echo "<br>Foto 5 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 5 comprovante App
            echo "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp5'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMotoristaApp5 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp5);
  
            while( $Foto5 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp5) ){
              $FotoMotorista5 = $Foto5['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMotoristaApp5 = "
              UPDATE tb_motorista_aplicativo
              SET foto5_motorista = '$FotoMotorista5'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMotoristaApp5 = mysqli_query($connection, $QueryUpdateMotoristaApp5);
  
            if( $ExeQrUpdateMotoristaApp5 ){
              echo "<br>Foto 5 comprovante App do motorista aplicativo atualizado";
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
      "<br>Foto 5 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img5']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $MotoristaApp5 = "Motorista_App5".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp5;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img5']['tmp_name'], $target_file ) ){
        "<br>Foto 5 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto5 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp5'
        ";
        "</pre>";
        $ExeQrBuscarFotoMotoristaApp5 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp5);
        $RowQrBuscarFotoMotoristaApp5 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp5);
  
        if( $RowQrBuscarFotoMotoristaApp5 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app5',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp5'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMotoristaApp5 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp5);
          if( $ExeQrCadastrarFotoMotoristaApp5 ){
            "<br>Foto 5 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 5 comprovante App
            "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp5'
            ";
            "</pre>";
            $ExeQrBuscarFotoMotoristaApp5 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp5);
  
            while( $Foto5 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp5) ){
              $FotoMotorista5 = $Foto5['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMotoristaApp5 = "
              UPDATE tb_motorista_aplicativo
              SET foto5_motorista = '$FotoMotorista5'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMotoristaApp5 = mysqli_query($connection, $QueryUpdateMotoristaApp5);
  
            if( $ExeQrUpdateMotoristaApp5 ){
              "<br>Foto 5 comprovante App do motorista aplicativo atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }