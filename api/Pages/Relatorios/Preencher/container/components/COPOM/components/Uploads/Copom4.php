<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 COPOM" . 
      $_FILES['print_copom_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Copom4 = "Copom4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom4;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img4']['tmp_name'], $target_file ) ){
        echo "<br>Foto 4 COPOM carregada";
  
        //BuscarCadastro da foto4 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoCopom4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoCopom4 = mysqli_query($connection, $QueryBuscarFotoCopom4);
        $RowQrBuscarFotoCopom4 = mysqli_num_rows($ExeQrBuscarFotoCopom4);
  
        if( $RowQrBuscarFotoCopom4 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoCopom4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom4',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom4'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoCopom4 = mysqli_query($connection, $QueryCadastrarFotoCopom4);
          if( $ExeQrCadastrarFotoCopom4 ){
            echo "<br>Foto 4 COPOM cadastrada, atualizar tb_copom";
            echo "<br><pre>" . 
            $QueryBuscarFotoCopom4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoCopom4 = mysqli_query($connection, $QueryBuscarFotoCopom4);
            while( $Copom4 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom4) ){
              $IdFotoCopom4 = $Copom4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateCopom4 = "
              UPDATE tb_copom
              SET foto4_copom = '$IdFotoCopom4'
              WHERE protocolo_copom = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateCopom4 = mysqli_query($connection, $QueryUpdateCopom4);
  
            if( $ExeQrUpdateCopom4 ){
              echo "<br>Foto 4 COPOM atualizada";
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
      "<br>Foto 4 COPOM" . 
      $_FILES['print_copom_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Copom4 = "Copom4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom4;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img4']['tmp_name'], $target_file ) ){
        "<br>Foto 4 COPOM carregada";
  
        //BuscarCadastro da foto4 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoCopom4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom4'
        ";
        "</pre>";
        $ExeQrBuscarFotoCopom4 = mysqli_query($connection, $QueryBuscarFotoCopom4);
        $RowQrBuscarFotoCopom4 = mysqli_num_rows($ExeQrBuscarFotoCopom4);
  
        if( $RowQrBuscarFotoCopom4 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoCopom4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom4',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom4'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoCopom4 = mysqli_query($connection, $QueryCadastrarFotoCopom4);
          if( $ExeQrCadastrarFotoCopom4 ){
            "<br>Foto 4 COPOM cadastrada, atualizar tb_copom";
            "<br><pre>" . 
            $QueryBuscarFotoCopom4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom4'
            ";
            "</pre>";
            $ExeQrBuscarFotoCopom4 = mysqli_query($connection, $QueryBuscarFotoCopom4);
            while( $Copom4 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom4) ){
              $IdFotoCopom4 = $Copom4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateCopom4 = "
              UPDATE tb_copom
              SET foto4_copom = '$IdFotoCopom4'
              WHERE protocolo_copom = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateCopom4 = mysqli_query($connection, $QueryUpdateCopom4);
  
            if( $ExeQrUpdateCopom4 ){
              "<br>Foto 4 COPOM atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }