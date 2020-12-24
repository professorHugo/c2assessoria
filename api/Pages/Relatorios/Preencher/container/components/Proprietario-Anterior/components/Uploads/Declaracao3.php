<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 da declaração: " . 
      $_FILES['print_foto_declaracao_proprietario3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_proprietario3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao3 = "Declaracao_Proprietario_Anterior3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da Declaração carregada, Cadastrar foto";
  
        //BuscarCadastro da foto3 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario_anterior3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
        $RowQrBuscarFotoDeclaracao3 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao3);
  
        if( $RowQrBuscarFotoDeclaracao3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'declaracao_proprietario_anterior3',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoDeclaracao3 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao3);
          if( $ExeQrCadastrarFotoDeclaracao3 ){
            echo "<br>Declaração Cadastrada, atualizar tb_proprietario_anterior";
            
            //Update
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario_anterior3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
  
            while( $FotoDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao3) ){
              $IdFoto3 = $FotoDeclaracao3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao3 = "
              UPDATE tb_proprietario_anterior
              SET
                declaracao3 = '$IdFoto3'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao3 = mysqli_query($connection, $QueryUpdateDeclaracao3);
            if( $ExeQrUpdateDeclaracao3 ){
              echo "<br>Foto 3 da declaração atualizada";
            }
          }
        }
      }
    }
  }else{

    //PROD

    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 3 da declaração: " . 
      $_FILES['print_foto_declaracao_proprietario3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_proprietario3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao3 = "Declaracao_Proprietario_Anterior3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_declaracao_proprietario3']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da Declaração carregada, Cadastrar foto";
  
        //BuscarCadastro da foto3 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_proprietario_anterior3' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao3'
        ";
        "</pre>";
        $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
        $RowQrBuscarFotoDeclaracao3 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao3);
  
        if( $RowQrBuscarFotoDeclaracao3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'declaracao_proprietario_anterior3',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoDeclaracao3 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao3);
          if( $ExeQrCadastrarFotoDeclaracao3 ){
            "<br>Declaração Cadastrada, atualizar tb_proprietario_anterior";
            
            //Update
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_proprietario_anterior3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao3'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
  
            while( $FotoDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao3) ){
              $IdFoto3 = $FotoDeclaracao3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao3 = "
              UPDATE tb_proprietario_anterior
              SET
                declaracao3 = '$IdFoto3'
              WHERE
                protocolo_proprietario = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao3 = mysqli_query($connection, $QueryUpdateDeclaracao3);
            if( $ExeQrUpdateDeclaracao3 ){
              "<br>Foto 3 da declaração atualizada";
            }
          }
        }
      }
    }
  }