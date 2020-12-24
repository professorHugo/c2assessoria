<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 5 do Boletim" . 
      $_FILES['print_boletim_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img5']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Boletim5 = "Foto_Boletim5".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim5;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img5']['tmp_name'], $target_file ) ){
        echo "<br>Foto 5 do Boletim carregada";
  
        //Buscar Foto 5 do Boletim
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim5 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim5 = mysqli_query($connection, $QueryBuscarFotoBoletim5);
        $RowQrBuscarFotoBoletim5 = mysqli_num_rows($ExeQrBuscarFotoBoletim5);
  
        if( $RowQrBuscarFotoBoletim5 < 1 ){
          //Cadastrar Foto 5 do Boletim
          echo "<br><pre>" . 
          $QueryCadastrarFotoBoletim5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim5',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim5'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoBoletim5 = mysqli_query($connection, $QueryCadastrarFotoBoletim5);
          if( $ExeQrCadastrarFotoBoletim5 ){
            echo "<br>Foto 5 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 5 do Boletim
            echo "<br><pre>" . 
            $QueryBuscarFotoBoletim5 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim5'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoBoletim5 = mysqli_query($connection, $QueryBuscarFotoBoletim5);
            while($FotoBoletim5 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim5)){
              $IdBoletim5 = $FotoBoletim5['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateBoletim5 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto5_boletim = '$IdBoletim5'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateBoletim5 = mysqli_query($connection, $QueryUpdateBoletim5);
            if( $ExeQrUpdateBoletim5 ){
              echo "<br>Foto 5 do Bometim atualizada";
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
      "<br>Foto 5 do Boletim" . 
      $_FILES['print_boletim_img5']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img5']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Boletim5 = "Foto_Boletim5".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim5;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img5']['tmp_name'], $target_file ) ){
        "<br>Foto 5 do Boletim carregada";
  
        //Buscar Foto 5 do Boletim
        "<br><pre>" . 
        $QueryBuscarFotoBoletim5 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim5' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim5'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim5 = mysqli_query($connection, $QueryBuscarFotoBoletim5);
        $RowQrBuscarFotoBoletim5 = mysqli_num_rows($ExeQrBuscarFotoBoletim5);
  
        if( $RowQrBuscarFotoBoletim5 < 1 ){
          //Cadastrar Foto 5 do Boletim
          "<br><pre>" . 
          $QueryCadastrarFotoBoletim5 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim5',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim5'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoBoletim5 = mysqli_query($connection, $QueryCadastrarFotoBoletim5);
          if( $ExeQrCadastrarFotoBoletim5 ){
            "<br>Foto 5 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 5 do Boletim
            "<br><pre>" . 
            $QueryBuscarFotoBoletim5 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim5' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim5'
            ";
            "</pre>";
            $ExeQrBuscarFotoBoletim5 = mysqli_query($connection, $QueryBuscarFotoBoletim5);
            while($FotoBoletim5 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim5)){
              $IdBoletim5 = $FotoBoletim5['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateBoletim5 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto5_boletim = '$IdBoletim5'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateBoletim5 = mysqli_query($connection, $QueryUpdateBoletim5);
            if( $ExeQrUpdateBoletim5 ){
              "<br>Foto 5 do Bometim atualizada";
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