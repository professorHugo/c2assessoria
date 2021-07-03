<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 COPOM" . 
      $_FILES['print_copom_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Copom2 = "Copom2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 COPOM carregada";
  
        //BuscarCadastro da foto2 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoCopom2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoCopom2 = mysqli_query($connection, $QueryBuscarFotoCopom2);
        $RowQrBuscarFotoCopom2 = mysqli_num_rows($ExeQrBuscarFotoCopom2);
  
        if( $RowQrBuscarFotoCopom2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoCopom2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom2',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoCopom2 = mysqli_query($connection, $QueryCadastrarFotoCopom2);
          if( $ExeQrCadastrarFotoCopom2 ){
            echo "<br>Foto 2 COPOM cadastrada, atualizar tb_copom";
            echo "<br><pre>" . 
            $QueryBuscarFotoCopom2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoCopom2 = mysqli_query($connection, $QueryBuscarFotoCopom2);
            while( $Copom2 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom2) ){
              $IdFotoCopom2 = $Copom2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateCopom2 = "
              UPDATE tb_copom
              SET foto2_copom = '$IdFotoCopom2'
              WHERE protocolo_copom = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateCopom2 = mysqli_query($connection, $QueryUpdateCopom2);
  
            if( $ExeQrUpdateCopom2 ){
              echo "<br>Foto 2 COPOM atualizada";
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
      "<br>Foto 2 COPOM" . 
      $_FILES['print_copom_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Copom2 = "Copom2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 COPOM carregada";
  
        //BuscarCadastro da foto2 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoCopom2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom2'
        ";
        "</pre>";
        $ExeQrBuscarFotoCopom2 = mysqli_query($connection, $QueryBuscarFotoCopom2);
        $RowQrBuscarFotoCopom2 = mysqli_num_rows($ExeQrBuscarFotoCopom2);
  
        if( $RowQrBuscarFotoCopom2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoCopom2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom2',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoCopom2 = mysqli_query($connection, $QueryCadastrarFotoCopom2);
          if( $ExeQrCadastrarFotoCopom2 ){
            "<br>Foto 2 COPOM cadastrada, atualizar tb_copom";
            "<br><pre>" . 
            $QueryBuscarFotoCopom2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom2'
            ";
            "</pre>";
            $ExeQrBuscarFotoCopom2 = mysqli_query($connection, $QueryBuscarFotoCopom2);
            while( $Copom2 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom2) ){
              $IdFotoCopom2 = $Copom2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateCopom2 = "
              UPDATE tb_copom
              SET foto2_copom = '$IdFotoCopom2'
              WHERE protocolo_copom = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateCopom2 = mysqli_query($connection, $QueryUpdateCopom2);
  
            if( $ExeQrUpdateCopom2 ){
              "<br>Foto 2 COPOM atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }