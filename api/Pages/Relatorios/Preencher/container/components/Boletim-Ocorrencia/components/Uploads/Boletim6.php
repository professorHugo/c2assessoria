<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 do Boletim" . 
      $_FILES['print_boletim_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Boletim6 = "Foto_Boletim6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim6;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img6']['tmp_name'], $target_file ) ){
        echo "<br>Foto 6 do Boletim carregada";
  
        //Buscar Foto 6 do Boletim
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim6 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim6 = mysqli_query($connection, $QueryBuscarFotoBoletim6);
        $RowQrBuscarFotoBoletim6 = mysqli_num_rows($ExeQrBuscarFotoBoletim6);
  
        if( $RowQrBuscarFotoBoletim6 < 1 ){
          //Cadastrar Foto 6 do Boletim
          echo "<br><pre>" . 
          $QueryCadastrarFotoBoletim6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim6',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim6'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoBoletim6 = mysqli_query($connection, $QueryCadastrarFotoBoletim6);
          if( $ExeQrCadastrarFotoBoletim6 ){
            echo "<br>Foto 6 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 6 do Boletim
            echo "<br><pre>" . 
            $QueryBuscarFotoBoletim6 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoBoletim6 = mysqli_query($connection, $QueryBuscarFotoBoletim6);
            while($FotoBoletim6 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim6)){
              $IdBoletim6 = $FotoBoletim6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateBoletim6 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto6_boletim = '$IdBoletim6'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateBoletim6 = mysqli_query($connection, $QueryUpdateBoletim6);
            if( $ExeQrUpdateBoletim6 ){
              echo "<br>Foto 6 do Bometim atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }else{
            echo "<br>Erro: " . mysqli_error($connection);
          }
        }else{
          echo "<br>Foto já cadastrada";
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 6 do Boletim" . 
      $_FILES['print_boletim_img6']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Boletim6 = "Foto_Boletim6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim6;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img6']['tmp_name'], $target_file ) ){
        "<br>Foto 6 do Boletim carregada";
  
        //Buscar Foto 6 do Boletim
        "<br><pre>" . 
        $QueryBuscarFotoBoletim6 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim6'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim6 = mysqli_query($connection, $QueryBuscarFotoBoletim6);
        $RowQrBuscarFotoBoletim6 = mysqli_num_rows($ExeQrBuscarFotoBoletim6);
  
        if( $RowQrBuscarFotoBoletim6 < 1 ){
          //Cadastrar Foto 6 do Boletim
          "<br><pre>" . 
          $QueryCadastrarFotoBoletim6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim6',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim6'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoBoletim6 = mysqli_query($connection, $QueryCadastrarFotoBoletim6);
          if( $ExeQrCadastrarFotoBoletim6 ){
            "<br>Foto 6 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 6 do Boletim
            "<br><pre>" . 
            $QueryBuscarFotoBoletim6 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim6'
            ";
            "</pre>";
            $ExeQrBuscarFotoBoletim6 = mysqli_query($connection, $QueryBuscarFotoBoletim6);
            while($FotoBoletim6 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim6)){
              $IdBoletim6 = $FotoBoletim6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateBoletim6 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto6_boletim = '$IdBoletim6'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateBoletim6 = mysqli_query($connection, $QueryUpdateBoletim6);
            if( $ExeQrUpdateBoletim6 ){
              "<br>Foto 6 do Bometim atualizada";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }else{
            echo "<br>Erro: " . mysqli_error($connection);
          }
        }else{
          "<br>Foto já cadastrada";
        }
      }
    }
  }