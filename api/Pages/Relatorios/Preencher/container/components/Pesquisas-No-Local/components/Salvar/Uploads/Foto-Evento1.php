<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 do local do evento" . 
      $_FILES['print_foto_img_evento1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_img_evento1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $LocalEvento1 = "Foto_LocalEvento1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $LocalEvento1;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_img_evento1']['tmp_name'], $target_file) ){
        echo "<br>Foto 1 do local do evento carregada, cadastrar foto";
        //BuscarCadastro da foto 1 do local do evento
        echo "<br><pre>" . 
        $QueryBuscarLocalEvento1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_evento1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$LocalEvento1'
        ";
        echo "</pre>";
        $ExeQrBuscarLocalEvento1 = mysqli_query($connection, $QueryBuscarLocalEvento1);
        $RowQrBuscarLocalEvento1 = mysqli_num_rows($ExeQrBuscarLocalEvento1);
  
        if( $RowQrBuscarLocalEvento1 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarLocalEvento1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_evento1',
              '$Protocolo',
              '$CPFAssociado',
              '$LocalEvento1'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarLocalEvento1 = mysqli_query($connection, $QueryCadastrarLocalEvento1);
  
          if( $ExeQrCadastrarLocalEvento1 ){
            echo "<br>Foto 1 do local do evento cadastrada, atualizar tb_local_evento";
            //BuscarCadastro da foto1 do local do evento
            echo "<br><pre>" . 
            $QueryBuscarLocalEvento1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_evento1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$LocalEvento1'
            ";
            echo "</pre>";
            $ExeQrBuscarLocalEvento1 = mysqli_query($connection, $QueryBuscarLocalEvento1);
            while( $LocalEvento1 = mysqli_fetch_assoc($ExeQrBuscarLocalEvento1) ){
              $IdLocalEvento1 = $LocalEvento1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateLocalEvento1 = "
              UPDATE tb_local_evento
              SET
                foto1_local_evento = '$IdLocalEvento1'
              WHERE
                protocolo_local_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateLocalEvento1 = mysqli_query($connection, $QueryUpdateLocalEvento1);
            if( $ExeQrUpdateLocalEvento1 ){
              echo "<br>Foto 1 do local do evento atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD

    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 1 do local do evento" . 
      $_FILES['print_foto_img_evento1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_img_evento1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $LocalEvento1 = "Foto_LocalEvento1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $LocalEvento1;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_img_evento1']['tmp_name'], $target_file) ){
        "<br>Foto 1 do local do evento carregada, cadastrar foto";
        //BuscarCadastro da foto 1 do local do evento
        "<br><pre>" . 
        $QueryBuscarLocalEvento1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_evento1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$LocalEvento1'
        ";
        "</pre>";
        $ExeQrBuscarLocalEvento1 = mysqli_query($connection, $QueryBuscarLocalEvento1);
        $RowQrBuscarLocalEvento1 = mysqli_num_rows($ExeQrBuscarLocalEvento1);
  
        if( $RowQrBuscarLocalEvento1 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarLocalEvento1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_evento1',
              '$Protocolo',
              '$CPFAssociado',
              '$LocalEvento1'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarLocalEvento1 = mysqli_query($connection, $QueryCadastrarLocalEvento1);
  
          if( $ExeQrCadastrarLocalEvento1 ){
            "<br>Foto 1 do local do evento cadastrada, atualizar tb_local_evento";
            //BuscarCadastro da foto1 do local do evento
            "<br><pre>" . 
            $QueryBuscarLocalEvento1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_evento1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$LocalEvento1'
            ";
            "</pre>";
            $ExeQrBuscarLocalEvento1 = mysqli_query($connection, $QueryBuscarLocalEvento1);
            while( $LocalEvento1 = mysqli_fetch_assoc($ExeQrBuscarLocalEvento1) ){
              $IdLocalEvento1 = $LocalEvento1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateLocalEvento1 = "
              UPDATE tb_local_evento
              SET
                foto1_local_evento = '$IdLocalEvento1'
              WHERE
                protocolo_local_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateLocalEvento1 = mysqli_query($connection, $QueryUpdateLocalEvento1);
            if( $ExeQrUpdateLocalEvento1 ){
              "<br>Foto 1 do local do evento atualizado";
            }
          }
        }
      }
    }
  }