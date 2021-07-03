<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 COPOM" . 
      $_FILES['print_copom_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Copom3 = "Copom3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 COPOM carregada";
  
        //BuscarCadastro da foto3 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoCopom3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoCopom3 = mysqli_query($connection, $QueryBuscarFotoCopom3);
        $RowQrBuscarFotoCopom3 = mysqli_num_rows($ExeQrBuscarFotoCopom3);
  
        if( $RowQrBuscarFotoCopom3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoCopom3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom3',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoCopom3 = mysqli_query($connection, $QueryCadastrarFotoCopom3);
          if( $ExeQrCadastrarFotoCopom3 ){
            echo "<br>Foto 3 COPOM cadastrada, atualizar tb_copom";
            echo "<br><pre>" . 
            $QueryBuscarFotoCopom3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoCopom3 = mysqli_query($connection, $QueryBuscarFotoCopom3);
            while( $Copom3 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom3) ){
              $IdFotoCopom3 = $Copom3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateCopom3 = "
              UPDATE tb_copom
              SET foto3_copom = '$IdFotoCopom3'
              WHERE protocolo_copom = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateCopom3 = mysqli_query($connection, $QueryUpdateCopom3);
  
            if( $ExeQrUpdateCopom3 ){
              echo "<br>Foto 3 COPOM atualizada";
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
      "<br>Foto 3 COPOM" . 
      $_FILES['print_copom_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Copom3 = "Copom3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 COPOM carregada";
  
        //BuscarCadastro da foto3 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoCopom3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom3'
        ";
        "</pre>";
        $ExeQrBuscarFotoCopom3 = mysqli_query($connection, $QueryBuscarFotoCopom3);
        $RowQrBuscarFotoCopom3 = mysqli_num_rows($ExeQrBuscarFotoCopom3);
  
        if( $RowQrBuscarFotoCopom3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoCopom3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom3',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoCopom3 = mysqli_query($connection, $QueryCadastrarFotoCopom3);
          if( $ExeQrCadastrarFotoCopom3 ){
            "<br>Foto 3 COPOM cadastrada, atualizar tb_copom";
            "<br><pre>" . 
            $QueryBuscarFotoCopom3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom3'
            ";
            "</pre>";
            $ExeQrBuscarFotoCopom3 = mysqli_query($connection, $QueryBuscarFotoCopom3);
            while( $Copom3 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom3) ){
              $IdFotoCopom3 = $Copom3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateCopom3 = "
              UPDATE tb_copom
              SET foto3_copom = '$IdFotoCopom3'
              WHERE protocolo_copom = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateCopom3 = mysqli_query($connection, $QueryUpdateCopom3);
  
            if( $ExeQrUpdateCopom3 ){
              "<br>Foto 3 COPOM atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }