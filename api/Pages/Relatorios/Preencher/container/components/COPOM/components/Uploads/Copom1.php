<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 COPOM" . 
      $_FILES['print_copom_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Copom1 = "Copom1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 COPOM carregada";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoCopom1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoCopom1 = mysqli_query($connection, $QueryBuscarFotoCopom1);
        $RowQrBuscarFotoCopom1 = mysqli_num_rows($ExeQrBuscarFotoCopom1);
  
        if( $RowQrBuscarFotoCopom1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoCopom1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom1',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoCopom1 = mysqli_query($connection, $QueryCadastrarFotoCopom1);
          if( $ExeQrCadastrarFotoCopom1 ){
            echo "<br>Foto 1 COPOM cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoCopom1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoCopom1 = mysqli_query($connection, $QueryBuscarFotoCopom1);
            while( $Copom1 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom1) ){
              $IdFotoCopom1 = $Copom1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateCopom1 = "
              UPDATE tb_copom
              SET foto1_copom = '$IdFotoCopom1'
              WHERE protocolo_copom = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateCopom1 = mysqli_query($connection, $QueryUpdateCopom1);
  
            if( $ExeQrUpdateCopom1 ){
              echo "<br>Foto 1 COPOM atualizada";
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
      "<br>Foto 1 COPOM" . 
      $_FILES['print_copom_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Copom1 = "Copom1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 COPOM carregada";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoCopom1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom1'
        ";
        "</pre>";
        $ExeQrBuscarFotoCopom1 = mysqli_query($connection, $QueryBuscarFotoCopom1);
        $RowQrBuscarFotoCopom1 = mysqli_num_rows($ExeQrBuscarFotoCopom1);
  
        if( $RowQrBuscarFotoCopom1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoCopom1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom1',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoCopom1 = mysqli_query($connection, $QueryCadastrarFotoCopom1);
          if( $ExeQrCadastrarFotoCopom1 ){
            "<br>Foto 1 COPOM cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoCopom1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom1'
            ";
            "</pre>";
            $ExeQrBuscarFotoCopom1 = mysqli_query($connection, $QueryBuscarFotoCopom1);
            while( $Copom1 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom1) ){
              $IdFotoCopom1 = $Copom1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateCopom1 = "
              UPDATE tb_copom
              SET foto1_copom = '$IdFotoCopom1'
              WHERE protocolo_copom = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateCopom1 = mysqli_query($connection, $QueryUpdateCopom1);
  
            if( $ExeQrUpdateCopom1 ){
              "<br>Foto 1 COPOM atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }