<?php
  echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

  if( is_dir($PastaAssociado) ){
    echo "<br>Foto 2 da Parcela" . 
    $_FILES['print_foto_inadimplencia_2']['name'];

    $extensao = pathinfo( $_FILES['print_foto_inadimplencia_2']['name'] );
    echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
    echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
    echo "<br>Nome do arquivo: " . $Parcela2 = "Foto_Parcela2".$extensao;
    echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela2;
    echo "<br>";

    if( move_uploaded_file($_FILES['print_foto_inadimplencia_2']['tmp_name'], $target_file) ){
      echo "<br>Foto 2 das parcelas carregada, cadastrar foto";
      //BuscarCadastro da foto2 das parcelas
      echo "<br><pre>" . 
      $QueryBuscarFotoParcela2 = "
        SELECT * FROM 
          tb_fotos
        WHERE
          categoria_foto = 'foto_parcela2' &&
          protocolo_foto = '$Protocolo' &&
          nome_foto = '$Parcela2'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoParcela2 = mysqli_query($connection, $QueryBuscarFotoParcela2);
      $RowQrBuscarFotoParcela2 = mysqli_num_rows($ExeQrBuscarFotoParcela2);

      if( $RowQrBuscarFotoParcela2 < 1 ){
        //cadastrar foto
        echo "<br><pre>" . 
        $QueryCadastrarFotoParcela2 = "
          INSERT INTO tb_fotos(
            categoria_foto,
            protocolo_foto,
            pasta_foto,
            nome_foto
          )VALUES(
            'foto_parcela2',
            '$Protocolo',
            '$CPFAssociado',
            '$Parcela2'
          )
        ";
        echo "</pre>";

        $ExeQrCadastrarFotoParcela2 = mysqli_query($connection, $QueryCadastrarFotoParcela2);

        if( $ExeQrCadastrarFotoParcela2 ){
          echo "<br>Foto 2 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
          //BuscarCadastro da foto2 das parcelas
          echo "<br><pre>" . 
          $QueryBuscarFotoParcela2 = "
            SELECT * FROM 
              tb_fotos
            WHERE
              categoria_foto = 'foto_parcela2' &&
              protocolo_foto = '$Protocolo' &&
              nome_foto = '$Parcela2'
          ";
          echo "</pre>";
          $ExeQrBuscarFotoParcela2 = mysqli_query($connection, $QueryBuscarFotoParcela2);
          while( $Parcelas2 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela2) ){
            $IdParcela2 = $Parcelas2['id_foto'];
          }

          echo "<br><pre>" . 
          $QueryUpdateParcela2 = "
            UPDATE tb_financeiro_veiculo
            SET
              foto_parcela2 = '$IdParcela2'
            WHERE
              protocolo_financeiro = '$Protocolo'
          ";
          echo "</pre>";
          $ExeQrUpdateParcela2 = mysqli_query($connection, $QueryUpdateParcela2);
          if( $ExeQrUpdateParcela2 ){
            echo "<br>Foto da parcela 2 atualizado";
          }
        }
      }
    }
  }