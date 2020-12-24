<?php
  echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

  if( is_dir($PastaAssociado) ){
    echo "<br>Foto 5 da Parcela" . 
    $_FILES['print_foto_inadimplencia_5']['name'];

    $extensao = pathinfo( $_FILES['print_foto_inadimplencia_5']['name'] );
    echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
    echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
    echo "<br>Nome do arquivo: " . $Parcela5 = "Foto_Parcela5".$extensao;
    echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela5;
    echo "<br>";

    if( move_uploaded_file($_FILES['print_foto_inadimplencia_5']['tmp_name'], $target_file) ){
      echo "<br>Foto 5 das parcelas carregada, cadastrar foto";
      //BuscarCadastro da foto5 das parcelas
      echo "<br><pre>" . 
      $QueryBuscarFotoParcela5 = "
        SELECT * FROM 
          tb_fotos
        WHERE
          categoria_foto = 'foto_parcela5' &&
          protocolo_foto = '$Protocolo' &&
          nome_foto = '$Parcela5'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoParcela5 = mysqli_query($connection, $QueryBuscarFotoParcela5);
      $RowQrBuscarFotoParcela5 = mysqli_num_rows($ExeQrBuscarFotoParcela5);

      if( $RowQrBuscarFotoParcela5 < 1 ){
        //cadastrar foto
        echo "<br><pre>" . 
        $QueryCadastrarFotoParcela5 = "
          INSERT INTO tb_fotos(
            categoria_foto,
            protocolo_foto,
            pasta_foto,
            nome_foto
          )VALUES(
            'foto_parcela5',
            '$Protocolo',
            '$CPFAssociado',
            '$Parcela5'
          )
        ";
        echo "</pre>";

        $ExeQrCadastrarFotoParcela5 = mysqli_query($connection, $QueryCadastrarFotoParcela5);

        if( $ExeQrCadastrarFotoParcela5 ){
          echo "<br>Foto 5 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
          //BuscarCadastro da foto5 das parcelas
          echo "<br><pre>" . 
          $QueryBuscarFotoParcela5 = "
            SELECT * FROM 
              tb_fotos
            WHERE
              categoria_foto = 'foto_parcela5' &&
              protocolo_foto = '$Protocolo' &&
              nome_foto = '$Parcela5'
          ";
          echo "</pre>";
          $ExeQrBuscarFotoParcela5 = mysqli_query($connection, $QueryBuscarFotoParcela5);
          while( $Parcelas5 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela5) ){
            $IdParcela5 = $Parcelas5['id_foto'];
          }

          echo "<br><pre>" . 
          $QueryUpdateParcela5 = "
            UPDATE tb_financeiro_veiculo
            SET
              foto_parcela5 = '$IdParcela5'
            WHERE
              protocolo_financeiro = '$Protocolo'
          ";
          echo "</pre>";
          $ExeQrUpdateParcela5 = mysqli_query($connection, $QueryUpdateParcela5);
          if( $ExeQrUpdateParcela5 ){
            echo "<br>Foto da parcela 5 atualizado";
          }
        }
      }
    }
  }