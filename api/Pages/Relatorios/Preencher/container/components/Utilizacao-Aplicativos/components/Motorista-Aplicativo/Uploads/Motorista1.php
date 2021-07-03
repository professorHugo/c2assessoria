<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $MotoristaApp1 = "Motorista_App1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMotoristaApp1 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp1);
        $RowQrBuscarFotoMotoristaApp1 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp1);
  
        if( $RowQrBuscarFotoMotoristaApp1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app1',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMotoristaApp1 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp1);
          if( $ExeQrCadastrarFotoMotoristaApp1 ){
            echo "<br>Foto 1 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 1 comprovante App
            echo "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMotoristaApp1 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp1);
  
            while( $Foto1 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp1) ){
              $FotoMotorista1 = $Foto1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMotoristaApp1 = "
              UPDATE tb_motorista_aplicativo
              SET foto1_motorista = '$FotoMotorista1'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMotoristaApp1 = mysqli_query($connection, $QueryUpdateMotoristaApp1);
  
            if( $ExeQrUpdateMotoristaApp1 ){
              echo "<br>Foto 1 comprovante App do motorista aplicativo atualizado";
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
      "<br>Foto 1 comprovante App" . 
      $_FILES['print_comprovante_motorista_app_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_comprovante_motorista_app_img1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $MotoristaApp1 = "Motorista_App1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $MotoristaApp1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_comprovante_motorista_app_img1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 comprovante App carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoMotoristaApp1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'motorista_app1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$MotoristaApp1'
        ";
        "</pre>";
        $ExeQrBuscarFotoMotoristaApp1 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp1);
        $RowQrBuscarFotoMotoristaApp1 = mysqli_num_rows($ExeQrBuscarFotoMotoristaApp1);
  
        if( $RowQrBuscarFotoMotoristaApp1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMotoristaApp1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'motorista_app1',
              '$Protocolo',
              '$CPFAssociado',
              '$MotoristaApp1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMotoristaApp1 = mysqli_query($connection, $QueryCadastrarFotoMotoristaApp1);
          if( $ExeQrCadastrarFotoMotoristaApp1 ){
            "<br>Foto 1 comprovante App cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 1 comprovante App
            "<br><pre>" . 
            $QueryBuscarFotoMotoristaApp1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'motorista_app1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$MotoristaApp1'
            ";
            "</pre>";
            $ExeQrBuscarFotoMotoristaApp1 = mysqli_query($connection, $QueryBuscarFotoMotoristaApp1);
  
            while( $Foto1 = mysqli_fetch_assoc($ExeQrBuscarFotoMotoristaApp1) ){
              $FotoMotorista1 = $Foto1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMotoristaApp1 = "
              UPDATE tb_motorista_aplicativo
              SET foto1_motorista = '$FotoMotorista1'
              WHERE protocolo_motorista_aplicativo = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMotoristaApp1 = mysqli_query($connection, $QueryUpdateMotoristaApp1);
  
            if( $ExeQrUpdateMotoristaApp1 ){
              "<br>Foto 1 comprovante App do motorista aplicativo atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }