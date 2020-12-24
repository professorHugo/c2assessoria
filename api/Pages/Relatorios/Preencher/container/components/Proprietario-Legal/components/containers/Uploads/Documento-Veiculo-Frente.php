<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto Frente Documento - Veículo: " . 
      $FotoDocumentoFrente = $_FILES['print_foto_frente_documento_veiculo']['name'];
      $extensao = pathinfo( $_FILES['print_foto_frente_documento_veiculo']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $DocumentoVeiculoFrente = "Documento_Frente_Veiculo".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVeiculoFrente;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_frente_documento_veiculo']['tmp_name'], $target_file ) ){
        echo "
          <br>A foto da frente do documento do veículo foi carregada. 
          Iniciar Cadastro no banco de dados e cadastrar proprietario legal, e atualizar o cadastro<br>
        ";
  
        //Buscar Cadastro da foto_frente_documento_veiculo
        echo "<br>Buscar Cadastro da foto_frente<pre>" . 
        $QueryBuscarFotoFrenteDocumentoVeiculo = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_frente_documento_veiculo' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVeiculoFrente'
        ";
        echo "</pre>";
  
        $ExeQrBuscarFotoFrenteDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoFrenteDocumentoVeiculo);
        $RowQrBuscarFotoFrenteDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoFrenteDocumentoVeiculo);
  
        if( $RowQrBuscarFotoFrenteDocumentoVeiculo < 1 ){
          echo "<br>Cadastrar Foto<pre>".
          $QueryCadastrarFotoFrenteVeiculo = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_frente_documento_veiculo',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVeiculoFrente'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoFrenteVeiculo = mysqli_query($connection, $QueryCadastrarFotoFrenteVeiculo);
  
          if( $ExeQrBuscarFotoFrenteDocumentoVeiculo ){
            echo "<br>Foto da frente do documento cadastrada, atualizar a tb_documento_veiculo";
            //Buscar a foto da frente do documento
            echo "<br><pre>" . 
              $QueryBuscarFotoFrenteDocumentoVeiculo = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_frente_documento_veiculo' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVeiculoFrente'
            ";
            echo "</pre>";
  
            $ExeQrBuscarFotoFrenteDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoFrenteDocumentoVeiculo);
            $RowQrBuscarFotoFrenteDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoFrenteDocumentoVeiculo);
  
            if( $RowQrBuscarFotoFrenteDocumentoVeiculo = 1 ){
              while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoFrenteDocumentoVeiculo)){
                $FotoFrente = $Foto['id_foto'];
              }
  
              echo "<br><pre>";
              echo $QueryUpdateDocumentoVeiculo1 = "
                UPDATE tb_documento_veiculo
                SET
                  foto_frente_documento = '$FotoFrente',
                  documento_preenchido = '$Documento'
                WHERE
                  protocolo_documento = '$Protocolo'
              ";
              echo "</pre>";
  
              $ExeQrUpdateDocumentoVeiculo1 = mysqli_query($connection, $QueryUpdateDocumentoVeiculo1);
              if( $ExeQrUpdateDocumentoVeiculo1 ){
                echo "<br>Update realizado na foto da frente do documento do veículo com id <b>$FotoFrente</b>";
  
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
       "<br>Foto Frente Documento - Veículo: " . 
      $FotoDocumentoFrente = $_FILES['print_foto_frente_documento_veiculo']['name'];
      $extensao = pathinfo( $_FILES['print_foto_frente_documento_veiculo']['name'] );
       "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
       "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
       "<br>Nome do arquivo: " . $DocumentoVeiculoFrente = "Documento_Frente_Veiculo".$extensao;
       "<br>Arquivo de destinho: " . $target_file = $target_dir . $DocumentoVeiculoFrente;
       "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_frente_documento_veiculo']['tmp_name'], $target_file ) ){
         "
          <br>A foto da frente do documento do veículo foi carregada. 
          Iniciar Cadastro no banco de dados e cadastrar proprietario legal, e atualizar o cadastro<br>
        ";
  
        //Buscar Cadastro da foto_frente_documento_veiculo
         "<br>Buscar Cadastro da foto_frente<pre>" . 
        $QueryBuscarFotoFrenteDocumentoVeiculo = "
          SELECT * FROM tb_fotos
          WHERE 
            categoria_foto = 'foto_frente_documento_veiculo' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$DocumentoVeiculoFrente'
        ";
         "</pre>";
  
        $ExeQrBuscarFotoFrenteDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoFrenteDocumentoVeiculo);
        $RowQrBuscarFotoFrenteDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoFrenteDocumentoVeiculo);
  
        if( $RowQrBuscarFotoFrenteDocumentoVeiculo < 1 ){
           "<br>Cadastrar Foto<pre>".
          $QueryCadastrarFotoFrenteVeiculo = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_frente_documento_veiculo',
              '$Protocolo',
              '$CPFAssociado',
              '$DocumentoVeiculoFrente'
            )
          ";
           "</pre>";
          $ExeQrCadastrarFotoFrenteVeiculo = mysqli_query($connection, $QueryCadastrarFotoFrenteVeiculo);
  
          if( $ExeQrBuscarFotoFrenteDocumentoVeiculo ){
             "<br>Foto da frente do documento cadastrada, atualizar a tb_documento_veiculo";
            //Buscar a foto da frente do documento
             "<br><pre>" . 
              $QueryBuscarFotoFrenteDocumentoVeiculo = "
              SELECT * FROM tb_fotos
              WHERE 
                categoria_foto = 'foto_frente_documento_veiculo' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$DocumentoVeiculoFrente'
            ";
             "</pre>";
  
            $ExeQrBuscarFotoFrenteDocumentoVeiculo = mysqli_query($connection, $QueryBuscarFotoFrenteDocumentoVeiculo);
            $RowQrBuscarFotoFrenteDocumentoVeiculo = mysqli_num_rows($ExeQrBuscarFotoFrenteDocumentoVeiculo);
  
            if( $RowQrBuscarFotoFrenteDocumentoVeiculo = 1 ){
              while($Foto = mysqli_fetch_assoc($ExeQrBuscarFotoFrenteDocumentoVeiculo)){
                $FotoFrente = $Foto['id_foto'];
              }
  
               "<br><pre>";
               $QueryUpdateDocumentoVeiculo1 = "
                UPDATE tb_documento_veiculo
                SET
                  foto_frente_documento = '$FotoFrente',
                  documento_preenchido = '$Documento'
                WHERE
                  protocolo_documento = '$Protocolo'
              ";
               "</pre>";
  
              $ExeQrUpdateDocumentoVeiculo1 = mysqli_query($connection, $QueryUpdateDocumentoVeiculo1);
              if( $ExeQrUpdateDocumentoVeiculo1 ){
                 "<br>Update realizado na foto da frente do documento do veículo com id <b>$FotoFrente</b>";
  
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