<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Comprovante 2: " . $Comprovante2 = $_FILES['print_foto_comprovante_instalacao2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_comprovante_instalacao2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Comprovante2 = "Comprovante_Instalacao2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante2;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_comprovante_instalacao2']['tmp_name'], $target_file ) ){
        echo "<br>Foto 2 da Instalação carregada";
  
        //BuscarCadastro da foto2 da Instalação
        echo "<br><pre>" . 
        $QueryBuscarFotoComprovante2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'comprovante_instalacao2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante2);
        $RowQrBuscarFotoComprovante2 = mysqli_num_rows($ExeQrBuscarFotoComprovante2);
  
        if( $RowQrBuscarFotoComprovante2 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoComprovante2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'comprovante_instalacao2',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante2'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoComprovante2 = mysqli_query($connection, $QueryCadastrarFotoComprovante2);
          if( $ExeQrCadastrarFotoComprovante2 ){
            echo "<br>Foto 2 do Comprovante cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 2 do comprovante
            echo "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'comprovante_instalacao2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Comprovante2'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoComprovante2 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante2) ){
              $IdComprovante2 = $FotoComprovante2['id_foto'];
            }
  
            //Update do comprovante
            echo "<br><pre>" . 
            $QueryUpdateComprovante2 = "
              UPDATE tb_sistemas_anti_furto
              SET
                foto_comprovante2 = '$IdComprovante2'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateComprovante2 = mysqli_query($connection, $QueryUpdateComprovante2);
            if( $ExeQrUpdateComprovante2 ){
              echo "<br>Update realizado na foto 2 do comprovante";
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

    if( is_dir($PastaAssociado) ){
      "<br>Comprovante 2: " . $Comprovante2 = $_FILES['print_foto_comprovante_instalacao2']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_comprovante_instalacao2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Comprovante2 = "Comprovante_Instalacao2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante2;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_comprovante_instalacao2']['tmp_name'], $target_file ) ){
        "<br>Foto 2 da Instalação carregada";
  
        //BuscarCadastro da foto2 da Instalação
        "<br><pre>" . 
        $QueryBuscarFotoComprovante2 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'comprovante_instalacao2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante2'
        ";
        "</pre>";
        $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante2);
        $RowQrBuscarFotoComprovante2 = mysqli_num_rows($ExeQrBuscarFotoComprovante2);
  
        if( $RowQrBuscarFotoComprovante2 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoComprovante2 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'comprovante_instalacao2',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante2'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoComprovante2 = mysqli_query($connection, $QueryCadastrarFotoComprovante2);
          if( $ExeQrCadastrarFotoComprovante2 ){
            "<br>Foto 2 do Comprovante cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 2 do comprovante
            "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'comprovante_instalacao2' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Comprovante2'
            ";
            "</pre>";
            $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoComprovante2 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante2) ){
              $IdComprovante2 = $FotoComprovante2['id_foto'];
            }
  
            //Update do comprovante
            "<br><pre>" . 
            $QueryUpdateComprovante2 = "
              UPDATE tb_sistemas_anti_furto
              SET
                foto_comprovante2 = '$IdComprovante2'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateComprovante2 = mysqli_query($connection, $QueryUpdateComprovante2);
            if( $ExeQrUpdateComprovante2 ){
              "<br>Update realizado na foto 2 do comprovante";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }