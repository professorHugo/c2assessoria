<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 Policia Civil" . 
      $_FILES['print_policia_civil_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $PoliciaCivil4 = "Policia_Civil4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil4;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img4']['tmp_name'], $target_file ) ){
        echo "<br>Foto 4 Policia Civil carregada";
  
        //BuscarCadastro da foto4 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil4 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil4);
        $RowQrBuscarFotoPoliciaCivil4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil4);
  
        if( $RowQrBuscarFotoPoliciaCivil4 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil4',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil4'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil4 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil4);
          if( $ExeQrCadastrarFotoPoliciaCivil4 ){
            echo "<br>Foto 4 Policia Civil cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoPoliciaCivil4 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil4);
            while( $PoliciaCivil4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil4) ){
              $IdFotoPoliciaCivil4 = $PoliciaCivil4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdatePoliciaCivil4 = "
              UPDATE tb_policia_civil
              SET foto4_policia_civil = '$IdFotoPoliciaCivil4'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdatePoliciaCivil4 = mysqli_query($connection, $QueryUpdatePoliciaCivil4);
  
            if( $ExeQrUpdatePoliciaCivil4 ){
              echo "<br>Foto 4 Policia Civil atualizada";
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
      "<br>Foto 4 Policia Civil" . 
      $_FILES['print_policia_civil_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_policia_civil_img4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $PoliciaCivil4 = "Policia_Civil4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $PoliciaCivil4;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_policia_civil_img4']['tmp_name'], $target_file ) ){
        "<br>Foto 4 Policia Civil carregada";
  
        //BuscarCadastro da foto4 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'policia_civil4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$PoliciaCivil4'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil4 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil4);
        $RowQrBuscarFotoPoliciaCivil4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil4);
  
        if( $RowQrBuscarFotoPoliciaCivil4 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoPoliciaCivil4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'policia_civil4',
              '$Protocolo',
              '$CPFAssociado',
              '$PoliciaCivil4'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoPoliciaCivil4 = mysqli_query($connection, $QueryCadastrarFotoPoliciaCivil4);
          if( $ExeQrCadastrarFotoPoliciaCivil4 ){
            "<br>Foto 4 Policia Civil cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoPoliciaCivil4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'policia_civil4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$PoliciaCivil4'
            ";
            "</pre>";
            $ExeQrBuscarFotoPoliciaCivil4 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil4);
            while( $PoliciaCivil4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil4) ){
              $IdFotoPoliciaCivil4 = $PoliciaCivil4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdatePoliciaCivil4 = "
              UPDATE tb_policia_civil
              SET foto4_policia_civil = '$IdFotoPoliciaCivil4'
              WHERE protocolo_policia_civil = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdatePoliciaCivil4 = mysqli_query($connection, $QueryUpdatePoliciaCivil4);
  
            if( $ExeQrUpdatePoliciaCivil4 ){
              "<br>Foto 4 Policia Civil atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }