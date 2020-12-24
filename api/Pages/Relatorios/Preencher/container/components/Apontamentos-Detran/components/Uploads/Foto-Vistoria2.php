<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      echo "<br>FotoVistoria2: " . $_FILES['print_foto_vistoria_cautelar2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_vistoria_cautelar2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Vistoria2 = "Foto_Vistoria2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Vistoria2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_vistoria_cautelar2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 da Vistoria carregado";
  
        //BuscarCadastro da foto 2 da Vistoria
        echo "<br><pre>" . 
        $QueryBuscarFotoVistoria2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto2_vistoria' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Vistoria2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoVistoria2 = mysqli_query($connection, $QueryBuscarFotoVistoria2);
        $RowQrBuscarFotoVistoria2 = mysqli_num_rows($ExeQrBuscarFotoVistoria2);
  
        if( $RowQrBuscarFotoVistoria2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoVistoria2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto2_vistoria',
              '$Protocolo',
              '$CPFAssociado',
              '$Vistoria2'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoVistoria2 = mysqli_query($connection, $QueryCadastrarFotoVistoria2);
  
          if( $ExeQrCadastrarFotoVistoria2 ){
            echo "<br>Foto 2 da Vistoria cadastrada, atualizar tb_vistorias_realizadas";
            //BuscarCadastro da foto 2 da Vistoria
            echo "<br><pre>" . 
            $QueryBuscarFotoVistoria2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto2_vistoria' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Vistoria2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoVistoria2 = mysqli_query($connection, $QueryBuscarFotoVistoria2);
            while( $Vistoria2 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria2) ){
              $IdVistoria2 = $Vistoria2['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateVistoria2 = "
              UPDATE tb_vistorias_realizadas
              SET foto2_vistoria = '$IdVistoria2'
              WHERE protocolo_vistoria = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateVistoria2 = mysqli_query($connection, $QueryUpdateVistoria2);
  
            if( $ExeQrUpdateVistoria2 ){
              echo "<br>Foto 2 da Vistoria do Registro de Vistorias atualizado";
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
  
      "<br>FotoVistoria2: " . $_FILES['print_foto_vistoria_cautelar2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_vistoria_cautelar2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Vistoria2 = "Foto_Vistoria2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Vistoria2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_vistoria_cautelar2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 da Vistoria carregado";
  
        //BuscarCadastro da foto 2 da Vistoria
        "<br><pre>" . 
        $QueryBuscarFotoVistoria2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto2_vistoria' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Vistoria2'
        ";
        "</pre>";
        $ExeQrBuscarFotoVistoria2 = mysqli_query($connection, $QueryBuscarFotoVistoria2);
        $RowQrBuscarFotoVistoria2 = mysqli_num_rows($ExeQrBuscarFotoVistoria2);
  
        if( $RowQrBuscarFotoVistoria2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoVistoria2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto2_vistoria',
              '$Protocolo',
              '$CPFAssociado',
              '$Vistoria2'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoVistoria2 = mysqli_query($connection, $QueryCadastrarFotoVistoria2);
  
          if( $ExeQrCadastrarFotoVistoria2 ){
            "<br>Foto 2 da Vistoria cadastrada, atualizar tb_vistorias_realizadas";
            //BuscarCadastro da foto 2 da Vistoria
            "<br><pre>" . 
            $QueryBuscarFotoVistoria2 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto2_vistoria' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Vistoria2'
            ";
            "</pre>";
            $ExeQrBuscarFotoVistoria2 = mysqli_query($connection, $QueryBuscarFotoVistoria2);
            while( $Vistoria2 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria2) ){
              $IdVistoria2 = $Vistoria2['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateVistoria2 = "
              UPDATE tb_vistorias_realizadas
              SET foto2_vistoria = '$IdVistoria2'
              WHERE protocolo_vistoria = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateVistoria2 = mysqli_query($connection, $QueryUpdateVistoria2);
  
            if( $ExeQrUpdateVistoria2 ){
              "<br>Foto 2 da Vistoria do Registro de Vistorias atualizado";
            }else{
              "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }