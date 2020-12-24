<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      echo "<br>Foto 1 da multa: " . 
      $FotoMulta1 = $_FILES['print_foto1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Multa1 = "Foto_Multa1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Multa1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da Multa carregado";
  
        //BuscarCadastro da foto1 da multa
        echo "<br><pre>" . 
        $QueryBuscarFotoMulta1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_multa1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Multa1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoMulta1 = mysqli_query($connection, $QueryBuscarFotoMulta1);
        $RowQrBuscarFotoMulta1 = mysqli_num_rows($ExeQrBuscarFotoMulta1);
  
        if( $RowQrBuscarFotoMulta1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoMulta1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_multa1',
              '$Protocolo',
              '$CPFAssociado',
              '$Multa1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoMulta1 = mysqli_query($connection, $QueryCadastrarFotoMulta1);
  
          if( $ExeQrCadastrarFotoMulta1 ){
            echo "<br>Foto 1 da Multa cadastrada, atualizar tb_registro_detran";
            //BuscarCadastro da foto1 da multa
            echo "<br><pre>" . 
            $QueryBuscarFotoMulta1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_multa1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Multa1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoMulta1 = mysqli_query($connection, $QueryBuscarFotoMulta1);
            while( $Multa1 = mysqli_fetch_assoc($ExeQrBuscarFotoMulta1) ){
              $IdMulta1 = $Multa1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateMulta1 = "
              UPDATE tb_registro_detran
              SET foto1_multa = '$IdMulta1'
              WHERE protocolo_registro_detran = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateMulta1 = mysqli_query($connection, $QueryUpdateMulta1);
  
            if( $ExeQrUpdateMulta1 ){
              echo "<br>Foto 1 da Multa do Registro Detran atualizado";
            }
  
          }
        }
      }
    }
  }else{

    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      "<br>Foto 1 da multa: " . 
      $FotoMulta1 = $_FILES['print_foto1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Multa1 = "Foto_Multa1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Multa1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da Multa carregado";
  
        //BuscarCadastro da foto1 da multa
        "<br><pre>" . 
        $QueryBuscarFotoMulta1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_multa1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Multa1'
        ";
        "</pre>";
        $ExeQrBuscarFotoMulta1 = mysqli_query($connection, $QueryBuscarFotoMulta1);
        $RowQrBuscarFotoMulta1 = mysqli_num_rows($ExeQrBuscarFotoMulta1);
  
        if( $RowQrBuscarFotoMulta1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoMulta1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_multa1',
              '$Protocolo',
              '$CPFAssociado',
              '$Multa1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoMulta1 = mysqli_query($connection, $QueryCadastrarFotoMulta1);
  
          if( $ExeQrCadastrarFotoMulta1 ){
            "<br>Foto 1 da Multa cadastrada, atualizar tb_registro_detran";
            //BuscarCadastro da foto1 da multa
            "<br><pre>" . 
            $QueryBuscarFotoMulta1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_multa1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Multa1'
            ";
            "</pre>";
            $ExeQrBuscarFotoMulta1 = mysqli_query($connection, $QueryBuscarFotoMulta1);
            while( $Multa1 = mysqli_fetch_assoc($ExeQrBuscarFotoMulta1) ){
              $IdMulta1 = $Multa1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateMulta1 = "
              UPDATE tb_registro_detran
              SET foto1_multa = '$IdMulta1'
              WHERE protocolo_registro_detran = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateMulta1 = mysqli_query($connection, $QueryUpdateMulta1);
  
            if( $ExeQrUpdateMulta1 ){
              "<br>Foto 1 da Multa do Registro Detran atualizado";
            }
  
          }
        }
      }
    }
  }