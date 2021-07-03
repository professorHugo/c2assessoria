<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 Policia Civil" . 
      $_FILES['print_policia_civil_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaCivil6 = "Policia_Civil6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil6;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img6']['tmp_name'], $target_file ) ){
        echo "<br>Foto 6 Policia Civil carregada";
  
        //BuscarCadastro da foto6 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil6 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil6);
        $RowQrBuscarFotoPoliciaCivil6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil6);
  
        if( $RowQrBuscarFotoPoliciaCivil6 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil6',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil6'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil6 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil6);
          if( $ExeQrCadastrarFotoPoliciaCivil6 ){
            echo "<br>Foto 6 Policia Civil cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaCivil6 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil6);
            while( $PoliciaCivil6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil6) ){
              $IdFotoPoliciaCivil6 = $PoliciaCivil6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaCivil6 = "
              UPDATE tb_policia_civil
              SET foto6_policia_civil = '$IdFotoPoliciaCivil6'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaCivil6 = mysqli_query($connection, $QueryUpdatePoliciaCivil6);
  
            if( $ExeQrUpdatePoliciaCivil6 ){
              echo "<br>Foto 6 Policia Civil atualizada";
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
      "<br>Foto 6 Policia Civil" . 
      $_FILES['print_policia_civil_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaCivil6 = "Policia_Civil6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil6;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img6']['tmp_name'], $target_file ) ){
        "<br>Foto 6 Policia Civil carregada";
  
        //BuscarCadastro da foto6 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil6'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil6 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil6);
        $RowQrBuscarFotoPoliciaCivil6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil6);
  
        if( $RowQrBuscarFotoPoliciaCivil6 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil6',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil6'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil6 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil6);
          if( $ExeQrCadastrarFotoPoliciaCivil6 ){
            "<br>Foto 6 Policia Civil cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil6'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaCivil6 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil6);
            while( $PoliciaCivil6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil6) ){
              $IdFotoPoliciaCivil6 = $PoliciaCivil6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaCivil6 = "
              UPDATE tb_policia_civil
              SET foto6_policia_civil = '$IdFotoPoliciaCivil6'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaCivil6 = mysqli_query($connection, $QueryUpdatePoliciaCivil6);
  
            if( $ExeQrUpdatePoliciaCivil6 ){
              "<br>Foto 6 Policia Civil atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }