<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 1 da Parcela" . 
      $_FILES['print_foto_inadimplencia_1']['name'];

      $extensao = pathinfo( $_FILES['print_foto_inadimplencia_1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Parcela1 = "Foto_Parcela1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela1;
      echo "<br>";

      if( move_uploaded_file($_FILES['print_foto_inadimplencia_1']['tmp_name'], $target_file) ){
        echo "<br>Foto 1 das parcelas carregada, cadastrar foto";
        //BuscarCadastro da foto1 das parcelas
        echo "<br><pre>" . 
        $QueryBuscarFotoParcela1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_parcela1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Parcela1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoParcela1 = mysqli_query($connection, $QueryBuscarFotoParcela1);
        $RowQrBuscarFotoParcela1 = mysqli_num_rows($ExeQrBuscarFotoParcela1);

        if( $RowQrBuscarFotoParcela1 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoParcela1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_parcela1',
              '$Protocolo',
              '$CPFAssociado',
              '$Parcela1'
            )
          ";
          echo "</pre>";

          $ExeQrCadastrarFotoParcela1 = mysqli_query($connection, $QueryCadastrarFotoParcela1);

          if( $ExeQrCadastrarFotoParcela1 ){
            echo "<br>Foto 1 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto1 das parcelas
            echo "<br><pre>" . 
            $QueryBuscarFotoParcela1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_parcela1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Parcela1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoParcela1 = mysqli_query($connection, $QueryBuscarFotoParcela1);
            while( $Parcelas1 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela1) ){
              $IdParcela1 = $Parcelas1['id_foto'];
            }

            echo "<br><pre>" . 
            $QueryUpdateParcela1 = "
              UPDATE tb_financeiro_veiculo
              SET
                foto_parcela1 = '$IdParcela1'
              WHERE
                protocolo_financeiro = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateParcela1 = mysqli_query($connection, $QueryUpdateParcela1);
            if( $ExeQrUpdateParcela1 ){
              echo "<br>Foto da parcela 1 atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD

    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 1 da Parcela" . 
      $_FILES['print_foto_inadimplencia_1']['name'];

      $extensao = pathinfo( $_FILES['print_foto_inadimplencia_1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Parcela1 = "Foto_Parcela1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela1;
      "<br>";

      if( move_uploaded_file($_FILES['print_foto_inadimplencia_1']['tmp_name'], $target_file) ){
        "<br>Foto 1 das parcelas carregada, cadastrar foto";
        //BuscarCadastro da foto1 das parcelas
        "<br><pre>" . 
        $QueryBuscarFotoParcela1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_parcela1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Parcela1'
        ";
        "</pre>";
        $ExeQrBuscarFotoParcela1 = mysqli_query($connection, $QueryBuscarFotoParcela1);
        $RowQrBuscarFotoParcela1 = mysqli_num_rows($ExeQrBuscarFotoParcela1);

        if( $RowQrBuscarFotoParcela1 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoParcela1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_parcela1',
              '$Protocolo',
              '$CPFAssociado',
              '$Parcela1'
            )
          ";
          "</pre>";

          $ExeQrCadastrarFotoParcela1 = mysqli_query($connection, $QueryCadastrarFotoParcela1);

          if( $ExeQrCadastrarFotoParcela1 ){
            "<br>Foto 1 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto1 das parcelas
            "<br><pre>" . 
            $QueryBuscarFotoParcela1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_parcela1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Parcela1'
            ";
            "</pre>";
            $ExeQrBuscarFotoParcela1 = mysqli_query($connection, $QueryBuscarFotoParcela1);
            while( $Parcelas1 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela1) ){
              $IdParcela1 = $Parcelas1['id_foto'];
            }

            "<br><pre>" . 
            $QueryUpdateParcela1 = "
              UPDATE tb_financeiro_veiculo
              SET
                foto_parcela1 = '$IdParcela1'
              WHERE
                protocolo_financeiro = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateParcela1 = mysqli_query($connection, $QueryUpdateParcela1);
            if( $ExeQrUpdateParcela1 ){
              "<br>Foto da parcela 1 atualizado";
            }
          }
        }
      }
    }
  }