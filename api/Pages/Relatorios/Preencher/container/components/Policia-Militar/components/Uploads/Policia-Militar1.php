<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 Policia Militar" . 
      $_FILES['print_policia_militar_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaMilitar1 = "Policia_Militar1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 Policia Militar carregada";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar1);
        $RowQrBuscarFotoPoliciaMilitar1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar1);
  
        if( $RowQrBuscarFotoPoliciaMilitar1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar1',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar1);
          if( $ExeQrCadastrarFotoPoliciaMilitar1 ){
            echo "<br>Foto 1 Policia Militar cadastrada, atualizar tb_policia_militar";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar1);
            while( $PoliciaMilitar1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar1) ){
              $IdFotoPoliciaMilitar1 = $PoliciaMilitar1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaMilitar1 = "
              UPDATE tb_policia_militar
              SET foto1_policia_militar = '$IdFotoPoliciaMilitar1'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaMilitar1 = mysqli_query($connection, $QueryUpdatePoliciaMilitar1);
  
            if( $ExeQrUpdatePoliciaMilitar1 ){
              echo "<br>Foto 1 Policia Militar atualizada";
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
      "<br>Foto 1 Policia Militar" . 
      $_FILES['print_policia_militar_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaMilitar1 = "Policia_Militar1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 Policia Militar carregada";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar1'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar1);
        $RowQrBuscarFotoPoliciaMilitar1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar1);
  
        if( $RowQrBuscarFotoPoliciaMilitar1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar1',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar1);
          if( $ExeQrCadastrarFotoPoliciaMilitar1 ){
            "<br>Foto 1 Policia Militar cadastrada, atualizar tb_policia_militar";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar1'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar1);
            while( $PoliciaMilitar1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar1) ){
              $IdFotoPoliciaMilitar1 = $PoliciaMilitar1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaMilitar1 = "
              UPDATE tb_policia_militar
              SET foto1_policia_militar = '$IdFotoPoliciaMilitar1'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaMilitar1 = mysqli_query($connection, $QueryUpdatePoliciaMilitar1);
  
            if( $ExeQrUpdatePoliciaMilitar1 ){
              "<br>Foto 1 Policia Militar atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }

  }