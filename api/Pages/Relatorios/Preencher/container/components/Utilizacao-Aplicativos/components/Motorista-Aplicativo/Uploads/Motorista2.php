<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $MotoristaApp2 = "Motorista_App2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto2 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMotoristaApp2 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp2);
        $RowQrBuscarFotoMotoristaApp2 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp2);
  
        if( $RowQrBuscarFotoMotoristaApp2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app2',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMotoristaApp2 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp2);
          if( $ExeQrCadastrarFotoMotoristaApp2 ){
            echo "<br>Foto 2 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 2 comprovante App
            echo "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMotoristaApp2 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp2);
  
            while( $Foto2 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp2) ){
              $FotoMotorista2 = $Foto2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMotoristaApp2 = "
              UPDATE tb_motorista_aplicativo
              SET foto2_motorista = '$FotoMotorista2'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMotoristaApp2 = mysqli_query($connection, $QueryUpdateMotoristaApp2);
  
            if( $ExeQrUpdateMotoristaApp2 ){
              echo "<br>Foto 2 comprovante App do motorista aplicativo atualizado";
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
      "<br>Foto 2 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $MotoristaApp2 = "Motorista_App2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto2 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp2'
        ";
        "</pre>";
        $ExeQrBuscarFotoMotoristaApp2 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp2);
        $RowQrBuscarFotoMotoristaApp2 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp2);
  
        if( $RowQrBuscarFotoMotoristaApp2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app2',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMotoristaApp2 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp2);
          if( $ExeQrCadastrarFotoMotoristaApp2 ){
            "<br>Foto 2 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 2 comprovante App
            "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp2'
            ";
            "</pre>";
            $ExeQrBuscarFotoMotoristaApp2 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp2);
  
            while( $Foto2 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp2) ){
              $FotoMotorista2 = $Foto2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMotoristaApp2 = "
              UPDATE tb_motorista_aplicativo
              SET foto2_motorista = '$FotoMotorista2'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMotoristaApp2 = mysqli_query($connection, $QueryUpdateMotoristaApp2);
  
            if( $ExeQrUpdateMotoristaApp2 ){
              "<br>Foto 2 comprovante App do motorista aplicativo atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }