<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 Policia Civil" . 
      $_FILES['print_policia_civil_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaCivil1 = "Policia_Civil1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 Policia Civil carregada";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil1 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil1);
        $RowQrBuscarFotoPoliciaCivil1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil1);
  
        if( $RowQrBuscarFotoPoliciaCivil1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil1',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil1 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil1);
          if( $ExeQrCadastrarFotoPoliciaCivil1 ){
            echo "<br>Foto 1 Policia Civil cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaCivil1 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil1);
            while( $PoliciaCivil1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil1) ){
              $IdFotoPoliciaCivil1 = $PoliciaCivil1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaCivil1 = "
              UPDATE tb_policia_civil
              SET foto1_policia_civil = '$IdFotoPoliciaCivil1'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaCivil1 = mysqli_query($connection, $QueryUpdatePoliciaCivil1);
  
            if( $ExeQrUpdatePoliciaCivil1 ){
              echo "<br>Foto 1 Policia Civil atualizada";
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
      "<br>Foto 1 Policia Civil" . 
      $_FILES['print_policia_civil_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaCivil1 = "Policia_Civil1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 Policia Civil carregada";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil1'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil1 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil1);
        $RowQrBuscarFotoPoliciaCivil1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil1);
  
        if( $RowQrBuscarFotoPoliciaCivil1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil1',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil1 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil1);
          if( $ExeQrCadastrarFotoPoliciaCivil1 ){
            "<br>Foto 1 Policia Civil cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil1'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaCivil1 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil1);
            while( $PoliciaCivil1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil1) ){
              $IdFotoPoliciaCivil1 = $PoliciaCivil1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaCivil1 = "
              UPDATE tb_policia_civil
              SET foto1_policia_civil = '$IdFotoPoliciaCivil1'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaCivil1 = mysqli_query($connection, $QueryUpdatePoliciaCivil1);
  
            if( $ExeQrUpdatePoliciaCivil1 ){
              "<br>Foto 1 Policia Civil atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }