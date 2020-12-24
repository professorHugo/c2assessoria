<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 Policia Militar" . 
      $_FILES['print_policia_militar_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaMilitar4 = "Policia_Militar4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar4;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img4']['tmp_name'], $target_file ) ){
        echo "<br>Foto 4 Policia Militar carregada";
  
        //BuscarCadastro da foto4 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar4);
        $RowQrBuscarFotoPoliciaMilitar4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar4);
  
        if( $RowQrBuscarFotoPoliciaMilitar4 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar4',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar4'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar4);
          if( $ExeQrCadastrarFotoPoliciaMilitar4 ){
            echo "<br>Foto 4 Policia Militar cadastrada, atualizar tb_policia_militar";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar4);
            while( $PoliciaMilitar4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar4) ){
              $IdFotoPoliciaMilitar4 = $PoliciaMilitar4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaMilitar4 = "
              UPDATE tb_policia_militar
              SET foto4_policia_militar = '$IdFotoPoliciaMilitar4'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaMilitar4 = mysqli_query($connection, $QueryUpdatePoliciaMilitar4);
  
            if( $ExeQrUpdatePoliciaMilitar4 ){
              echo "<br>Foto 4 Policia Militar atualizada";
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
      "<br>Foto 4 Policia Militar" . 
      $_FILES['print_policia_militar_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaMilitar4 = "Policia_Militar4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar4;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img4']['tmp_name'], $target_file ) ){
        "<br>Foto 4 Policia Militar carregada";
  
        //BuscarCadastro da foto4 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar4'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar4);
        $RowQrBuscarFotoPoliciaMilitar4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar4);
  
        if( $RowQrBuscarFotoPoliciaMilitar4 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar4',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar4'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar4);
          if( $ExeQrCadastrarFotoPoliciaMilitar4 ){
            "<br>Foto 4 Policia Militar cadastrada, atualizar tb_policia_militar";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar4'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar4);
            while( $PoliciaMilitar4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar4) ){
              $IdFotoPoliciaMilitar4 = $PoliciaMilitar4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaMilitar4 = "
              UPDATE tb_policia_militar
              SET foto4_policia_militar = '$IdFotoPoliciaMilitar4'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaMilitar4 = mysqli_query($connection, $QueryUpdatePoliciaMilitar4);
  
            if( $ExeQrUpdatePoliciaMilitar4 ){
              "<br>Foto 4 Policia Militar atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }