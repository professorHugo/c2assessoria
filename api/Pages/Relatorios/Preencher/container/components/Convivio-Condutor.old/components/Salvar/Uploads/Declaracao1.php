<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 da Declaração" . 
      $_FILES['print_foto_declaracao1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao1 = "Foto_Declaracao1_Entrevistado".$Entrevistado.$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao1']['tmp_name'], $target_file) ){
        echo "<br>Foto 1 da Declaração carregada, cadastrar foto";
        //BuscarCadastro da foto 1 da Declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_declaracao_entrevistado1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
        $RowQrBuscarFotoDeclaracao1 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao1);
  
        if( $RowQrBuscarFotoDeclaracao1 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_declaracao_entrevistado1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
  
          if( $ExeQrCadastrarFotoDeclaracao1 ){
            echo "<br>Foto 1 da Declaração cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto 1 da Declaraçãos
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_declaracao_entrevistado1' &&
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
              UPDATE tb_entrevistados
              SET
                foto1_entrevistado = '$IdDeclaracao1'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
            if( $ExeQrUpdateDeclaracao1 ){
              echo "<br>Foto da Declaração 1 atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 1 da Declaração" . 
      $_FILES['print_foto_declaracao1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao1 = "Foto_Declaracao1_Entrevistado".$Entrevistado.$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao1;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao1']['tmp_name'], $target_file) ){
        "<br>Foto 1 da Declaração carregada, cadastrar foto";
        //BuscarCadastro da foto 1 da Declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_declaracao_entrevistado1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao1'
        ";
        "</pre>";
        $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
        $RowQrBuscarFotoDeclaracao1 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao1);
  
        if( $RowQrBuscarFotoDeclaracao1 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_declaracao_entrevistado1',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao1'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDeclaracao1 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao1);
  
          if( $ExeQrCadastrarFotoDeclaracao1 ){
            "<br>Foto 1 da Declaração cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto 1 da Declaraçãos
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_declaracao_entrevistado1' &&
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
              UPDATE tb_entrevistados
              SET
                foto1_entrevistado = '$IdDeclaracao1'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao1 = mysqli_query($connection, $QueryUpdateDeclaracao1);
            if( $ExeQrUpdateDeclaracao1 ){
              "<br>Foto da Declaração 1 atualizado";
            }
          }
        }
      }
    }
  }