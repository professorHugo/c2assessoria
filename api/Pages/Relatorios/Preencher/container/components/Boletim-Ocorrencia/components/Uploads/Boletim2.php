<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 do Boletim" . 
      $_FILES['print_boletim_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Boletim2 = "Foto_Boletim2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 do Boletim carregada";
  
        //Buscar Foto 2 do Boletim
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim2 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim2 = mysqli_query($connection, $QueryBuscarFotoBoletim2);
        $RowQrBuscarFotoBoletim2 = mysqli_num_rows($ExeQrBuscarFotoBoletim2);
  
        if( $RowQrBuscarFotoBoletim2 < 1 ){
          //Cadastrar Foto 2 do Boletim
          echo "<br><pre>" . 
          $QueryCadastrarFotoBoletim2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim2',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoBoletim2 = mysqli_query($connection, $QueryCadastrarFotoBoletim2);
          if( $ExeQrCadastrarFotoBoletim2 ){
            echo "<br>Foto 2 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 2 do Boletim
            echo "<br><pre>" . 
            $QueryBuscarFotoBoletim2 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoBoletim2 = mysqli_query($connection, $QueryBuscarFotoBoletim2);
            while($FotoBoletim2 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim2)){
              $IdBoletim2 = $FotoBoletim2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateBoletim2 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto2_boletim = '$IdBoletim2'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateBoletim2 = mysqli_query($connection, $QueryUpdateBoletim2);
            if( $ExeQrUpdateBoletim2 ){
              echo "<br>Foto 2 do Bometim atualizada";
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
      "<br>Foto 2 do Boletim" . 
      $_FILES['print_boletim_img2']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Boletim2 = "Foto_Boletim2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 do Boletim carregada";
  
        //Buscar Foto 2 do Boletim
        "<br><pre>" . 
        $QueryBuscarFotoBoletim2 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim2'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim2 = mysqli_query($connection, $QueryBuscarFotoBoletim2);
        $RowQrBuscarFotoBoletim2 = mysqli_num_rows($ExeQrBuscarFotoBoletim2);
  
        if( $RowQrBuscarFotoBoletim2 < 1 ){
          //Cadastrar Foto 2 do Boletim
          "<br><pre>" . 
          $QueryCadastrarFotoBoletim2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim2',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoBoletim2 = mysqli_query($connection, $QueryCadastrarFotoBoletim2);
          if( $ExeQrCadastrarFotoBoletim2 ){
            "<br>Foto 2 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 2 do Boletim
            "<br><pre>" . 
            $QueryBuscarFotoBoletim2 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim2'
            ";
            "</pre>";
            $ExeQrBuscarFotoBoletim2 = mysqli_query($connection, $QueryBuscarFotoBoletim2);
            while($FotoBoletim2 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim2)){
              $IdBoletim2 = $FotoBoletim2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateBoletim2 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto2_boletim = '$IdBoletim2'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateBoletim2 = mysqli_query($connection, $QueryUpdateBoletim2);
            if( $ExeQrUpdateBoletim2 ){
              "<br>Foto 2 do Bometim atualizada";
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