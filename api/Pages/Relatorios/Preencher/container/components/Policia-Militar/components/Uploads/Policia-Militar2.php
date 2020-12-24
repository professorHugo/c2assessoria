<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 Policia Militar" . 
      $_FILES['print_policia_militar_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaMilitar2 = "Policia_Militar2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 Policia Militar carregada";
  
        //BuscarCadastro da foto2 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar2);
        $RowQrBuscarFotoPoliciaMilitar2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar2);
  
        if( $RowQrBuscarFotoPoliciaMilitar2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar2',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar2);
          if( $ExeQrCadastrarFotoPoliciaMilitar2 ){
            echo "<br>Foto 2 Policia Militar cadastrada, atualizar tb_policia_militar";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar2);
            while( $PoliciaMilitar2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar2) ){
              $IdFotoPoliciaMilitar2 = $PoliciaMilitar2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaMilitar2 = "
              UPDATE tb_policia_militar
              SET foto2_policia_militar = '$IdFotoPoliciaMilitar2'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaMilitar2 = mysqli_query($connection, $QueryUpdatePoliciaMilitar2);
  
            if( $ExeQrUpdatePoliciaMilitar2 ){
              echo "<br>Foto 2 Policia Militar atualizada";
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
      "<br>Foto 2 Policia Militar" . 
      $_FILES['print_policia_militar_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaMilitar2 = "Policia_Militar2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 Policia Militar carregada";
  
        //BuscarCadastro da foto2 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar2'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar2);
        $RowQrBuscarFotoPoliciaMilitar2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar2);
  
        if( $RowQrBuscarFotoPoliciaMilitar2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar2',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar2);
          if( $ExeQrCadastrarFotoPoliciaMilitar2 ){
            "<br>Foto 2 Policia Militar cadastrada, atualizar tb_policia_militar";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar2'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar2);
            while( $PoliciaMilitar2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar2) ){
              $IdFotoPoliciaMilitar2 = $PoliciaMilitar2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaMilitar2 = "
              UPDATE tb_policia_militar
              SET foto2_policia_militar = '$IdFotoPoliciaMilitar2'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaMilitar2 = mysqli_query($connection, $QueryUpdatePoliciaMilitar2);
  
            if( $ExeQrUpdatePoliciaMilitar2 ){
              "<br>Foto 2 Policia Militar atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }