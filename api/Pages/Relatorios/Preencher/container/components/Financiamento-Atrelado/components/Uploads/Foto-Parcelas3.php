<?php
  echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

  if( is_dir($PastaAssociado) ){
    echo "<br>Foto 3 da Parcela" . 
    $_FILES['print_foto_inadimplencia_3']['name'];

    $extensao = pathinfo( $_FILES['print_foto_inadimplencia_3']['name'] );
    echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
    echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
    echo "<br>Nome do arquivo: " . $Parcela3 = "Foto_Parcela3".$extensao;
    echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela3;
    echo "<br>";

    if( move_uploaded_file($_FILES['print_foto_inadimplencia_3']['tmp_name'], $target_file) ){
      echo "<br>Foto 3 das parcelas carregada, cadastrar foto";
      //BuscarCadastro da foto3 das parcelas
      echo "<br><pre>" . 
      $QueryBuscarFotoParcela3 = "
        SELECT * FROM 
          tb_fotos
        WHERE
          categoria_foto = 'foto_parcela3' &&
          protocolo_foto = '$Protocolo' &&
          nome_foto = '$Parcela3'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoParcela3 = mysqli_query($connection, $QueryBuscarFotoParcela3);
      $RowQrBuscarFotoParcela3 = mysqli_num_rows($ExeQrBuscarFotoParcela3);

      if( $RowQrBuscarFotoParcela3 < 1 ){
        //cadastrar foto
        echo "<br><pre>" . 
        $QueryCadastrarFotoParcela3 = "
          INSERT INTO tb_fotos(
            categoria_foto,
            protocolo_foto,
            pasta_foto,
            nome_foto
          )VALUES(
            'foto_parcela3',
            '$Protocolo',
            '$CPFAssociado',
            '$Parcela3'
          )
        ";
        echo "</pre>";

        $ExeQrCadastrarFotoParcela3 = mysqli_query($connection, $QueryCadastrarFotoParcela3);

        if( $ExeQrCadastrarFotoParcela3 ){
          echo "<br>Foto 3 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
          //BuscarCadastro da foto3 das parcelas
          echo "<br><pre>" . 
          $QueryBuscarFotoParcela3 = "
            SELECT * FROM 
              tb_fotos
            WHERE
              categoria_foto = 'foto_parcela3' &&
              protocolo_foto = '$Protocolo' &&
              nome_foto = '$Parcela3'
          ";
          echo "</pre>";
          $ExeQrBuscarFotoParcela3 = mysqli_query($connection, $QueryBuscarFotoParcela3);
          while( $Parcelas3 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela3) ){
            $IdParcela3 = $Parcelas3['id_foto'];
          }

          echo "<br><pre>" . 
          $QueryUpdateParcela3 = "
            UPDATE tb_financeiro_veiculo
            SET
              foto_parcela3 = '$IdParcela3'
            WHERE
              protocolo_financeiro = '$Protocolo'
          ";
          echo "</pre>";
          $ExeQrUpdateParcela3 = mysqli_query($connection, $QueryUpdateParcela3);
          if( $ExeQrUpdateParcela3 ){
            echo "<br>Foto da parcela 3 atualizado";
          }
        }
      }
    }
  }