<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";
    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 da declaração" . 
      $_FILES['print_foto_declaracao_associado1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_associado1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao1 = "Declaracao_Associado1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao_associado1']['tmp_name'], $target_file) ){
        echo "<br>Foto 1 da declaração carregada, Atualizar cadastro do Associado";
  
        //BuscarCadastro da foto1 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_associado1' &&
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
              'declaracao_associado1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastraFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
          if( $ExeQrCadastraFotoDeclaracao1 ){
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_associado1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
            while( $FotoDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
              $IdDeclaracao1 = $FotoDeclaracao1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao1 = "
              UPDATE tb_associados
              SET declaracao1 = '$IdDeclaracao1'
              WHERE cpf_associado = '$CPFAssociado'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
  
            if( $ExeQrUpdateDeclaracao1 ){
              echo "<br>Foto 1 da declaração do Associado atualizado";
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
      $_FILES['print_foto_declaracao_associado1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_associado1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao1 = "Declaracao_Associado1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao_associado1']['tmp_name'], $target_file) ){
        "<br>Foto 1 da declaração carregada, Atualizar cadastro do Associado";
  
        //BuscarCadastro da foto1 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_associado1' &&
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
              'declaracao_associado1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          "</pre>";
  
          $ExeQrCadastraFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
          if( $ExeQrCadastraFotoDeclaracao1 ){
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_associado1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao1'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
            while( $FotoDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
              $IdDeclaracao1 = $FotoDeclaracao1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao1 = "
              UPDATE tb_associados
              SET declaracao1 = '$IdDeclaracao1'
              WHERE cpf_associado = '$CPFAssociado'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
  
            if( $ExeQrUpdateDeclaracao1 ){
              "<br>Foto 1 da declaração do Associado atualizado";
            }
          }
        }
      }
    }
  }