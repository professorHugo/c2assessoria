<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>print_pesquisas_img2: ". $_FILES['print_pesquisas_img2']['name'];
      $extensao = pathinfo( $_FILES['print_pesquisas_img2']['name'] );
      echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para UPLOAD: " . $target_dir_print_pesquisas_img2 = $PastaAssociado;
      echo "<br>Nome do Arquivo print_pesquisas_img2: " . $print_pesquisas_img2 = "print_pesquisas_img2".$extensao;
      echo "<br>Arquivo de destino print_pesquisas_img2: " . $target_file_print_pesquisas_img2 = $target_dir_print_pesquisas_img2.$print_pesquisas_img2;
      echo "<br>";

      if( move_uploaded_file( $_FILES['print_pesquisas_img2']['tmp_name'], $target_file_print_pesquisas_img2 ) ){
        echo "<br>print_pesquisas_img2 carregada";

        //Buscar print_pesquisas_img2
        echo "<br><pre>" . 
        $QueryBuscarprint_pesquisas_img2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'print_pesquisas_img2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$print_pesquisas_img2'
        ";
        echo "</pre>";

        $ExeQrBuscarprint_pesquisas_img2 = mysqli_query($connection, $QueryBuscarprint_pesquisas_img2);
        $RowQrBuscarprint_pesquisas_img2 = mysqli_num_rows($ExeQrBuscarprint_pesquisas_img2);

        if( $RowQrBuscarprint_pesquisas_img2 < 1 ){
          //Cadastrar print_pesquisas_img2
          echo "<br><pre>" . 
          $QueryCadastrarprint_pesquisas_img2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'print_pesquisas_img2',
              '$Protocolo',
              '$CPFAssociado',
              '$print_pesquisas_img2'
            )
          ";
          echo "</pre>";

          $ExeQrCadastrarprint_pesquisas_img2 = mysqli_query($connection, $QueryCadastrarprint_pesquisas_img2);

          if( $ExeQrCadastrarprint_pesquisas_img2 ){
            //Foto print_pesquisas_img2 cadastrada, atualizar tb_orgaos_publicos_fotos
            echo "<br><pre>" . 
            $QueryBuscarprint_pesquisas_img2Cadastrado = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'print_pesquisas_img2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$print_pesquisas_img2'
            ";
            echo "</pre>";
            $ExeQrBuscarprint_pesquisas_img2Cadastrado = mysqli_query($connection, $QueryBuscarprint_pesquisas_img2Cadastrado);
            while( $print_pesquisas_img2 = mysqli_fetch_assoc($ExeQrBuscarprint_pesquisas_img2Cadastrado) ){
              $Idprint_pesquisas_img2 = $print_pesquisas_img2['id_foto'];
            }

            echo "<br><pre>" . 
            $QueryUpdateprint_pesquisas_img2 = "
              UPDATE tb_orgaos_publicos_fotos
              SET orgaos_publicos_imagem2 = '$Idprint_pesquisas_img2'
              WHERE orgaos_publicos_fotos_protocolo = '$Protocolo'
            ";
            echo "</pre>";

            $ExeQrUpdateprint_pesquisas_img2 = mysqli_query($connection, $QueryUpdateprint_pesquisas_img2);
            if( $ExeQrUpdateprint_pesquisas_img2 ){
              echo "<br>print_pesquisas_img2 atualizado na tabela tb_orgaos_publicos_fotos";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }

    }

  }else{

    //PROD
    "<br>Pasta do associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>print_pesquisas_img2: ". $_FILES['print_pesquisas_img2']['name'];
      $extensao = pathinfo( $_FILES['print_pesquisas_img2']['name'] );
      "<br>Extensão: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para UPLOAD: " . $target_dir_print_pesquisas_img2 = $PastaAssociado;
      "<br>Nome do Arquivo print_pesquisas_img2: " . $print_pesquisas_img2 = "print_pesquisas_img2".$extensao;
      "<br>Arquivo de destino print_pesquisas_img2: " . $target_file_print_pesquisas_img2 = $target_dir_print_pesquisas_img2.$print_pesquisas_img2;
      "<br>";

      if( move_uploaded_file( $_FILES['print_pesquisas_img2']['tmp_name'], $target_file_print_pesquisas_img2 ) ){
        "<br>print_pesquisas_img2 carregada";

        //Buscar print_pesquisas_img2
        "<br><pre>" . 
        $QueryBuscarprint_pesquisas_img2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'print_pesquisas_img2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$print_pesquisas_img2'
        ";
        "</pre>";

        $ExeQrBuscarprint_pesquisas_img2 = mysqli_query($connection, $QueryBuscarprint_pesquisas_img2);
        $RowQrBuscarprint_pesquisas_img2 = mysqli_num_rows($ExeQrBuscarprint_pesquisas_img2);

        if( $RowQrBuscarprint_pesquisas_img2 < 1 ){
          //Cadastrar print_pesquisas_img2
          "<br><pre>" . 
          $QueryCadastrarprint_pesquisas_img2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'print_pesquisas_img2',
              '$Protocolo',
              '$CPFAssociado',
              '$print_pesquisas_img2'
            )
          ";
          "</pre>";

          $ExeQrCadastrarprint_pesquisas_img2 = mysqli_query($connection, $QueryCadastrarprint_pesquisas_img2);

          if( $ExeQrCadastrarprint_pesquisas_img2 ){
            //Foto print_pesquisas_img2 cadastrada, atualizar tb_orgaos_publicos_fotos
            "<br><pre>" . 
            $QueryBuscarprint_pesquisas_img2Cadastrado = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'print_pesquisas_img2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$print_pesquisas_img2'
            ";
            "</pre>";
            $ExeQrBuscarprint_pesquisas_img2Cadastrado = mysqli_query($connection, $QueryBuscarprint_pesquisas_img2Cadastrado);
            while( $print_pesquisas_img2 = mysqli_fetch_assoc($ExeQrBuscarprint_pesquisas_img2Cadastrado) ){
              $Idprint_pesquisas_img2 = $print_pesquisas_img2['id_foto'];
            }

            "<br><pre>" . 
            $QueryUpdateprint_pesquisas_img2 = "
              UPDATE tb_orgaos_publicos_fotos
              SET orgaos_publicos_imagem2 = '$Idprint_pesquisas_img2'
              WHERE orgaos_publicos_fotos_protocolo = '$Protocolo'
            ";
            "</pre>";

            $ExeQrUpdateprint_pesquisas_img2 = mysqli_query($connection, $QueryUpdateprint_pesquisas_img2);
            if( $ExeQrUpdateprint_pesquisas_img2 ){
              "<br>print_pesquisas_img2 atualizado na tabela tb_orgaos_publicos_fotos";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }

    }
  }