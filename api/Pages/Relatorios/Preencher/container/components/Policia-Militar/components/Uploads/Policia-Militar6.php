<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 Policia Militar" . 
      $_FILES['print_policia_militar_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaMilitar6 = "Policia_Militar6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar6;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img6']['tmp_name'], $target_file ) ){
        echo "<br>Foto 6 Policia Militar carregada";
  
        //BuscarCadastro da foto6 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar6);
        $RowQrBuscarFotoPoliciaMilitar6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar6);
  
        if( $RowQrBuscarFotoPoliciaMilitar6 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar6',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar6'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar6);
          if( $ExeQrCadastrarFotoPoliciaMilitar6 ){
            echo "<br>Foto 6 Policia Militar cadastrada, atualizar tb_policia_militar";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar6);
            while( $PoliciaMilitar6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar6) ){
              $IdFotoPoliciaMilitar6 = $PoliciaMilitar6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaMilitar6 = "
              UPDATE tb_policia_militar
              SET foto6_policia_militar = '$IdFotoPoliciaMilitar6'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaMilitar6 = mysqli_query($connection, $QueryUpdatePoliciaMilitar6);
  
            if( $ExeQrUpdatePoliciaMilitar6 ){
              echo "<br>Foto 6 Policia Militar atualizada";
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
      "<br>Foto 6 Policia Militar" . 
      $_FILES['print_policia_militar_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaMilitar6 = "Policia_Militar6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar6;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img6']['tmp_name'], $target_file ) ){
        "<br>Foto 6 Policia Militar carregada";
  
        //BuscarCadastro da foto6 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar6'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar6);
        $RowQrBuscarFotoPoliciaMilitar6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar6);
  
        if( $RowQrBuscarFotoPoliciaMilitar6 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar6',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar6'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar6);
          if( $ExeQrCadastrarFotoPoliciaMilitar6 ){
            "<br>Foto 6 Policia Militar cadastrada, atualizar tb_policia_militar";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar6'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar6);
            while( $PoliciaMilitar6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar6) ){
              $IdFotoPoliciaMilitar6 = $PoliciaMilitar6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaMilitar6 = "
              UPDATE tb_policia_militar
              SET foto6_policia_militar = '$IdFotoPoliciaMilitar6'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaMilitar6 = mysqli_query($connection, $QueryUpdatePoliciaMilitar6);
  
            if( $ExeQrUpdatePoliciaMilitar6 ){
              "<br>Foto 6 Policia Militar atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }