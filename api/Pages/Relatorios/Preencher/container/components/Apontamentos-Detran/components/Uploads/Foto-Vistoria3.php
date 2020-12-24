<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir( $PastaAssociado ) ){
  
      echo "<br>FotoVistoria3: " . $_FILES['print_foto_vistoria_cautelar3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_vistoria_cautelar3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Vistoria3 = "Foto_Vistoria3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Vistoria3;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_vistoria_cautelar3']['tmp_name'], $target_file ) ){
        echo "<br>Foto 3 da Vistoria carregado";
  
        //BuscarCadastro da foto 3 da Vistoria
        echo "<br><pre>" . 
        $QueryBuscarFotoVistoria3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto3_vistoria' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Vistoria3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoVistoria3 = mysqli_query($connection, $QueryBuscarFotoVistoria3);
        $RowQrBuscarFotoVistoria3 = mysqli_num_rows($ExeQrBuscarFotoVistoria3);
  
        if( $RowQrBuscarFotoVistoria3 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoVistoria3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto3_vistoria',
              '$Protocolo',
              '$CPFAssociado',
              '$Vistoria3'
            )
          ";
          echo "</pre>";
          $ExeQrCadastrarFotoVistoria3 = mysqli_query($connection, $QueryCadastrarFotoVistoria3);
  
          if( $ExeQrCadastrarFotoVistoria3 ){
            echo "<br>Foto 3 da Vistoria cadastrada, atualizar tb_vistorias_realizadas";
            //BuscarCadastro da foto 3 da Vistoria
            echo "<br><pre>" . 
            $QueryBuscarFotoVistoria3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto3_vistoria' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Vistoria3'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoVistoria3 = mysqli_query($connection, $QueryBuscarFotoVistoria3);
            while( $Vistoria3 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria3) ){
              $IdVistoria3 = $Vistoria3['id_foto'];
            }
  
            echo "<br><pre>" . 
            $QueryUpdateVistoria3 = "
              UPDATE tb_vistorias_realizadas
              SET foto3_vistoria = '$IdVistoria3'
              WHERE protocolo_vistoria = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateVistoria3 = mysqli_query($connection, $QueryUpdateVistoria3);
  
            if( $ExeQrUpdateVistoria3 ){
              echo "<br>Foto 3 da Vistoria do Registro de Vistorias atualizado";
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
  
      "<br>FotoVistoria3: " . $_FILES['print_foto_vistoria_cautelar3']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_vistoria_cautelar3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Vistoria3 = "Foto_Vistoria3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Vistoria3;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_vistoria_cautelar3']['tmp_name'], $target_file ) ){
        "<br>Foto 3 da Vistoria carregado";
  
        //BuscarCadastro da foto 3 da Vistoria
        "<br><pre>" . 
        $QueryBuscarFotoVistoria3 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'foto3_vistoria' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Vistoria3'
        ";
        "</pre>";
        $ExeQrBuscarFotoVistoria3 = mysqli_query($connection, $QueryBuscarFotoVistoria3);
        $RowQrBuscarFotoVistoria3 = mysqli_num_rows($ExeQrBuscarFotoVistoria3);
  
        if( $RowQrBuscarFotoVistoria3 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoVistoria3 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto3_vistoria',
              '$Protocolo',
              '$CPFAssociado',
              '$Vistoria3'
            )
          ";
          "</pre>";
          $ExeQrCadastrarFotoVistoria3 = mysqli_query($connection, $QueryCadastrarFotoVistoria3);
  
          if( $ExeQrCadastrarFotoVistoria3 ){
            "<br>Foto 3 da Vistoria cadastrada, atualizar tb_vistorias_realizadas";
            //BuscarCadastro da foto 3 da Vistoria
            "<br><pre>" . 
            $QueryBuscarFotoVistoria3 = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'foto3_vistoria' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Vistoria3'
            ";
            "</pre>";
            $ExeQrBuscarFotoVistoria3 = mysqli_query($connection, $QueryBuscarFotoVistoria3);
            while( $Vistoria3 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria3) ){
              $IdVistoria3 = $Vistoria3['id_foto'];
            }
  
            "<br><pre>" . 
            $QueryUpdateVistoria3 = "
              UPDATE tb_vistorias_realizadas
              SET foto3_vistoria = '$IdVistoria3'
              WHERE protocolo_vistoria = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateVistoria3 = mysqli_query($connection, $QueryUpdateVistoria3);
  
            if( $ExeQrUpdateVistoria3 ){
              "<br>Foto 3 da Vistoria do Registro de Vistorias atualizado";
            }else{
              "<br>Erro: " . mysqli_error($connection);
            }
  
          }
        }
      }
    }
  }