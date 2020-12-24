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
      echo "<br>Nome do arquivo: " . $Declaracao1 = "Declaracao_Proprietario1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da declaração carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario1' &&
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
              'declaracao_proprietario1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
          if( $ExeQrCadastrarFotoDeclaracao1 ){
            echo "<br>Foto1 da Declaração cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto1 da declaração
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
  
            while( $Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
              $FotoDeclaracao = $Foto['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao1 = "
              UPDATE tb_proprietario_legal
              SET foto_declaracao_proprietario1 = '$FotoDeclaracao'
              WHERE protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
  
            if( $ExeQrUpdateDeclaracao1 ){
              echo "<br>Foto 1 da declaração do Proprietario atualizado";
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
      "<br>Nome do arquivo: " . $Declaracao1 = "Declaracao_Proprietario1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da declaração carregada, Atualizar cadastro do proprietario anterior";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario1' &&
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
              'declaracao_proprietario1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
          if( $ExeQrCadastrarFotoDeclaracao1 ){
            "<br>Foto1 da Declaração cadastrada, atualizar tb_proprietario_legal";
  
            //BuscarCadastro da foto1 da declaração
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao1'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
  
            while( $Foto = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
              $FotoDeclaracao = $Foto['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao1 = "
              UPDATE tb_proprietario_legal
              SET foto_declaracao_proprietario1 = '$FotoDeclaracao'
              WHERE protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
  
            if( $ExeQrUpdateDeclaracao1 ){
              "<br>Foto 1 da declaração do Proprietario atualizado";
            }
  
          }
        }
      }
    }
  }
