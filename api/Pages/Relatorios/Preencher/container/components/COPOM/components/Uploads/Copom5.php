<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 5 COPOM" . 
      $_FILES['print_copom_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img5']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Copom5 = "Copom5".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom5;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img5']['tmp_name'], $target_file ) ){
        echo "<br>Foto 5 COPOM carregada";
  
        //BuscarCadastro da foto5 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoCopom5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoCopom5 = mysqli_query($connection, $QueryBuscarFotoCopom5);
        $RowQrBuscarFotoCopom5 = mysqli_num_rows($ExeQrBuscarFotoCopom5);
  
        if( $RowQrBuscarFotoCopom5 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoCopom5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom5',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom5'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoCopom5 = mysqli_query($connection, $QueryCadastrarFotoCopom5);
          if( $ExeQrCadastrarFotoCopom5 ){
            echo "<br>Foto 5 COPOM cadastrada, atualizar tb_policia_civil";
            echo "<br><pre>" . 
            $QueryBuscarFotoCopom5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom5'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoCopom5 = mysqli_query($connection, $QueryBuscarFotoCopom5);
            while( $Copom5 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom5) ){
              $IdFotoCopom5 = $Copom5['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateCopom5 = "
              UPDATE tb_copom
              SET foto5_copom = '$IdFotoCopom5'
              WHERE protocolo_copom = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateCopom5 = mysqli_query($connection, $QueryUpdateCopom5);
  
            if( $ExeQrUpdateCopom5 ){
              echo "<br>Foto 5 COPOM atualizada";
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
      "<br>Foto 5 COPOM" . 
      $_FILES['print_copom_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_copom_img5']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Copom5 = "Copom5".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Copom5;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_copom_img5']['tmp_name'], $target_file ) ){
        "<br>Foto 5 COPOM carregada";
  
        //BuscarCadastro da foto5 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoCopom5 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'copom5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Copom5'
        ";
        "</pre>";
        $ExeQrBuscarFotoCopom5 = mysqli_query($connection, $QueryBuscarFotoCopom5);
        $RowQrBuscarFotoCopom5 = mysqli_num_rows($ExeQrBuscarFotoCopom5);
  
        if( $RowQrBuscarFotoCopom5 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoCopom5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'copom5',
              '$Protocolo',
              '$CPFAssociado',
              '$Copom5'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoCopom5 = mysqli_query($connection, $QueryCadastrarFotoCopom5);
          if( $ExeQrCadastrarFotoCopom5 ){
            "<br>Foto 5 COPOM cadastrada, atualizar tb_policia_civil";
            "<br><pre>" . 
            $QueryBuscarFotoCopom5 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'copom5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Copom5'
            ";
            "</pre>";
            $ExeQrBuscarFotoCopom5 = mysqli_query($connection, $QueryBuscarFotoCopom5);
            while( $Copom5 = mysqli_fetch_assoc($ExeQrBuscarFotoCopom5) ){
              $IdFotoCopom5 = $Copom5['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateCopom5 = "
              UPDATE tb_copom
              SET foto5_copom = '$IdFotoCopom5'
              WHERE protocolo_copom = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateCopom5 = mysqli_query($connection, $QueryUpdateCopom5);
  
            if( $ExeQrUpdateCopom5 ){
              "<br>Foto 5 COPOM atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
  
    }
  }