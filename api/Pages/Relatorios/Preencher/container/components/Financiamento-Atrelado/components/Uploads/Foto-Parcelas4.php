<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Foto 4 da Parcela" . 
      $_FILES['print_foto_inadimplencia_4']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_inadimplencia_4']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Parcela4 = "Foto_Parcela4".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela4;
      echo "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_inadimplencia_4']['tmp_name'], $target_file) ){
        echo "<br>Foto 4 das parcelas carregada, cadastrar foto";
        //BuscarCadastro da foto4 das parcelas
        echo "<br><pre>" . 
        $QueryBuscarFotoParcela4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_parcela4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Parcela4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoParcela4 = mysqli_query($connection, $QueryBuscarFotoParcela4);
        $RowQrBuscarFotoParcela4 = mysqli_num_rows($ExeQrBuscarFotoParcela4);
  
        if( $RowQrBuscarFotoParcela4 < 1 ){
          //cadastrar foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoParcela4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_parcela4',
              '$Protocolo',
              '$CPFAssociado',
              '$Parcela4'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoParcela4 = mysqli_query($connection, $QueryCadastrarFotoParcela4);
  
          if( $ExeQrCadastrarFotoParcela4 ){
            echo "<br>Foto 4 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto4 das parcelas
            echo "<br><pre>" . 
            $QueryBuscarFotoParcela4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_parcela4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Parcela4'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoParcela4 = mysqli_query($connection, $QueryBuscarFotoParcela4);
            while( $Parcelas4 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela4) ){
              $IdParcela4 = $Parcelas4['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateParcela4 = "
              UPDATE tb_financeiro_veiculo
              SET
                foto_parcela4 = '$IdParcela4'
              WHERE
                protocolo_financeiro = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateParcela4 = mysqli_query($connection, $QueryUpdateParcela4);
            if( $ExeQrUpdateParcela4 ){
              echo "<br>Foto da parcela 4 atualizado";
            }
          }
        }
      }
    }
  }else{

    //PROD


    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      "<br>Foto 4 da Parcela" . 
      $_FILES['print_foto_inadimplencia_4']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_inadimplencia_4']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Parcela4 = "Foto_Parcela4".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Parcela4;
      "<br>";
  
      if( move_uploaded_file($_FILES['print_foto_inadimplencia_4']['tmp_name'], $target_file) ){
        "<br>Foto 4 das parcelas carregada, cadastrar foto";
        //BuscarCadastro da foto4 das parcelas
        "<br><pre>" . 
        $QueryBuscarFotoParcela4 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto_parcela4' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Parcela4'
        ";
        "</pre>";
        $ExeQrBuscarFotoParcela4 = mysqli_query($connection, $QueryBuscarFotoParcela4);
        $RowQrBuscarFotoParcela4 = mysqli_num_rows($ExeQrBuscarFotoParcela4);
  
        if( $RowQrBuscarFotoParcela4 < 1 ){
          //cadastrar foto
          "<br><pre>" . 
          $QueryCadastrarFotoParcela4 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_parcela4',
              '$Protocolo',
              '$CPFAssociado',
              '$Parcela4'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoParcela4 = mysqli_query($connection, $QueryCadastrarFotoParcela4);
  
          if( $ExeQrCadastrarFotoParcela4 ){
            "<br>Foto 4 da Parcela cadastrada, atualizar tb_financeiro_veiculo";
            //BuscarCadastro da foto4 das parcelas
            "<br><pre>" . 
            $QueryBuscarFotoParcela4 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto_parcela4' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Parcela4'
            ";
            "</pre>";
            $ExeQrBuscarFotoParcela4 = mysqli_query($connection, $QueryBuscarFotoParcela4);
            while( $Parcelas4 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela4) ){
              $IdParcela4 = $Parcelas4['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateParcela4 = "
              UPDATE tb_financeiro_veiculo
              SET
                foto_parcela4 = '$IdParcela4'
              WHERE
                protocolo_financeiro = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateParcela4 = mysqli_query($connection, $QueryUpdateParcela4);
            if( $ExeQrUpdateParcela4 ){
              "<br>Foto da parcela 4 atualizado";
            }
          }
        }
      }
    }
  }