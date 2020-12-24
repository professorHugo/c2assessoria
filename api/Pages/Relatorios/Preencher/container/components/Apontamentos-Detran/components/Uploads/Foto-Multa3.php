<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      echo "<br>Foto 3 da multa: " . 
      $FotoMulta3 = $_FILES['print_foto3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Multa3 = "Foto_Multa3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Multa3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 da Multa carregado";
  
        //BuscarCadastro da foto3 da multa
        echo "<br><pre>" . 
        $QueryBuscarFotoMulta3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_multa3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Multa3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMulta3 = mysqli_query($connection, $QueryBuscarFotoMulta3);
        $RowQrBuscarFotoMulta3 = mysqli_num_rows($ExeQrBuscarFotoMulta3);
  
        if( $RowQrBuscarFotoMulta3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMulta3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_multa3',
              '$Protocolo',
              '$CPFAssociado',
              '$Multa3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMulta3 = mysqli_query($connection, $QueryCadastrarFotoMulta3);
  
          if( $ExeQrCadastrarFotoMulta3 ){
            echo "<br>Foto 3 da Multa cadastrada, atualizar tb_registro_detran";
            //BuscarCadastro da foto3 da multa
            echo "<br><pre>" . 
            $QueryBuscarFotoMulta3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_multa3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Multa3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMulta3 = mysqli_query($connection, $QueryBuscarFotoMulta3);
            while( $Multa3 = mysqli_fetch_assoc($ExeQrBuscarFotoMulta3) ){
              $IdMulta3 = $Multa3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMulta3 = "
              UPDATE tb_registro_detran
              SET foto3_multa = '$IdMulta3'
              WHERE protocolo_registro_detran = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMulta3 = mysqli_query($connection, $QueryUpdateMulta3);
  
            if( $ExeQrUpdateMulta3 ){
              echo "<br>Foto 3 da Multa do Registro Detran atualizado";
            }
  
          }
        }
      }
    }
  }else{

    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      "<br>Foto 3 da multa: " . 
      $FotoMulta3 = $_FILES['print_foto3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Multa3 = "Foto_Multa3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Multa3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 da Multa carregado";
  
        //BuscarCadastro da foto3 da multa
        "<br><pre>" . 
        $QueryBuscarFotoMulta3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_multa3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Multa3'
        ";
        "</pre>";
        $ExeQrBuscarFotoMulta3 = mysqli_query($connection, $QueryBuscarFotoMulta3);
        $RowQrBuscarFotoMulta3 = mysqli_num_rows($ExeQrBuscarFotoMulta3);
  
        if( $RowQrBuscarFotoMulta3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMulta3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_multa3',
              '$Protocolo',
              '$CPFAssociado',
              '$Multa3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMulta3 = mysqli_query($connection, $QueryCadastrarFotoMulta3);
  
          if( $ExeQrCadastrarFotoMulta3 ){
            "<br>Foto 3 da Multa cadastrada, atualizar tb_registro_detran";
            //BuscarCadastro da foto3 da multa
            "<br><pre>" . 
            $QueryBuscarFotoMulta3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_multa3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Multa3'
            ";
            "</pre>";
            $ExeQrBuscarFotoMulta3 = mysqli_query($connection, $QueryBuscarFotoMulta3);
            while( $Multa3 = mysqli_fetch_assoc($ExeQrBuscarFotoMulta3) ){
              $IdMulta3 = $Multa3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMulta3 = "
              UPDATE tb_registro_detran
              SET foto3_multa = '$IdMulta3'
              WHERE protocolo_registro_detran = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMulta3 = mysqli_query($connection, $QueryUpdateMulta3);
  
            if( $ExeQrUpdateMulta3 ){
              "<br>Foto 3 da Multa do Registro Detran atualizado";
            }
  
          }
        }
      }
    }
  }