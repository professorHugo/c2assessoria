<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";
    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 3 da declaração" . 
      $_FILES['print_foto_declaracao_condutor3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_condutor3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Declaracao3 = "Declaracao_Condutor3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao3;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao_condutor3']['tmp_name'], $target_file) ){
        echo "<br>Foto 3 da declaração carregada, Atualizar cadastro do condutor";
  
        //BuscarCadastro da foto3 da declaração
        echo "<br><pre>" . 
        $QueryBuscarFotoDeclaracao3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_condutor3' &&
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
              'declaracao_condutor3',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao3'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastraFotoDeclaracao3 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao3);
          if( $ExeQrCadastraFotoDeclaracao3 ){
            echo "<br><pre>" . 
            $QueryBuscarFotoDeclaracao3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_condutor3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
            while( $FotoDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao3) ){
              $IdDeclaracao3 = $FotoDeclaracao3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateDeclaracao3 = "
              UPDATE tb_condutores
              SET declaracao3 = '$IdDeclaracao3'
              WHERE protocolo_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateDeclaracao3 = mysqli_query($connection, $QueryUpdateDeclaracao3);
  
            if( $ExeQrUpdateDeclaracao3 ){
              echo "<br>Foto 3 da declaração do Condutor atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";
    if( is_dir($PastaAssociado) ){
      "<br>Foto 3 da declaração" . 
      $_FILES['print_foto_declaracao_condutor3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_declaracao_condutor3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Declaracao3 = "Declaracao_Condutor3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Declaracao3;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_declaracao_condutor3']['tmp_name'], $target_file) ){
        "<br>Foto 3 da declaração carregada, Atualizar cadastro do condutor";
  
        //BuscarCadastro da foto3 da declaração
        "<br><pre>" . 
        $QueryBuscarFotoDeclaracao3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'declaracao_condutor3' &&
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
              'declaracao_condutor3',
              '$Protocolo',
              '$CPFAssociado',
              '$Declaracao3'
            )
          ";
          "</pre>";
  
          $ExeQrCadastraFotoDeclaracao3 = mysqli_query($connection, $QueryCadastrarFotoDeclaracao3);
          if( $ExeQrCadastraFotoDeclaracao3 ){
            "<br><pre>" . 
            $QueryBuscarFotoDeclaracao3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'declaracao_condutor3' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Declaracao3'
            ";
            "</pre>";
            $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
            while( $FotoDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao3) ){
              $IdDeclaracao3 = $FotoDeclaracao3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateDeclaracao3 = "
              UPDATE tb_condutores
              SET declaracao3 = '$IdDeclaracao3'
              WHERE protocolo_evento = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateDeclaracao3 = mysqli_query($connection, $QueryUpdateDeclaracao3);
  
            if( $ExeQrUpdateDeclaracao3 ){
              "<br>Foto 3 da declaração do Condutor atualizado";
            }
          }
        }
      }
    }
  }