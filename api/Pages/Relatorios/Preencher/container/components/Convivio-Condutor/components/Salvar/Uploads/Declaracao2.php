<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 da Declaração" . 
      $_FILES['print_foto_declaracao2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao2 = "Foto_Declaracao2_Entrevistado".$Entrevistado.$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao2;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao2']['tmp_name'], $target_file) ){
        echo "<br>Foto 2 da Declaração carregada, cadastrar foto";
        //BuscarCadastro da foto 2 da Declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_declaracao_entrevistado2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
        $RowQrBuscarFotoDeclaracao2 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao2);
  
        if( $RowQrBuscarFotoDeclaracao2 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_declaracao_entrevistado2',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao2'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoDeclaracao2 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao2);
  
          if( $ExeQrCadastrarFotoDeclaracao2 ){
            echo "<br>Foto 2 da Declaração cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto 2 da Declaraçãos
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_declaracao_entrevistado2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
            while( $FotoDeclaracao2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao2) ){
              $IdDeclaracao2 = $FotoDeclaracao2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao2 = "
              UPDATE tb_entrevistados
              SET
                foto2_entrevistado = '$IdDeclaracao2'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao2 = mysqli_query($connection, $QueryUpdateDeclaracao2);
            if( $ExeQrUpdateDeclaracao2 ){
              echo "<br>Foto da Declaração 2 atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 2 da Declaração" . 
      $_FILES['print_foto_declaracao2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao2 = "Foto_Declaracao2_Entrevistado".$Entrevistado.$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao2;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao2']['tmp_name'], $target_file) ){
        "<br>Foto 2 da Declaração carregada, cadastrar foto";
        //BuscarCadastro da foto 2 da Declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_declaracao_entrevistado2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Declaracao2'
        ";
        "</pre>";
        $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
        $RowQrBuscarFotoDeclaracao2 = mysqli_num_rows($ExeQrBuscarFotoDeclaracao2);
  
        if( $RowQrBuscarFotoDeclaracao2 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoDeclaracao2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_declaracao_entrevistado2',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao2'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoDeclaracao2 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao2);
  
          if( $ExeQrCadastrarFotoDeclaracao2 ){
            "<br>Foto 2 da Declaração cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto 2 da Declaraçãos
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_declaracao_entrevistado2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao2'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
            while( $FotoDeclaracao2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao2) ){
              $IdDeclaracao2 = $FotoDeclaracao2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao2 = "
              UPDATE tb_entrevistados
              SET
                foto2_entrevistado = '$IdDeclaracao2'
              WHERE
                protocolo_entrevistados = '$Protocolo' &&
                id_entrevistado = '$Entrevistado'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao2 = mysqli_query($connection, $QueryUpdateDeclaracao2);
            if( $ExeQrUpdateDeclaracao2 ){
              "<br>Foto da Declaração 2 atualizado";
            }
          }
        }
      }
    }
  }