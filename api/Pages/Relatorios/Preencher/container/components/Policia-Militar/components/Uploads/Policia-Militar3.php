<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 Policia Militar" . 
      $_FILES['print_policia_militar_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaMilitar3 = "Policia_Militar3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 Policia Militar carregada";
  
        //BuscarCadastro da foto3 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar3);
        $RowQrBuscarFotoPoliciaMilitar3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar3);
  
        if( $RowQrBuscarFotoPoliciaMilitar3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar3',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar3);
          if( $ExeQrCadastrarFotoPoliciaMilitar3 ){
            echo "<br>Foto 3 Policia Militar cadastrada, atualizar tb_policia_militar";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar3);
            while( $PoliciaMilitar3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar3) ){
              $IdFotoPoliciaMilitar3 = $PoliciaMilitar3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaMilitar3 = "
              UPDATE tb_policia_militar
              SET foto3_policia_militar = '$IdFotoPoliciaMilitar3'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaMilitar3 = mysqli_query($connection, $QueryUpdatePoliciaMilitar3);
  
            if( $ExeQrUpdatePoliciaMilitar3 ){
              echo "<br>Foto 3 Policia Militar atualizada";
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
      "<br>Foto 3 Policia Militar" . 
      $_FILES['print_policia_militar_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaMilitar3 = "Policia_Militar3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 Policia Militar carregada";
  
        //BuscarCadastro da foto3 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar3'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar3);
        $RowQrBuscarFotoPoliciaMilitar3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar3);
  
        if( $RowQrBuscarFotoPoliciaMilitar3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar3',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar3);
          if( $ExeQrCadastrarFotoPoliciaMilitar3 ){
            "<br>Foto 3 Policia Militar cadastrada, atualizar tb_policia_militar";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar3'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar3);
            while( $PoliciaMilitar3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar3) ){
              $IdFotoPoliciaMilitar3 = $PoliciaMilitar3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaMilitar3 = "
              UPDATE tb_policia_militar
              SET foto3_policia_militar = '$IdFotoPoliciaMilitar3'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaMilitar3 = mysqli_query($connection, $QueryUpdatePoliciaMilitar3);
  
            if( $ExeQrUpdatePoliciaMilitar3 ){
              "<br>Foto 3 Policia Militar atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }