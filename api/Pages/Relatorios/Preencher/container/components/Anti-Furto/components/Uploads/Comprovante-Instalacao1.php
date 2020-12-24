<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Pasta do Associado" . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      echo "<br>Comprovante 1: " . $Comprovante1 = $_FILES['print_foto_comprovante_instalacao1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_comprovante_instalacao1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Comprovante1 = "Comprovante_Instalacao1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante1;
      echo "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_comprovante_instalacao1']['tmp_name'], $target_file ) ){
        echo "<br>Foto 1 da Instalação carregada";
  
        //BuscarCadastro da foto1 da Instalação
        echo "<br><pre>" . 
        $QueryBuscarFotoComprovante1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'comprovante_instalacao1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante1);
        $RowQrBuscarFotoComprovante1 = mysqli_num_rows($ExeQrBuscarFotoComprovante1);
  
        if( $RowQrBuscarFotoComprovante1 < 1 ){
          //Cadastrar Foto
          echo "<br><pre>" . 
          $QueryCadastrarFotoComprovante1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'comprovante_instalacao1',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante1'
            )
          ";
          echo "</pre>";
  
          $ExeQrCadastrarFotoComprovante1 = mysqli_query($connection, $QueryCadastrarFotoComprovante1);
          if( $ExeQrCadastrarFotoComprovante1 ){
            echo "<br>Foto 1 do Comprovante cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 1 do comprovante
            echo "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'comprovante_instalacao1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Comprovante1'
            ";
            echo "</pre>";
            $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoComprovante1 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante1) ){
              $IdComprovante1 = $FotoComprovante1['id_foto'];
            }
  
            //Update do comprovante
            echo "<br><pre>" . 
            $QueryUpdateComprovante1 = "
              UPDATE tb_sistemas_anti_furto
              SET
                foto_comprovante1 = '$IdComprovante1'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrUpdateComprovante1 = mysqli_query($connection, $QueryUpdateComprovante1);
            if( $ExeQrUpdateComprovante1 ){
              echo "<br>Update realizado na foto 1 do comprovante";
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
      "<br>Comprovante 1: " . $Comprovante1 = $_FILES['print_foto_comprovante_instalacao1']['name'];
  
      $extensao = pathinfo( $_FILES['print_foto_comprovante_instalacao1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Comprovante1 = "Comprovante_Instalacao1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante1;
      "<br>";
  
      if( move_uploaded_file( $_FILES['print_foto_comprovante_instalacao1']['tmp_name'], $target_file ) ){
        "<br>Foto 1 da Instalação carregada";
  
        //BuscarCadastro da foto1 da Instalação
        "<br><pre>" . 
        $QueryBuscarFotoComprovante1 = "
          SELECT * FROM 
            tb_fotos
          WHERE
            categoria_foto = 'comprovante_instalacao1' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante1'
        ";
        "</pre>";
        $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante1);
        $RowQrBuscarFotoComprovante1 = mysqli_num_rows($ExeQrBuscarFotoComprovante1);
  
        if( $RowQrBuscarFotoComprovante1 < 1 ){
          //Cadastrar Foto
          "<br><pre>" . 
          $QueryCadastrarFotoComprovante1 = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'comprovante_instalacao1',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante1'
            )
          ";
          "</pre>";
  
          $ExeQrCadastrarFotoComprovante1 = mysqli_query($connection, $QueryCadastrarFotoComprovante1);
          if( $ExeQrCadastrarFotoComprovante1 ){
            "<br>Foto 1 do Comprovante cadastrada, atualizar tb_sistema_anti_furto";
  
            //BuscarCadastro da foto 1 do comprovante
            "<br><pre>" . 
            $QueryBuscarFotoComprovante = "
              SELECT * FROM 
                tb_fotos
              WHERE
                categoria_foto = 'comprovante_instalacao1' &&
                protocolo_foto = '$Protocolo' &&
                nome_foto = '$Comprovante1'
            ";
            "</pre>";
            $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante);
            while( $FotoComprovante1 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante1) ){
              $IdComprovante1 = $FotoComprovante1['id_foto'];
            }
  
            //Update do comprovante
            "<br><pre>" . 
            $QueryUpdateComprovante1 = "
              UPDATE tb_sistemas_anti_furto
              SET
                foto_comprovante1 = '$IdComprovante1'
              WHERE
                protocolo_sistema = '$Protocolo'
            ";
            "</pre>";
            $ExeQrUpdateComprovante1 = mysqli_query($connection, $QueryUpdateComprovante1);
            if( $ExeQrUpdateComprovante1 ){
              "<br>Update realizado na foto 1 do comprovante";
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
        }
      }
    }
  }