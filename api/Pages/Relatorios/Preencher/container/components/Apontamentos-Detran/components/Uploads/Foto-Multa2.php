<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      echo "<br>Foto 2 da multa: " . 
      $FotoMulta2 = $_FILES['print_foto2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Multa2 = "Foto_Multa2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Multa2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 da Multa carregado";
  
        //BuscarCadastro da foto2 da multa
        echo "<br><pre>" . 
        $QueryBuscarFotoMulta2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_multa2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Multa2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMulta2 = mysqli_query($connection, $QueryBuscarFotoMulta2);
        $RowQrBuscarFotoMulta2 = mysqli_num_rows($ExeQrBuscarFotoMulta2);
  
        if( $RowQrBuscarFotoMulta2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMulta2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_multa2',
              '$Protocolo',
              '$CPFAssociado',
              '$Multa2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMulta2 = mysqli_query($connection, $QueryCadastrarFotoMulta2);
  
          if( $ExeQrCadastrarFotoMulta2 ){
            echo "<br>Foto 2 da Multa cadastrada, atualizar tb_registro_detran";
            //BuscarCadastro da foto2 da multa
            echo "<br><pre>" . 
            $QueryBuscarFotoMulta2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_multa2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Multa2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMulta2 = mysqli_query($connection, $QueryBuscarFotoMulta2);
            while( $Multa2 = mysqli_fetch_assoc($ExeQrBuscarFotoMulta2) ){
              $IdMulta2 = $Multa2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMulta2 = "
              UPDATE tb_registro_detran
              SET foto2_multa = '$IdMulta2'
              WHERE protocolo_registro_detran = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMulta2 = mysqli_query($connection, $QueryUpdateMulta2);
  
            if( $ExeQrUpdateMulta2 ){
              echo "<br>Foto 2 da Multa do Registro Detran atualizado";
            }
  
          }
        }
      }
    }
  }else{

    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      "<br>Foto 2 da multa: " . 
      $FotoMulta2 = $_FILES['print_foto2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Multa2 = "Foto_Multa2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Multa2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 da Multa carregado";
  
        //BuscarCadastro da foto2 da multa
        "<br><pre>" . 
        $QueryBuscarFotoMulta2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_multa2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Multa2'
        ";
        "</pre>";
        $ExeQrBuscarFotoMulta2 = mysqli_query($connection, $QueryBuscarFotoMulta2);
        $RowQrBuscarFotoMulta2 = mysqli_num_rows($ExeQrBuscarFotoMulta2);
  
        if( $RowQrBuscarFotoMulta2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMulta2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_multa2',
              '$Protocolo',
              '$CPFAssociado',
              '$Multa2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMulta2 = mysqli_query($connection, $QueryCadastrarFotoMulta2);
  
          if( $ExeQrCadastrarFotoMulta2 ){
            "<br>Foto 2 da Multa cadastrada, atualizar tb_registro_detran";
            //BuscarCadastro da foto2 da multa
            "<br><pre>" . 
            $QueryBuscarFotoMulta2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_multa2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Multa2'
            ";
            "</pre>";
            $ExeQrBuscarFotoMulta2 = mysqli_query($connection, $QueryBuscarFotoMulta2);
            while( $Multa2 = mysqli_fetch_assoc($ExeQrBuscarFotoMulta2) ){
              $IdMulta2 = $Multa2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMulta2 = "
              UPDATE tb_registro_detran
              SET foto2_multa = '$IdMulta2'
              WHERE protocolo_registro_detran = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMulta2 = mysqli_query($connection, $QueryUpdateMulta2);
  
            if( $ExeQrUpdateMulta2 ){
              "<br>Foto 2 da Multa do Registro Detran atualizado";
            }
  
          }
        }
      }
    }
  }