<?php
  if( $SysMode == 1 ){
    //DEV

    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 do Boletim" . 
      $_FILES['print_boletim_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Boletim1 = "Foto_Boletim1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 do Boletim carregada";
  
        //Buscar Foto 1 do Boletim
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim1 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim1 = mysqli_query($connection, $QueryBuscarFotoBoletim1);
        $RowQrBuscarFotoBoletim1 = mysqli_num_rows($ExeQrBuscarFotoBoletim1);
  
        if( $RowQrBuscarFotoBoletim1 < 1 ){
          //Cadastrar Foto 1 do Boletim
          echo "<br><pre>" . 
          $QueryCadastrarFotoBoletim1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim1',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoBoletim1 = mysqli_query($connection, $QueryCadastrarFotoBoletim1);
          if( $ExeQrCadastrarFotoBoletim1 ){
            echo "<br>Foto 1 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 1 do Boletim
            echo "<br><pre>" . 
            $QueryBuscarFotoBoletim1 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoBoletim1 = mysqli_query($connection, $QueryBuscarFotoBoletim1);
            while($FotoBoletim1 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim1)){
              $IdBoletim1 = $FotoBoletim1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateBoletim1 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto1_boletim = '$IdBoletim1'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateBoletim1 = mysqli_query($connection, $QueryUpdateBoletim1);
            if( $ExeQrUpdateBoletim1 ){
              echo "<br>Foto 1 do Bometim atualizada";
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
      "<br>Foto 1 do Boletim" . 
      $_FILES['print_boletim_img1']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Boletim1 = "Foto_Boletim1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 do Boletim carregada";
  
        //Buscar Foto 1 do Boletim
        "<br><pre>" . 
        $QueryBuscarFotoBoletim1 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim1'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim1 = mysqli_query($connection, $QueryBuscarFotoBoletim1);
        $RowQrBuscarFotoBoletim1 = mysqli_num_rows($ExeQrBuscarFotoBoletim1);
  
        if( $RowQrBuscarFotoBoletim1 < 1 ){
          //Cadastrar Foto 1 do Boletim
          "<br><pre>" . 
          $QueryCadastrarFotoBoletim1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim1',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoBoletim1 = mysqli_query($connection, $QueryCadastrarFotoBoletim1);
          if( $ExeQrCadastrarFotoBoletim1 ){
            "<br>Foto 1 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 1 do Boletim
            "<br><pre>" . 
            $QueryBuscarFotoBoletim1 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim1'
            ";
            "</pre>";
            $ExeQrBuscarFotoBoletim1 = mysqli_query($connection, $QueryBuscarFotoBoletim1);
            while($FotoBoletim1 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim1)){
              $IdBoletim1 = $FotoBoletim1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateBoletim1 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto1_boletim = '$IdBoletim1'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateBoletim1 = mysqli_query($connection, $QueryUpdateBoletim1);
            if( $ExeQrUpdateBoletim1 ){
              "<br>Foto 1 do Bometim atualizada";
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