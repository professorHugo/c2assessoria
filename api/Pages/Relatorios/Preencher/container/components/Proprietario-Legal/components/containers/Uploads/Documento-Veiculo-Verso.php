<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto Verso Documento - Veículo: " . 
      $FotoDocumentoVerso = $_FILES['print_foto_verso_documento_veiculo']['name'];
      $extensao = pathinfo( $_FILES['print_foto_verso_documento_veiculo']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoVeiculoVerso = "Documento_Verso_Veiculo".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVeiculoVerso;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_verso_documento_veiculo']['tmp_name'], $target_file ) ){
        echo "
          <br>A foto do verso do documento do veículo foi carregada. 
          Iniciar Cadastro no banco de dados e cadastrar proprietario legal, e atualizar o cadastro<br>
        ";
  
        //Buscar Cadastro da foto_verso_documento_veiculo
        echo "<br>Buscar Cadastro da foto_verso<pre>" . 
        $QueryBuscarFotoVersoDocumentoVeiculo = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_verso_documento_veiculo' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVeiculoVerso'
        ";
        echo "</pre>";
  
        $ExeQrBuscarFotoVersoDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoVersoDocumentoVeiculo);
        $RowQrBuscarFotoVersoDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoVersoDocumentoVeiculo);
  
        if( $RowQrBuscarFotoVersoDocumentoVeiculo < 1 ){
          echo "<br>Cadastrar Foto<pre>".
          $QueryCadastrarFotoVersoVeiculo = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_verso_documento_veiculo',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVeiculoVerso'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoVersoVeiculo = mysqli_query($connection, $QueryCadastrarFotoVersoVeiculo);
  
          if( $ExeQrBuscarFotoVersoDocumentoVeiculo ){
            echo "<br>Foto do verso do documento cadastrada, atualizar a tb_documento_veiculo";
            //Buscar a foto da Verso do documento
            echo "<br><pre>" . 
              $QueryBuscarFotoVersoDocumentoVeiculo = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_verso_documento_veiculo' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVeiculoVerso'
            ";
            echo "</pre>";
  
            $ExeQrBuscarFotoVersoDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoVersoDocumentoVeiculo);
            $RowQrBuscarFotoVersoDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoVersoDocumentoVeiculo);
  
            if( $RowQrBuscarFotoVersoDocumentoVeiculo = 1 ){
              while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoVersoDocumentoVeiculo)){
                $FotoVerso = $Foto['id_foto'];
              }
  
              echo "<br><pre>";
              echo $QueryUpdateDocumentoVeiculo1 = "
                UPDATE tb_documento_veiculo
                SET
                  foto_verso_documento = '$FotoVerso'
                WHERE
                  protocolo_documento = '$Protocolo'
              ";
              echo "</pre>";
  
              $ExeQrUpdateDocumentoVeiculo1 = mysqli_query($connection, $QueryUpdateDocumentoVeiculo1);
              if( $ExeQrUpdateDocumentoVeiculo1 ){
                echo "<br>Update realizado na foto do verso do documento do veículo com id <b>$FotoVerso</b>";
  
                //Update No veículo
  
                echo "<br><pre>". 
                $QueryBuscarDocumento = "
                  SELECT * FROM 
                    tb_documento_veiculo
                  WHERE 
                    protocolo_documento = '$Protocolo'
                ";
                echo "</pre>";
  
                $ExeQrBuscarDocumento = mysqli_query($connection, $QueryBuscarDocumento);
                $RowQrBuscarDocumento = mysqli_num_rows($ExeQrBuscarDocumento);
  
                if( $RowQrBuscarDocumento = 1 ){
                  while( $Documento = mysqli_fetch_assoc($ExeQrBuscarDocumento) ){
                    $IdDocumento = $Documento['id_documento'];
                  }
                  echo "<br><pre>" . 
                  $QueryUpdateVeiculo = "
                    UPDATE 
                      tb_veiculos
                    SET
                      documento_veiculo = '$IdDocumento'
                    WHERE
                      protocolo_evento = '$Protocolo' &&
                      placa_veiculo = '$PlacaVeiculo'
                  ";
                  echo "</pre>";
  
                  $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
  
                  if( $ExeQrUpdateVeiculo ){
                    echo "<br>Documento do veículo atualizado";
                  }
                }
              }else{
                echo "<br>Erro: " . mysqli_error($connection);
              }
            }
  
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto Verso Documento - Veículo: " . 
      $FotoDocumentoVerso = $_FILES['print_foto_verso_documento_veiculo']['name'];
      $extensao = pathinfo( $_FILES['print_foto_verso_documento_veiculo']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $DocumentoVeiculoVerso = "Documento_Verso_Veiculo".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVeiculoVerso;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_verso_documento_veiculo']['tmp_name'], $target_file ) ){
        "
          <br>A foto do verso do documento do veículo foi carregada. 
          Iniciar Cadastro no banco de dados e cadastrar proprietario legal, e atualizar o cadastro<br>
        ";
  
        //Buscar Cadastro da foto_verso_documento_veiculo
        "<br>Buscar Cadastro da foto_verso<pre>" . 
        $QueryBuscarFotoVersoDocumentoVeiculo = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_verso_documento_veiculo' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVeiculoVerso'
        ";
        "</pre>";
  
        $ExeQrBuscarFotoVersoDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoVersoDocumentoVeiculo);
        $RowQrBuscarFotoVersoDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoVersoDocumentoVeiculo);
  
        if( $RowQrBuscarFotoVersoDocumentoVeiculo < 1 ){
          "<br>Cadastrar Foto<pre>".
          $QueryCadastrarFotoVersoVeiculo = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_verso_documento_veiculo',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVeiculoVerso'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoVersoVeiculo = mysqli_query($connection, $QueryCadastrarFotoVersoVeiculo);
  
          if( $ExeQrBuscarFotoVersoDocumentoVeiculo ){
            "<br>Foto do verso do documento cadastrada, atualizar a tb_documento_veiculo";
            //Buscar a foto da Verso do documento
            "<br><pre>" . 
              $QueryBuscarFotoVersoDocumentoVeiculo = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_verso_documento_veiculo' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVeiculoVerso'
            ";
            "</pre>";
  
            $ExeQrBuscarFotoVersoDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoVersoDocumentoVeiculo);
            $RowQrBuscarFotoVersoDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoVersoDocumentoVeiculo);
  
            if( $RowQrBuscarFotoVersoDocumentoVeiculo = 1 ){
              while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoVersoDocumentoVeiculo)){
                $FotoVerso = $Foto['id_foto'];
              }
  
              "<br><pre>";
              $QueryUpdateDocumentoVeiculo1 = "
                UPDATE tb_documento_veiculo
                SET
                  foto_verso_documento = '$FotoVerso'
                WHERE
                  protocolo_documento = '$Protocolo'
              ";
              "</pre>";
  
              $ExeQrUpdateDocumentoVeiculo1 = mysqli_query($connection, $QueryUpdateDocumentoVeiculo1);
              if( $ExeQrUpdateDocumentoVeiculo1 ){
                "<br>Update realizado na foto do verso do documento do veículo com id <b>$FotoVerso</b>";
  
                //Update No veículo
  
                "<br><pre>". 
                $QueryBuscarDocumento = "
                  SELECT * FROM 
                    tb_documento_veiculo
                  WHERE 
                    protocolo_documento = '$Protocolo'
                ";
                "</pre>";
  
                $ExeQrBuscarDocumento = mysqli_query($connection, $QueryBuscarDocumento);
                $RowQrBuscarDocumento = mysqli_num_rows($ExeQrBuscarDocumento);
  
                if( $RowQrBuscarDocumento = 1 ){
                  while( $Documento = mysqli_fetch_assoc($ExeQrBuscarDocumento) ){
                    $IdDocumento = $Documento['id_documento'];
                  }
                  "<br><pre>" . 
                  $QueryUpdateVeiculo = "
                    UPDATE 
                      tb_veiculos
                    SET
                      documento_veiculo = '$IdDocumento'
                    WHERE
                      protocolo_evento = '$Protocolo' &&
                      placa_veiculo = '$PlacaVeiculo'
                  ";
                  "</pre>";
  
                  $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
  
                  if( $ExeQrUpdateVeiculo ){
                    "<br>Documento do veículo atualizado";
                  }
                }
              }else{
                "<br>Erro: " . mysqli_error($connection);
              }
            }
  
          }
        }
      }
    }
  }