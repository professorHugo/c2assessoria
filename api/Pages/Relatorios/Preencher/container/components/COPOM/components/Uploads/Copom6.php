<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 COPOM" . 
      $_FILES['print_copom_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Copom6 = "Copom6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom6;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img6']['tmp_name'], $target_file ) ){
        echo "<br>Foto 6 COPOM carregada";
  
        //BuscarCadastro da foto6 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoCopom6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoCopom6 = mysqli_query($connection, $QueryBuscarFotoCopom6);
        $RowQrBuscarFotoCopom6 = mysqli_num_rows($ExeQrBuscarFotoCopom6);
  
        if( $RowQrBuscarFotoCopom6 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoCopom6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom6',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom6'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoCopom6 = mysqli_query($connection, $QueryCadastrarFotoCopom6);
          if( $ExeQrCadastrarFotoCopom6 ){
            echo "<br>Foto 6 COPOM cadastrada, atualizar tb_copom";
            echo "<br><pre>" . 
            $QueryBuscarFotoCopom6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoCopom6 = mysqli_query($connection, $QueryBuscarFotoCopom6);
            while( $Copom6 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom6) ){
              $IdFotoCopom6 = $Copom6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateCopom6 = "
              UPDATE tb_copom
              SET foto6_copom = '$IdFotoCopom6'
              WHERE protocolo_copom = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateCopom6 = mysqli_query($connection, $QueryUpdateCopom6);
  
            if( $ExeQrUpdateCopom6 ){
              echo "<br>Foto 6 COPOM atualizada";
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
      "<br>Foto 6 COPOM" . 
      $_FILES['print_copom_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Copom6 = "Copom6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom6;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img6']['tmp_name'], $target_file ) ){
        "<br>Foto 6 COPOM carregada";
  
        //BuscarCadastro da foto6 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoCopom6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom6'
        ";
        "</pre>";
        $ExeQrBuscarFotoCopom6 = mysqli_query($connection, $QueryBuscarFotoCopom6);
        $RowQrBuscarFotoCopom6 = mysqli_num_rows($ExeQrBuscarFotoCopom6);
  
        if( $RowQrBuscarFotoCopom6 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoCopom6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom6',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom6'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoCopom6 = mysqli_query($connection, $QueryCadastrarFotoCopom6);
          if( $ExeQrCadastrarFotoCopom6 ){
            "<br>Foto 6 COPOM cadastrada, atualizar tb_copom";
            "<br><pre>" . 
            $QueryBuscarFotoCopom6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom6'
            ";
            "</pre>";
            $ExeQrBuscarFotoCopom6 = mysqli_query($connection, $QueryBuscarFotoCopom6);
            while( $Copom6 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom6) ){
              $IdFotoCopom6 = $Copom6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateCopom6 = "
              UPDATE tb_copom
              SET foto6_copom = '$IdFotoCopom6'
              WHERE protocolo_copom = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateCopom6 = mysqli_query($connection, $QueryUpdateCopom6);
  
            if( $ExeQrUpdateCopom6 ){
              "<br>Foto 6 COPOM atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }