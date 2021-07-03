<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";
    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 2 da declaração" . 
      $_FILES['print_foto_declaracao_condutor2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_condutor2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao2 = "Declaracao_Condutor2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao2;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao_condutor2']['tmp_name'], $target_file) ){
        echo "<br>Foto 2 da declaração carregada, Atualizar cadastro do condutor";
  
        //BuscarCadastro da foto2 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_condutor2' &&
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
              'declaracao_condutor2',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao2'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastraFotoDeclaracao2 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao2);
          if( $ExeQrCadastraFotoDeclaracao2 ){
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_condutor2' &&
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
              UPDATE tb_condutores
              SET declaracao2 = '$IdDeclaracao2'
              WHERE protocolo_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao2 = mysqli_query($connection, $QueryUpdateDeclaracao2);
  
            if( $ExeQrUpdateDeclaracao2 ){
              echo "<br>Foto 2 da declaração do Condutor atualizado";
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
      $_FILES['print_foto_declaracao_condutor2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_condutor2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao2 = "Declaracao_Condutor2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao2;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao_condutor2']['tmp_name'], $target_file) ){
        "<br>Foto 2 da declaração carregada, Atualizar cadastro do condutor";
  
        //BuscarCadastro da foto2 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_condutor2' &&
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
              'declaracao_condutor2',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao2'
            )
          ";
          "</pre>";
  
          $ExeQrCadastraFotoDeclaracao2 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao2);
          if( $ExeQrCadastraFotoDeclaracao2 ){
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_condutor2' &&
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
              UPDATE tb_condutores
              SET declaracao2 = '$IdDeclaracao2'
              WHERE protocolo_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao2 = mysqli_query($connection, $QueryUpdateDeclaracao2);
  
            if( $ExeQrUpdateDeclaracao2 ){
              "<br>Foto 2 da declaração do Condutor atualizado";
            }
          }
        }
      }
    }
  }