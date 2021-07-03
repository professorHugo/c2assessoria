<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 6 da Parcela" . 
      $_FILES['print_foto_inadimplencia_6']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_inadimplencia_6']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Parcela6 = "Foto_Parcela6".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela6;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_inadimplencia_6']['tmp_name'], $target_file) ){
        echo "<br>Foto 6 das parcelas carregada, cadastrar foto";
        //BuscarCadastro da foto6 das parcelas
        echo "<br><pre>" . 
        $QueryBuscarFotoParcela6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_parcela6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Parcela6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoParcela6 = mysqli_query($connection, $QueryBuscarFotoParcela6);
        $RowQrBuscarFotoParcela6 = mysqli_num_rows($ExeQrBuscarFotoParcela6);
  
        if( $RowQrBuscarFotoParcela6 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoParcela6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_parcela6',
              '$Protocolo',
              '$CPFAssociado',
              '$Parcela6'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoParcela6 = mysqli_query($connection, $QueryCadastrarFotoParcela6);
  
          if( $ExeQrCadastrarFotoParcela6 ){
            echo "<br>Foto 6 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto6 das parcelas
            echo "<br><pre>" . 
            $QueryBuscarFotoParcela6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_parcela6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Parcela6'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoParcela6 = mysqli_query($connection, $QueryBuscarFotoParcela6);
            while( $Parcelas6 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela6) ){
              $IdParcela6 = $Parcelas6['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateParcela6 = "
              UPDATE tb_financeiro_veiculo
              SET
                foto_parcela6 = '$IdParcela6'
              WHERE
                protocolo_financeiro = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateParcela6 = mysqli_query($connection, $QueryUpdateParcela6);
            if( $ExeQrUpdateParcela6 ){
              echo "<br>Foto da parcela 6 atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 6 da Parcela" . 
      $_FILES['print_foto_inadimplencia_6']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_inadimplencia_6']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Parcela6 = "Foto_Parcela6".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela6;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_inadimplencia_6']['tmp_name'], $target_file) ){
        "<br>Foto 6 das parcelas carregada, cadastrar foto";
        //BuscarCadastro da foto6 das parcelas
        "<br><pre>" . 
        $QueryBuscarFotoParcela6 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_parcela6' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Parcela6'
        ";
        "</pre>";
        $ExeQrBuscarFotoParcela6 = mysqli_query($connection, $QueryBuscarFotoParcela6);
        $RowQrBuscarFotoParcela6 = mysqli_num_rows($ExeQrBuscarFotoParcela6);
  
        if( $RowQrBuscarFotoParcela6 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoParcela6 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_parcela6',
              '$Protocolo',
              '$CPFAssociado',
              '$Parcela6'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoParcela6 = mysqli_query($connection, $QueryCadastrarFotoParcela6);
  
          if( $ExeQrCadastrarFotoParcela6 ){
            "<br>Foto 6 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto6 das parcelas
            "<br><pre>" . 
            $QueryBuscarFotoParcela6 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_parcela6' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Parcela6'
            ";
            "</pre>";
            $ExeQrBuscarFotoParcela6 = mysqli_query($connection, $QueryBuscarFotoParcela6);
            while( $Parcelas6 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela6) ){
              $IdParcela6 = $Parcelas6['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateParcela6 = "
              UPDATE tb_financeiro_veiculo
              SET
                foto_parcela6 = '$IdParcela6'
              WHERE
                protocolo_financeiro = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateParcela6 = mysqli_query($connection, $QueryUpdateParcela6);
            if( $ExeQrUpdateParcela6 ){
              "<br>Foto da parcela 6 atualizado";
            }
          }
        }
      }
    }
  }