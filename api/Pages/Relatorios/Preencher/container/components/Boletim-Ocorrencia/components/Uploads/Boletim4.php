<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 do Boletim" . 
      $_FILES['print_boletim_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Boletim4 = "Foto_Boletim4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim4;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img4']['tmp_name'], $target_file ) ){
        echo "<br>Foto 4 do Boletim carregada";
  
        //Buscar Foto 4 do Boletim
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim4 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim4 = mysqli_query($connection, $QueryBuscarFotoBoletim4);
        $RowQrBuscarFotoBoletim4 = mysqli_num_rows($ExeQrBuscarFotoBoletim4);
  
        if( $RowQrBuscarFotoBoletim4 < 1 ){
          //Cadastrar Foto 4 do Boletim
          echo "<br><pre>" . 
          $QueryCadastrarFotoBoletim4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim4',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim4'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoBoletim4 = mysqli_query($connection, $QueryCadastrarFotoBoletim4);
          if( $ExeQrCadastrarFotoBoletim4 ){
            echo "<br>Foto 4 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 4 do Boletim
            echo "<br><pre>" . 
            $QueryBuscarFotoBoletim4 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoBoletim4 = mysqli_query($connection, $QueryBuscarFotoBoletim4);
            while($FotoBoletim4 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim4)){
              $IdBoletim4 = $FotoBoletim4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateBoletim4 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto4_boletim = '$IdBoletim4'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateBoletim4 = mysqli_query($connection, $QueryUpdateBoletim4);
            if( $ExeQrUpdateBoletim4 ){
              echo "<br>Foto 4 do Bometim atualizada";
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
      "<br>Foto 4 do Boletim" . 
      $_FILES['print_boletim_img4']['name'];
  
      $extensao = pathinfo( $_FILES['print_boletim_img4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Boletim4 = "Foto_Boletim4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Boletim4;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_boletim_img4']['tmp_name'], $target_file ) ){
        "<br>Foto 4 do Boletim carregada";
  
        //Buscar Foto 4 do Boletim
        "<br><pre>" . 
        $QueryBuscarFotoBoletim4 = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_boletim4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Boletim4'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim4 = mysqli_query($connection, $QueryBuscarFotoBoletim4);
        $RowQrBuscarFotoBoletim4 = mysqli_num_rows($ExeQrBuscarFotoBoletim4);
  
        if( $RowQrBuscarFotoBoletim4 < 1 ){
          //Cadastrar Foto 4 do Boletim
          "<br><pre>" . 
          $QueryCadastrarFotoBoletim4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_boletim4',
              '$Protocolo',
              '$CPFAssociado',
              '$Boletim4'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoBoletim4 = mysqli_query($connection, $QueryCadastrarFotoBoletim4);
          if( $ExeQrCadastrarFotoBoletim4 ){
            "<br>Foto 4 do Boletim cadastrada, atualizar tb_boletim_ocorrencia";
  
            //Buscar Foto 4 do Boletim
            "<br><pre>" . 
            $QueryBuscarFotoBoletim4 = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_boletim4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Boletim4'
            ";
            "</pre>";
            $ExeQrBuscarFotoBoletim4 = mysqli_query($connection, $QueryBuscarFotoBoletim4);
            while($FotoBoletim4 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim4)){
              $IdBoletim4 = $FotoBoletim4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateBoletim4 = "
              UPDATE tb_boletim_ocorrencia
              SET
                foto4_boletim = '$IdBoletim4'
              WHERE 
                protocolo_boletim = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateBoletim4 = mysqli_query($connection, $QueryUpdateBoletim4);
            if( $ExeQrUpdateBoletim4 ){
              "<br>Foto 4 do Bometim atualizada";
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