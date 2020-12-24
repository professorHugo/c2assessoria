<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 da declaração" . 
      $_FILES['print_foto_declaracao_proprietario1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_proprietario1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao1 = "Declaracao_Proprietario_Anterior1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da Declaração carregada, Cadastrar foto";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario_anterior1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
        $RowQrBuscarFotoDeclaracao1 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao1);
  
        if( $RowQrBuscarFotoDeclaracao1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'declaracao_proprietario_anterior1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
          if( $ExeQrCadastrarFotoDeclaracao1 ){
            echo "<br>Declaração Cadastrada, atualizar tb_proprietario_anterior";
            
            //Update
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario_anterior1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
  
            while( $FotoDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
              $IdFoto1 = $FotoDeclaracao1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao1 = "
              UPDATE tb_proprietario_anterior
              SET
                declaracao1 = '$IdFoto1'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
            if( $ExeQrUpdateDeclaracao1 ){
              echo "<br>Foto 1 da declaração atualizada";
            }
          }
        }
      }
    }
  }else{
    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 1 da declaração" . 
      $_FILES['print_foto_declaracao_proprietario1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_proprietario1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao1 = "Declaracao_Proprietario_Anterior1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da Declaração carregada, Cadastrar foto";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario_anterior1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao1'
        ";
        "</pre>";
        $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
        $RowQrBuscarFotoDeclaracao1 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao1);
  
        if( $RowQrBuscarFotoDeclaracao1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'declaracao_proprietario_anterior1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
          if( $ExeQrCadastrarFotoDeclaracao1 ){
            "<br>Declaração Cadastrada, atualizar tb_proprietario_anterior";
            
            //Update
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario_anterior1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao1'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
  
            while( $FotoDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
              $IdFoto1 = $FotoDeclaracao1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao1 = "
              UPDATE tb_proprietario_anterior
              SET
                declaracao1 = '$IdFoto1'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
            if( $ExeQrUpdateDeclaracao1 ){
              "<br>Foto 1 da declaração atualizada";
            }
          }
        }
      }
    }
  }