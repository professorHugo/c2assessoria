<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      $extensao = pathinfo( $_FILES['print_foto_comprovante2']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Comprovante2 = "Comprovante_Procedente2".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante2;
      echo "<br>";

      if( move_uploaded_file($_FILES['print_foto_comprovante2']['tmp_name'], $target_file) ){
        echo "Arquivo2 carregado com sucesso, iniciar cadastro";

        //Buscar Cadastro da Foto do comprovante2
        echo "<br><pre>" . 
        $QueryBuscarFotoComprovante2 = "
          SELECT * FROM 
            tb_fotos
          WHERE 
            categoria_foto = 'foto_procedencia2'&&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante2'
        ";
        echo "</pre>";

        $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante2);
        $RowQrBuscarFotoComprovante2 = mysqli_num_rows($ExeQrBuscarFotoComprovante2);

        if( $RowQrBuscarFotoComprovante2 < 1 ){
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
              'foto_procedencia2',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante2'
            )
          ";
          echo "</pre>";

          $ExeQrCadastrarFoto = mysqli_query($connection, $QueryCadastrarFoto);
          if( $ExeQrCadastrarFoto ){
            echo "<br>Foto do comprovante 2 cadastrada, cadastrar procedente";

            echo "<br><pre>" . 
            $QueryBuscarProcedente = "
              SELECT * FROM tb_procedentes WHERE protocolo_procedente = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
            $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

            if( $RowQrBuscarProcedente = 2 ){
              //Buscar Fotos Procedente
              echo "<br>Buscar Foto_Procedente2<pre>";
              echo $QueryBuscarFotoComprovante2 = "
                SELECT * FROM 
                  tb_fotos
                WHERE 
                  categoria_foto = 'foto_procedencia2'&&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Comprovante2'
              ";
              echo "</pre>";
              $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante2);
              $RowQrBuscarFotoComprovante2 = mysqli_num_rows($ExeQrBuscarFotoComprovante2);

              if( $RowQrBuscarFotoComprovante2 = 1 ){
                while($Foto2 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante2)){
                  $FotoProcedente2 = $Foto2['id_foto'];
                }
              }
              //Fazer update do procedente com as fotos
              echo "<br><pre>" . 
              $QueryUpdateProcedente2 = "
                UPDATE tb_procedentes
                SET
                  foto_procedente2 = '$FotoProcedente2'
                WHERE protocolo_procedente = '$Protocolo'
              ";
              echo "</pre>";
              if( $ExeQrUpdateProcedente2 = mysqli_query($connection, $QueryUpdateProcedente2) ){
                echo "<br>Procedente atualizado";
              }else{
                echo "<br>Erro: " . mysqli_error($connection);
              }

            }
          }
        }else{
          //Foto já existe, atualizar
          echo "<br>Foto2 já existe no banco de dados, atualizar os dados do cadastro.";
        }

      }
    }

  }else{

    //PROD
    "<br><br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      $extensao = pathinfo( $_FILES['print_foto_comprovante2']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Comprovante2 = "Comprovante_Procedente2".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante2;
      "<br>";

      if( move_uploaded_file($_FILES['print_foto_comprovante2']['tmp_name'], $target_file) ){
        "Arquivo2 carregado com sucesso, iniciar cadastro";

        //Buscar Cadastro da Foto do comprovante2
        "<br><pre>" . 
        $QueryBuscarFotoComprovante2 = "
          SELECT * FROM 
            tb_fotos
          WHERE 
            categoria_foto = 'foto_procedencia2'&&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante2'
        ";
        "</pre>";

        $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante2);
        $RowQrBuscarFotoComprovante2 = mysqli_num_rows($ExeQrBuscarFotoComprovante2);

        if( $RowQrBuscarFotoComprovante2 < 1 ){
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
              'foto_procedencia2',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante2'
            )
          ";
          "</pre>";

          $ExeQrCadastrarFoto = mysqli_query($connection, $QueryCadastrarFoto);
          if( $ExeQrCadastrarFoto ){
            "<br>Foto do comprovante 2 cadastrada, cadastrar procedente";

            "<br><pre>" . 
            $QueryBuscarProcedente = "
              SELECT * FROM tb_procedentes WHERE protocolo_procedente = '$Protocolo'
            ";
            "</pre>";
            $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
            $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

            if( $RowQrBuscarProcedente = 2 ){
              //Buscar Fotos Procedente
              "<br>Buscar Foto_Procedente2<pre>";
              $QueryBuscarFotoComprovante2 = "
                SELECT * FROM 
                  tb_fotos
                WHERE 
                  categoria_foto = 'foto_procedencia2'&&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Comprovante2'
              ";
              "</pre>";
              $ExeQrBuscarFotoComprovante2 = mysqli_query($connection, $QueryBuscarFotoComprovante2);
              $RowQrBuscarFotoComprovante2 = mysqli_num_rows($ExeQrBuscarFotoComprovante2);

              if( $RowQrBuscarFotoComprovante2 = 1 ){
                while($Foto2 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante2)){
                  $FotoProcedente2 = $Foto2['id_foto'];
                }
              }
              //Fazer update do procedente com as fotos
              "<br><pre>" . 
              $QueryUpdateProcedente2 = "
                UPDATE tb_procedentes
                SET
                  foto_procedente2 = '$FotoProcedente2'
                WHERE protocolo_procedente = '$Protocolo'
              ";
              "</pre>";
              if( $ExeQrUpdateProcedente2 = mysqli_query($connection, $QueryUpdateProcedente2) ){
                "<br>Procedente atualizado";
              }else{
                "<br>Erro: " . mysqli_error($connection);
              }

            }
          }
        }else{
          //Foto já existe, atualizar
          "<br>Foto2 já existe no banco de dados, atualizar os dados do cadastro.";
        }

      }
    }
    
  }