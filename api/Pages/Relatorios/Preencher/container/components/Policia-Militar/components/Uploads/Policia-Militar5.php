<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 5 Policia Militar" . 
      $_FILES['print_policia_militar_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img5']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaMilitar5 = "Policia_Militar5".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar5;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img5']['tmp_name'], $target_file ) ){
        echo "<br>Foto 5 Policia Militar carregada";
  
        //BuscarCadastro da foto5 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar5);
        $RowQrBuscarFotoPoliciaMilitar5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar5);
  
        if( $RowQrBuscarFotoPoliciaMilitar5 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar5',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar5'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar5);
          if( $ExeQrCadastrarFotoPoliciaMilitar5 ){
            echo "<br>Foto 5 Policia Militar cadastrada, atualizar tb_policia_militar";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar5'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar5);
            while( $PoliciaMilitar5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar5) ){
              $IdFotoPoliciaMilitar5 = $PoliciaMilitar5['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaMilitar5 = "
              UPDATE tb_policia_militar
              SET foto5_policia_militar = '$IdFotoPoliciaMilitar5'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaMilitar5 = mysqli_query($connection, $QueryUpdatePoliciaMilitar5);
  
            if( $ExeQrUpdatePoliciaMilitar5 ){
              echo "<br>Foto 5 Policia Militar atualizada";
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
      "<br>Foto 5 Policia Militar" . 
      $_FILES['print_policia_militar_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_militar_img5']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaMilitar5 = "Policia_Militar5".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaMilitar5;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_militar_img5']['tmp_name'], $target_file ) ){
        "<br>Foto 5 Policia Militar carregada";
  
        //BuscarCadastro da foto5 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_militar5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaMilitar5'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar5);
        $RowQrBuscarFotoPoliciaMilitar5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar5);
  
        if( $RowQrBuscarFotoPoliciaMilitar5 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaMilitar5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_militar5',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaMilitar5'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryCadastrarFotoPoliciaMilitar5);
          if( $ExeQrCadastrarFotoPoliciaMilitar5 ){
            "<br>Foto 5 Policia Militar cadastrada, atualizar tb_policia_militar";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaMilitar5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_militar5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaMilitar5'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar5);
            while( $PoliciaMilitar5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar5) ){
              $IdFotoPoliciaMilitar5 = $PoliciaMilitar5['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaMilitar5 = "
              UPDATE tb_policia_militar
              SET foto5_policia_militar = '$IdFotoPoliciaMilitar5'
              WHERE protocolo_policia_militar = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaMilitar5 = mysqli_query($connection, $QueryUpdatePoliciaMilitar5);
  
            if( $ExeQrUpdatePoliciaMilitar5 ){
              "<br>Foto 5 Policia Militar atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }