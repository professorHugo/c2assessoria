<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      $extensao = pathinfo( $_FILES['print_foto_comprovante1']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Comprovante1 = "Comprovante_Procedente1".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante1;
      echo "<br>";

      if( move_uploaded_file($_FILES['print_foto_comprovante1']['tmp_name'], $target_file) ){
        echo "Arquivo1 carregado com sucesso, iniciar cadastro";

        //Buscar Cadastro da Foto do comprovante1
        echo "<br><pre>" . 
        $QueryBuscarFotoComprovante1 = "
          SELECT * FROM 
            tb_fotos
          WHERE 
            categoria_foto = 'foto_procedencia1'&&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante1'
        ";
        echo "</pre>";

        $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante1);
        $RowQrBuscarFotoComprovante1 = mysqli_num_rows($ExeQrBuscarFotoComprovante1);

        if( $RowQrBuscarFotoComprovante1 < 1 ){
          //Foto não existe, cadastrar e atualizar
          echo "<br>Foto não existe no banco de dados, cadastrar e atualizar os dados do cadastro.";

          echo "<br><pre>" . 
          $QueryCadastrarFoto = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_procedencia1',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante1'
            )
          ";
          echo "</pre>";

          $ExeQrCadastrarFoto = mysqli_query($connection, $QueryCadastrarFoto);
          if( $ExeQrCadastrarFoto ){
            echo "<br>Foto do comprovante 1 cadastrada, cadastrar procedente";

            echo "<br><pre>" . 
            $QueryBuscarProcedente = "
              SELECT * FROM tb_procedentes WHERE protocolo_procedente = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
            $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

            if( $RowQrBuscarProcedente = 1 ){
              //Buscar Fotos Procedente
              echo "<br>Buscar Foto_Procedente1<pre>";
              echo $QueryBuscarFotoComprovante1 = "
                SELECT * FROM 
                  tb_fotos
                WHERE 
                  categoria_foto = 'foto_procedencia1'&&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Comprovante1'
              ";
              echo "</pre>";
              $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante1);
              $RowQrBuscarFotoComprovante1 = mysqli_num_rows($ExeQrBuscarFotoComprovante1);

              if( $RowQrBuscarFotoComprovante1 = 1 ){
                while($Foto1 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante1)){
                  $FotoProcedente1 = $Foto1['id_foto'];
                }
              }
              //Fazer update do procedente com as fotos
              echo "<br><pre>" . 
              $QueryUpdateProcedente1 = "
                UPDATE tb_procedentes
                SET
                  foto_procedente1 = '$FotoProcedente1'
                WHERE protocolo_procedente = '$Protocolo'
              ";
              echo "</pre>";
              if( $ExeQrUpdateProcedente1 = mysqli_query($connection, $QueryUpdateProcedente1) ){
                echo "<br>Procedente atualizado";
              }else{
                echo "<br>Erro: " . mysqli_error($connection);
              }

            }
          }
        }else{
          //Foto já existe, atualizar
          echo "<br>Foto1 já existe no banco de dados, atualizar os dados do cadastro.";
        }

      }
    }

  }else{

    //PROD
    "<br><br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      $extensao = pathinfo( $_FILES['print_foto_comprovante1']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Comprovante1 = "Comprovante_Procedente1".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante1;
      "<br>";

      if( move_uploaded_file($_FILES['print_foto_comprovante1']['tmp_name'], $target_file) ){
        "Arquivo1 carregado com sucesso, iniciar cadastro";

        //Buscar Cadastro da Foto do comprovante1
        "<br><pre>" . 
        $QueryBuscarFotoComprovante1 = "
          SELECT * FROM 
            tb_fotos
          WHERE 
            categoria_foto = 'foto_procedencia1'&&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante1'
        ";
        "</pre>";

        $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante1);
        $RowQrBuscarFotoComprovante1 = mysqli_num_rows($ExeQrBuscarFotoComprovante1);

        if( $RowQrBuscarFotoComprovante1 < 1 ){
          //Foto não existe, cadastrar e atualizar
          "<br>Foto não existe no banco de dados, cadastrar e atualizar os dados do cadastro.";

          "<br><pre>" . 
          $QueryCadastrarFoto = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              pasta_foto,
              nome_foto
            )VALUES(
              'foto_procedencia1',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante1'
            )
          ";
          "</pre>";

          $ExeQrCadastrarFoto = mysqli_query($connection, $QueryCadastrarFoto);
          if( $ExeQrCadastrarFoto ){
            "<br>Foto do comprovante 1 cadastrada, cadastrar procedente";

            "<br><pre>" . 
            $QueryBuscarProcedente = "
              SELECT * FROM tb_procedentes WHERE protocolo_procedente = '$Protocolo'
            ";
            "</pre>";
            $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
            $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

            if( $RowQrBuscarProcedente = 1 ){
              //Buscar Fotos Procedente
              "<br>Buscar Foto_Procedente1<pre>";
              $QueryBuscarFotoComprovante1 = "
                SELECT * FROM 
                  tb_fotos
                WHERE 
                  categoria_foto = 'foto_procedencia1'&&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Comprovante1'
              ";
              "</pre>";
              $ExeQrBuscarFotoComprovante1 = mysqli_query($connection, $QueryBuscarFotoComprovante1);
              $RowQrBuscarFotoComprovante1 = mysqli_num_rows($ExeQrBuscarFotoComprovante1);

              if( $RowQrBuscarFotoComprovante1 = 1 ){
                while($Foto1 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante1)){
                  $FotoProcedente1 = $Foto1['id_foto'];
                }
              }
              //Fazer update do procedente com as fotos
              "<br><pre>" . 
              $QueryUpdateProcedente1 = "
                UPDATE tb_procedentes
                SET
                  foto_procedente1 = '$FotoProcedente1'
                WHERE protocolo_procedente = '$Protocolo'
              ";
              "</pre>";
              if( $ExeQrUpdateProcedente1 = mysqli_query($connection, $QueryUpdateProcedente1) ){
                "<br>Procedente atualizado";
              }else{
                "<br>Erro: " . mysqli_error($connection);
              }

            }
          }
        }else{
          //Foto já existe, atualizar
          "<br>Foto1 já existe no banco de dados, atualizar os dados do cadastro.";
        }

      }
    }
    
  }