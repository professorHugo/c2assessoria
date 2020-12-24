<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 do local do evento" . 
      $_FILES['print_foto_img_evento3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_img_evento3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $LocalEvento3 = "Foto_LocalEvento3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $LocalEvento3;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_img_evento3']['tmp_name'], $target_file) ){
        echo "<br>Foto 3 do local do evento carregada, cadastrar foto";
        //BuscarCadastro da foto 3 do local do evento
        echo "<br><pre>" . 
        $QueryBuscarLocalEvento3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_evento3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$LocalEvento3'
        ";
        echo "</pre>";
        $ExeQrBuscarLocalEvento3 = mysqli_query($connection, $QueryBuscarLocalEvento3);
        $RowQrBuscarLocalEvento3 = mysqli_num_rows($ExeQrBuscarLocalEvento3);
  
        if( $RowQrBuscarLocalEvento3 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarLocalEvento3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_evento3',
              '$Protocolo',
              '$CPFAssociado',
              '$LocalEvento3'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarLocalEvento3 = mysqli_query($connection, $QueryCadastrarLocalEvento3);
  
          if( $ExeQrCadastrarLocalEvento3 ){
            echo "<br>Foto 3 do local do evento cadastrada, atualizar tb_local_evento";
            //BuscarCadastro da foto3 do local do evento
            echo "<br><pre>" . 
            $QueryBuscarLocalEvento3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_evento3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$LocalEvento3'
            ";
            echo "</pre>";
            $ExeQrBuscarLocalEvento3 = mysqli_query($connection, $QueryBuscarLocalEvento3);
            while( $LocalEvento3 = mysqli_fetch_assoc($ExeQrBuscarLocalEvento3) ){
              $IdLocalEvento3 = $LocalEvento3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateLocalEvento3 = "
              UPDATE tb_local_evento
              SET
                foto3_local_evento = '$IdLocalEvento3'
              WHERE
                protocolo_local_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateLocalEvento3 = mysqli_query($connection, $QueryUpdateLocalEvento3);
            if( $ExeQrUpdateLocalEvento3 ){
              echo "<br>Foto 3 do local do evento atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD

    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 3 do local do evento" . 
      $_FILES['print_foto_img_evento3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_img_evento3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $LocalEvento3 = "Foto_LocalEvento3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $LocalEvento3;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_img_evento3']['tmp_name'], $target_file) ){
        "<br>Foto 3 do local do evento carregada, cadastrar foto";
        //BuscarCadastro da foto 3 do local do evento
        "<br><pre>" . 
        $QueryBuscarLocalEvento3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_evento3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$LocalEvento3'
        ";
        "</pre>";
        $ExeQrBuscarLocalEvento3 = mysqli_query($connection, $QueryBuscarLocalEvento3);
        $RowQrBuscarLocalEvento3 = mysqli_num_rows($ExeQrBuscarLocalEvento3);
  
        if( $RowQrBuscarLocalEvento3 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarLocalEvento3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_evento3',
              '$Protocolo',
              '$CPFAssociado',
              '$LocalEvento3'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarLocalEvento3 = mysqli_query($connection, $QueryCadastrarLocalEvento3);
  
          if( $ExeQrCadastrarLocalEvento3 ){
            "<br>Foto 3 do local do evento cadastrada, atualizar tb_local_evento";
            //BuscarCadastro da foto3 do local do evento
            "<br><pre>" . 
            $QueryBuscarLocalEvento3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_evento3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$LocalEvento3'
            ";
            "</pre>";
            $ExeQrBuscarLocalEvento3 = mysqli_query($connection, $QueryBuscarLocalEvento3);
            while( $LocalEvento3 = mysqli_fetch_assoc($ExeQrBuscarLocalEvento3) ){
              $IdLocalEvento3 = $LocalEvento3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateLocalEvento3 = "
              UPDATE tb_local_evento
              SET
                foto3_local_evento = '$IdLocalEvento3'
              WHERE
                protocolo_local_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateLocalEvento3 = mysqli_query($connection, $QueryUpdateLocalEvento3);
            if( $ExeQrUpdateLocalEvento3 ){
              "<br>Foto 3 do local do evento atualizado";
            }
          }
        }
      }
    }
  }