<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 da declaração" . 
      $_FILES['print_foto_declaracao_proprietario2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_proprietario2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao2 = "Declaracao_Proprietario2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 da declaração carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
        $RowQrBuscarFotoDeclaracao2 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao2);
  
        if( $RowQrBuscarFotoDeclaracao2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'declaracao_proprietario2',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoDeclaracao2 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao2);
          if( $ExeQrCadastrarFotoDeclaracao2 ){
            echo "<br>Foto 2 da Declaração cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 2 da declaração
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
  
            while( $Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao2) ){
              $FotoDeclaracao = $Foto['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao2 = "
              UPDATE 
                tb_proprietario_legal
              SET 
                foto_declaracao_proprietario2 = '$FotoDeclaracao'
              WHERE 
                protocolo_proprietario = '$Protocolo' &&
                nome_proprietario = '$NomeProprietario'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao2 = mysqli_query($connection, $QueryUpdateDeclaracao2);
  
            if( $ExeQrUpdateDeclaracao2 ){
              echo "<br>Foto 2 da declaração do Proprietario atualizado";
            }
  
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 2 da declaração" . 
      $_FILES['print_foto_declaracao_proprietario2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_proprietario2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao2 = "Declaracao_Proprietario2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 da declaração carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao2'
        ";
        "</pre>";
        $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
        $RowQrBuscarFotoDeclaracao2 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao2);
  
        if( $RowQrBuscarFotoDeclaracao2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'declaracao_proprietario2',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoDeclaracao2 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao2);
          if( $ExeQrCadastrarFotoDeclaracao2 ){
            "<br>Foto 2 da Declaração cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto 2 da declaração
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao2'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
  
            while( $Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao2) ){
              $FotoDeclaracao = $Foto['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao2 = "
              UPDATE 
                tb_proprietario_legal
              SET 
                foto_declaracao_proprietario2 = '$FotoDeclaracao'
              WHERE 
                protocolo_proprietario = '$Protocolo' &&
                nome_proprietario = '$NomeProprietario'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao2 = mysqli_query($connection, $QueryUpdateDeclaracao2);
  
            if( $ExeQrUpdateDeclaracao2 ){
              "<br>Foto 2 da declaração do Proprietario atualizado";
            }
  
          }
        }
      }
    }
  }