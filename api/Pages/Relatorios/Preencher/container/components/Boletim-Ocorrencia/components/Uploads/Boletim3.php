<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 do Boletim" . 
      $_FILES['print_boletim_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Boletim3 = "Foto_Boletim3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 do Boletim carregada";
  
        //Buscar Foto 3 do Boletim
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim3 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim3 = mysqli_query($connection, $QueryBuscarFotoBoletim3);
        $RowQrBuscarFotoBoletim3 = mysqli_num_rows($ExeQrBuscarFotoBoletim3);
  
        if( $RowQrBuscarFotoBoletim3 < 1 ){
          //Cadastrar Foto 3 do Boletim
          echo "<br><pre>" . 
          $QueryCadastrarFotoBoletim3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim3',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoBoletim3 = mysqli_query($connection, $QueryCadastrarFotoBoletim3);
          if( $ExeQrCadastrarFotoBoletim3 ){
            echo "<br>Foto 3 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 3 do Boletim
            echo "<br><pre>" . 
            $QueryBuscarFotoBoletim3 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoBoletim3 = mysqli_query($connection, $QueryBuscarFotoBoletim3);
            while($FotoBoletim3 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim3)){
              $IdBoletim3 = $FotoBoletim3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateBoletim3 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto3_boletim = '$IdBoletim3'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateBoletim3 = mysqli_query($connection, $QueryUpdateBoletim3);
            if( $ExeQrUpdateBoletim3 ){
              echo "<br>Foto 3 do Bometim atualizada";
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
      "<br>Foto 3 do Boletim" . 
      $_FILES['print_boletim_img3']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Boletim3 = "Foto_Boletim3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 do Boletim carregada";
  
        //Buscar Foto 3 do Boletim
        "<br><pre>" . 
        $QueryBuscarFotoBoletim3 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim3'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim3 = mysqli_query($connection, $QueryBuscarFotoBoletim3);
        $RowQrBuscarFotoBoletim3 = mysqli_num_rows($ExeQrBuscarFotoBoletim3);
  
        if( $RowQrBuscarFotoBoletim3 < 1 ){
          //Cadastrar Foto 3 do Boletim
          "<br><pre>" . 
          $QueryCadastrarFotoBoletim3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim3',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoBoletim3 = mysqli_query($connection, $QueryCadastrarFotoBoletim3);
          if( $ExeQrCadastrarFotoBoletim3 ){
            "<br>Foto 3 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 3 do Boletim
            "<br><pre>" . 
            $QueryBuscarFotoBoletim3 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim3'
            ";
            "</pre>";
            $ExeQrBuscarFotoBoletim3 = mysqli_query($connection, $QueryBuscarFotoBoletim3);
            while($FotoBoletim3 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim3)){
              $IdBoletim3 = $FotoBoletim3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateBoletim3 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto3_boletim = '$IdBoletim3'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateBoletim3 = mysqli_query($connection, $QueryUpdateBoletim3);
            if( $ExeQrUpdateBoletim3 ){
              "<br>Foto 3 do Bometim atualizada";
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