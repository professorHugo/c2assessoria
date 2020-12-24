<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 do local do evento" . 
      $_FILES['print_foto_img_evento2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_img_evento2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $LocalEvento2 = "Foto_LocalEvento2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $LocalEvento2;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_img_evento2']['tmp_name'], $target_file) ){
        echo "<br>Foto 2 do local do evento carregada, cadastrar foto";
        //BuscarCadastro da foto 2 do local do evento
        echo "<br><pre>" . 
        $QueryBuscarLocalEvento2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_evento2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$LocalEvento2'
        ";
        echo "</pre>";
        $ExeQrBuscarLocalEvento2 = mysqli_query($connection, $QueryBuscarLocalEvento2);
        $RowQrBuscarLocalEvento2 = mysqli_num_rows($ExeQrBuscarLocalEvento2);
  
        if( $RowQrBuscarLocalEvento2 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarLocalEvento2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_evento2',
              '$Protocolo',
              '$CPFAssociado',
              '$LocalEvento2'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarLocalEvento2 = mysqli_query($connection, $QueryCadastrarLocalEvento2);
  
          if( $ExeQrCadastrarLocalEvento2 ){
            echo "<br>Foto 2 do local do evento cadastrada, atualizar tb_local_evento";
            //BuscarCadastro da foto2 do local do evento
            echo "<br><pre>" . 
            $QueryBuscarLocalEvento2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_evento2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$LocalEvento2'
            ";
            echo "</pre>";
            $ExeQrBuscarLocalEvento2 = mysqli_query($connection, $QueryBuscarLocalEvento2);
            while( $LocalEvento2 = mysqli_fetch_assoc($ExeQrBuscarLocalEvento2) ){
              $IdLocalEvento2 = $LocalEvento2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateLocalEvento2 = "
              UPDATE tb_local_evento
              SET
                foto2_local_evento = '$IdLocalEvento2'
              WHERE
                protocolo_local_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateLocalEvento2 = mysqli_query($connection, $QueryUpdateLocalEvento2);
            if( $ExeQrUpdateLocalEvento2 ){
              echo "<br>Foto 2 do local do evento atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 2 do local do evento" . 
      $_FILES['print_foto_img_evento2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_img_evento2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $LocalEvento2 = "Foto_LocalEvento2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $LocalEvento2;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_img_evento2']['tmp_name'], $target_file) ){
        "<br>Foto 2 do local do evento carregada, cadastrar foto";
        //BuscarCadastro da foto 2 do local do evento
        "<br><pre>" . 
        $QueryBuscarLocalEvento2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_evento2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$LocalEvento2'
        ";
        "</pre>";
        $ExeQrBuscarLocalEvento2 = mysqli_query($connection, $QueryBuscarLocalEvento2);
        $RowQrBuscarLocalEvento2 = mysqli_num_rows($ExeQrBuscarLocalEvento2);
  
        if( $RowQrBuscarLocalEvento2 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarLocalEvento2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_evento2',
              '$Protocolo',
              '$CPFAssociado',
              '$LocalEvento2'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarLocalEvento2 = mysqli_query($connection, $QueryCadastrarLocalEvento2);
  
          if( $ExeQrCadastrarLocalEvento2 ){
            "<br>Foto 2 do local do evento cadastrada, atualizar tb_local_evento";
            //BuscarCadastro da foto2 do local do evento
            "<br><pre>" . 
            $QueryBuscarLocalEvento2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_evento2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$LocalEvento2'
            ";
            "</pre>";
            $ExeQrBuscarLocalEvento2 = mysqli_query($connection, $QueryBuscarLocalEvento2);
            while( $LocalEvento2 = mysqli_fetch_assoc($ExeQrBuscarLocalEvento2) ){
              $IdLocalEvento2 = $LocalEvento2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateLocalEvento2 = "
              UPDATE tb_local_evento
              SET
                foto2_local_evento = '$IdLocalEvento2'
              WHERE
                protocolo_local_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateLocalEvento2 = mysqli_query($connection, $QueryUpdateLocalEvento2);
            if( $ExeQrUpdateLocalEvento2 ){
              "<br>Foto 2 do local do evento atualizado";
            }
          }
        }
      }
    }
  }