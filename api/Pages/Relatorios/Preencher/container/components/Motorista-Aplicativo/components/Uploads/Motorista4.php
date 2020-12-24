<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $MotoristaApp4 = "Motorista_App4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp4;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img4']['tmp_name'], $target_file ) ){
        echo "<br>Foto 4 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto4 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMotoristaApp4 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp4);
        $RowQrBuscarFotoMotoristaApp4 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp4);
  
        if( $RowQrBuscarFotoMotoristaApp4 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app4',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp4'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMotoristaApp4 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp4);
          if( $ExeQrCadastrarFotoMotoristaApp4 ){
            echo "<br>Foto 4 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 4 comprovante App
            echo "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMotoristaApp4 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp4);
  
            while( $Foto4 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp4) ){
              $FotoMotorista4 = $Foto4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMotoristaApp4 = "
              UPDATE tb_motorista_aplicativo
              SET foto4_motorista = '$FotoMotorista4'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMotoristaApp4 = mysqli_query($connection, $QueryUpdateMotoristaApp4);
  
            if( $ExeQrUpdateMotoristaApp4 ){
              echo "<br>Foto 4 comprovante App do motorista aplicativo atualizado";
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
      "<br>Foto 4 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $MotoristaApp4 = "Motorista_App4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp4;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img4']['tmp_name'], $target_file ) ){
        "<br>Foto 4 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto4 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp4'
        ";
        "</pre>";
        $ExeQrBuscarFotoMotoristaApp4 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp4);
        $RowQrBuscarFotoMotoristaApp4 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp4);
  
        if( $RowQrBuscarFotoMotoristaApp4 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app4',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp4'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMotoristaApp4 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp4);
          if( $ExeQrCadastrarFotoMotoristaApp4 ){
            "<br>Foto 4 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 4 comprovante App
            "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp4'
            ";
            "</pre>";
            $ExeQrBuscarFotoMotoristaApp4 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp4);
  
            while( $Foto4 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp4) ){
              $FotoMotorista4 = $Foto4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMotoristaApp4 = "
              UPDATE tb_motorista_aplicativo
              SET foto4_motorista = '$FotoMotorista4'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMotoristaApp4 = mysqli_query($connection, $QueryUpdateMotoristaApp4);
  
            if( $ExeQrUpdateMotoristaApp4 ){
              "<br>Foto 4 comprovante App do motorista aplicativo atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }