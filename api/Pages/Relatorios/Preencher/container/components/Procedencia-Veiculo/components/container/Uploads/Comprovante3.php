<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      $extensao = pathinfo( $_FILES['print_foto_comprovante3']['name'] );
      echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Comprovante3 = "Comprovante_Procedente3".$extensao;
      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante3;
      echo "<br>";

      if( move_uploaded_file($_FILES['print_foto_comprovante3']['tmp_name'], $target_file) ){
        echo "Arquivo3 carregado com sucesso, iniciar cadastro";

        //Buscar Cadastro da Foto do comprovante3
        echo "<br><pre>" . 
        $QueryBuscarFotoComprovante3 = "
          SELECT * FROM 
            tb_fotos
          WHERE 
            categoria_foto = 'foto_procedencia3'&&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante3'
        ";
        echo "</pre>";

        $ExeQrBuscarFotoComprovante3 = mysqli_query($connection, $QueryBuscarFotoComprovante3);
        $RowQrBuscarFotoComprovante3 = mysqli_num_rows($ExeQrBuscarFotoComprovante3);

        if( $RowQrBuscarFotoComprovante3 < 1 ){
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
              'foto_procedencia3',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante3'
            )
          ";
          echo "</pre>";

          $ExeQrCadastrarFoto = mysqli_query($connection, $QueryCadastrarFoto);
          if( $ExeQrCadastrarFoto ){
            echo "<br>Foto do comprovante 3 cadastrada, cadastrar procedente";

            echo "<br><pre>" . 
            $QueryBuscarProcedente = "
              SELECT * FROM tb_procedentes WHERE protocolo_procedente = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
            $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

            if( $RowQrBuscarProcedente = 3 ){
              //Buscar Fotos Procedente
              echo "<br>Buscar Foto_Procedente3<pre>";
              echo $QueryBuscarFotoComprovante3 = "
                SELECT * FROM 
                  tb_fotos
                WHERE 
                  categoria_foto = 'foto_procedencia3'&&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Comprovante3'
              ";
              echo "</pre>";
              $ExeQrBuscarFotoComprovante3 = mysqli_query($connection, $QueryBuscarFotoComprovante3);
              $RowQrBuscarFotoComprovante3 = mysqli_num_rows($ExeQrBuscarFotoComprovante3);

              if( $RowQrBuscarFotoComprovante3 = 1 ){
                while($Foto3 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante3)){
                  $FotoProcedente3 = $Foto3['id_foto'];
                }
              }
              //Fazer update do procedente com as fotos
              echo "<br><pre>" . 
              $QueryUpdateProcedente3 = "
                UPDATE tb_procedentes
                SET
                  foto_procedente3 = '$FotoProcedente3'
                WHERE protocolo_procedente = '$Protocolo'
              ";
              echo "</pre>";
              if( $ExeQrUpdateProcedente3 = mysqli_query($connection, $QueryUpdateProcedente3) ){
                echo "<br>Procedente atualizado";
              }else{
                echo "<br>Erro: " . mysqli_error($connection);
              }

            }
          }
        }else{
          //Foto já existe, atualizar
          echo "<br>Foto3 já existe no banco de dados, atualizar os dados do cadastro.";
        }

      }
    }

  }else{

    //PROD
    "<br><br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      $extensao = pathinfo( $_FILES['print_foto_comprovante3']['name'] );
      "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Comprovante3 = "Comprovante_Procedente3".$extensao;
      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Comprovante3;
      "<br>";

      if( move_uploaded_file($_FILES['print_foto_comprovante3']['tmp_name'], $target_file) ){
        "Arquivo3 carregado com sucesso, iniciar cadastro";

        //Buscar Cadastro da Foto do comprovante3
        "<br><pre>" . 
        $QueryBuscarFotoComprovante3 = "
          SELECT * FROM 
            tb_fotos
          WHERE 
            categoria_foto = 'foto_procedencia3'&&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Comprovante3'
        ";
        "</pre>";

        $ExeQrBuscarFotoComprovante3 = mysqli_query($connection, $QueryBuscarFotoComprovante3);
        $RowQrBuscarFotoComprovante3 = mysqli_num_rows($ExeQrBuscarFotoComprovante3);

        if( $RowQrBuscarFotoComprovante3 < 1 ){
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
              'foto_procedencia3',
              '$Protocolo',
              '$CPFAssociado',
              '$Comprovante3'
            )
          ";
          "</pre>";

          $ExeQrCadastrarFoto = mysqli_query($connection, $QueryCadastrarFoto);
          if( $ExeQrCadastrarFoto ){
            "<br>Foto do comprovante 3 cadastrada, cadastrar procedente";

            "<br><pre>" . 
            $QueryBuscarProcedente = "
              SELECT * FROM tb_procedentes WHERE protocolo_procedente = '$Protocolo'
            ";
            "</pre>";
            $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
            $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

            if( $RowQrBuscarProcedente = 3 ){
              //Buscar Fotos Procedente
              "<br>Buscar Foto_Procedente3<pre>";
              $QueryBuscarFotoComprovante3 = "
                SELECT * FROM 
                  tb_fotos
                WHERE 
                  categoria_foto = 'foto_procedencia3'&&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Comprovante3'
              ";
              "</pre>";
              $ExeQrBuscarFotoComprovante3 = mysqli_query($connection, $QueryBuscarFotoComprovante3);
              $RowQrBuscarFotoComprovante3 = mysqli_num_rows($ExeQrBuscarFotoComprovante3);

              if( $RowQrBuscarFotoComprovante3 = 1 ){
                while($Foto3 = mysqli_fetch_assoc($ExeQrBuscarFotoComprovante3)){
                  $FotoProcedente3 = $Foto3['id_foto'];
                }
              }
              //Fazer update do procedente com as fotos
              "<br><pre>" . 
              $QueryUpdateProcedente3 = "
                UPDATE tb_procedentes
                SET
                  foto_procedente3 = '$FotoProcedente3'
                WHERE protocolo_procedente = '$Protocolo'
              ";
              "</pre>";
              if( $ExeQrUpdateProcedente3 = mysqli_query($connection, $QueryUpdateProcedente3) ){
                "<br>Procedente atualizado";
              }else{
                "<br>Erro: " . mysqli_error($connection);
              }

            }
          }
        }else{
          //Foto já existe, atualizar
          "<br>Foto3 já existe no banco de dados, atualizar os dados do cadastro.";
        }

      }
    }
    
  }