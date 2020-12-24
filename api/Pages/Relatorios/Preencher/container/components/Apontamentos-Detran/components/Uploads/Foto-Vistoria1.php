<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      echo "<br>FotoVistoria1: " . $_FILES['print_foto_vistoria_cautelar1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_vistoria_cautelar1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Vistoria1 = "Foto_Vistoria1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Vistoria1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_vistoria_cautelar1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da Vistoria carregado";
  
        //BuscarCadastro da foto 1 da Vistoria
        echo "<br><pre>" . 
        $QueryBuscarFotoVistoria1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto1_vistoria' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Vistoria1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoVistoria1 = mysqli_query($connection, $QueryBuscarFotoVistoria1);
        $RowQrBuscarFotoVistoria1 = mysqli_num_rows($ExeQrBuscarFotoVistoria1);
  
        if( $RowQrBuscarFotoVistoria1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoVistoria1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto1_vistoria',
              '$Protocolo',
              '$CPFAssociado',
              '$Vistoria1'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoVistoria1 = mysqli_query($connection, $QueryCadastrarFotoVistoria1);
  
          if( $ExeQrCadastrarFotoVistoria1 ){
            echo "<br>Foto 1 da Vistoria cadastrada, atualizar tb_vistorias_realizadas";
            //BuscarCadastro da foto3 da multa
            echo "<br><pre>" . 
            $QueryBuscarFotoVistoria1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto1_vistoria' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Vistoria1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoVistoria1 = mysqli_query($connection, $QueryBuscarFotoVistoria1);
            while( $Vistoria1 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria1) ){
              $IdVistoria1 = $Vistoria1['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateVistoria1 = "
              UPDATE tb_vistorias_realizadas
              SET foto1_vistoria = '$IdVistoria1'
              WHERE protocolo_vistoria = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateVistoria1 = mysqli_query($connection, $QueryUpdateVistoria1);
  
            if( $ExeQrUpdateVistoria1 ){
              echo "<br>Foto 1 da Vistoria do Registro de Vistorias atualizado";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  
  }else{


    //PROD
    "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      "<br>FotoVistoria1: " . $_FILES['print_foto_vistoria_cautelar1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_vistoria_cautelar1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Vistoria1 = "Foto_Vistoria1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Vistoria1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_vistoria_cautelar1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da Vistoria carregado";
  
        //BuscarCadastro da foto 1 da Vistoria
        "<br><pre>" . 
        $QueryBuscarFotoVistoria1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto1_vistoria' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Vistoria1'
        ";
        "</pre>";
        $ExeQrBuscarFotoVistoria1 = mysqli_query($connection, $QueryBuscarFotoVistoria1);
        $RowQrBuscarFotoVistoria1 = mysqli_num_rows($ExeQrBuscarFotoVistoria1);
  
        if( $RowQrBuscarFotoVistoria1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoVistoria1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto1_vistoria',
              '$Protocolo',
              '$CPFAssociado',
              '$Vistoria1'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoVistoria1 = mysqli_query($connection, $QueryCadastrarFotoVistoria1);
  
          if( $ExeQrCadastrarFotoVistoria1 ){
            "<br>Foto 1 da Vistoria cadastrada, atualizar tb_vistorias_realizadas";
            //BuscarCadastro da foto3 da multa
            "<br><pre>" . 
            $QueryBuscarFotoVistoria1 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto1_vistoria' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Vistoria1'
            ";
            "</pre>";
            $ExeQrBuscarFotoVistoria1 = mysqli_query($connection, $QueryBuscarFotoVistoria1);
            while( $Vistoria1 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria1) ){
              $IdVistoria1 = $Vistoria1['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateVistoria1 = "
              UPDATE tb_vistorias_realizadas
              SET foto1_vistoria = '$IdVistoria1'
              WHERE protocolo_vistoria = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateVistoria1 = mysqli_query($connection, $QueryUpdateVistoria1);
  
            if( $ExeQrUpdateVistoria1 ){
              "<br>Foto 1 da Vistoria do Registro de Vistorias atualizado";
            }else{
              "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }