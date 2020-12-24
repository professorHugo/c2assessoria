<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Prontuário 2: " . $_FILES['print_prontuario_condutor2']['name'];
    echo "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      //Diretório existente
      $extensao = pathinfo( $_FILES['print_prontuario_condutor2']['name'] );
      echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];
      echo "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      echo "<br>Nome do arquivo: " . $Prontuario2 = "Prontuario_DETRAN_Condutor2" . $extensao;

      echo "<br>Arquivo de destinho: " . $target_file = $target_dir . $Prontuario2;

      //Fazer upload
      if( move_uploaded_file($_FILES['print_prontuario_condutor2']['tmp_name'], $target_file) ){
        echo "<br>Arquivo carregado";

        //Buscar a foto antes de cadastrar
        echo "<br><pre>" . 
        $QueryBuscarFotoProntuario = "
          SELECT * FROM tb_fotos
          WHERE
            categoria_foto = 'prontuario_condutor2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Prontuario2'
        ";
        echo "</pre>";

        $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
        $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);

        if( $RowQrBuscarFotoProntuario < 1 ){
          //Cadastrar a foto do prontuário 2
          echo "<br>Cadastrar Foto Prontuário 2<pre>" . 
          $QueryCadastrarFotoProntuario = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              nome_foto
            ) VALUES(
              'prontuario_condutor2',
              '$Protocolo',
              '$Prontuario2'
            )
          ";
          echo "</pre>";

          $ExeQrCadastrarFotoProntuario = mysqli_query($connection, $QueryCadastrarFotoProntuario);

          if( $ExeQrCadastrarFotoProntuario ){
            echo "<br>Foto do prontuário cadastrada.";


            //Buscar Prontuário antes de cadastrar
            echo "<br><pre>" . 
            $QueryBuscarProntuario = "
              SELECT * FROM tb_cnh_registros
              WHERE 
                protocolo_cnh = '$Protocolo'&&
                dono_cnh = 'condutor'
            ";
            echo "</pre>";
            echo "<br>";
            $ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
            $RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);

            if( $RowQrBuscarProntuario < 1 ){
              echo "<br>Cadastrar o prontuário";
      
              echo "<br><pre>" . 
              $QueryCadastrarProntuario = "
                INSERT INTO tb_cnh_registros(
                  protocolo_cnh,
                  dono_cnh,
                  status_cnh
                )VALUES(
                  '$Protocolo',
                  'condutor',
                  '$StatusCNH'
                )
              ";
              echo "</pre>";

              $ExeQrCadastrarProntuario = mysqli_query($connection, $QueryCadastrarProntuario);

              if( $ExeQrCadastrarProntuario ){
                echo "<br>Prontuário cadastrado, buscar foto para atualizar";

                echo "<br><pre>" . 
                $QueryBuscarFotoProntuario = "
                  SELECT * FROM tb_fotos
                  WHERE 
                    categoria_foto = 'prontuario_condutor2' &&
                    protocolo_foto = '$Protocolo' &&
                    nome_foto = '$Prontuario2'
                ";
                echo "</pre>";

                $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
                $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);

                if( $RowQrBuscarFotoProntuario > 0 ){
                  echo "<br>Foto cadastrada, vincular ID ao prontuário";
                  while( $ResFotoProntuario = mysqli_fetch_assoc($ExeQrBuscarFotoProntuario) ){
                    $IdFoto = $ResFotoProntuario['id_foto'];
                  }

                  //Update foto do prontuario
                  echo "<br><pre>" . 
                  $QueryUpdateProntuario = "
                    UPDATE tb_cnh_registros
                    SET
                      img_cnh1 = '$IdFoto'
                    WHERE 
                      protocolo_cnh = '$Protocolo' &&
                      dono_cnh = 'condutor'
                  ";
                  echo "</pre>";
                  $ExeUpdateProntuario = mysqli_query($connection, $QueryUpdateProntuario);

                  if( $ExeUpdateProntuario ){
                    echo "<br>Prontuário Atualizado";

                    //Buscar Prontuario
                    echo "<br><pre>" . 
                    $QueryBuscarProntuario = "
                      SELECT * FROM tb_cnh_registros
                      WHERE 
                        protocolo_cnh = '$Protocolo' &&
                        dono_cnh = 'condutor'
                    ";
                    echo "</pre>";
                    echo "<br>";
                    $ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
                    $RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);

                    if( $RowQrBuscarProntuario = 1 ){
                      while( $ResCNH = mysqli_fetch_assoc($ExeQrBuscarProntuario) ){
                        $IdCNH = $ResCNH['id_cnh'];
                      }

                      //Atualizar cadastro do condutor
                      echo "<br><pre>" . 
                      $QueryUpdateCondutor = "
                        UPDATE tb_condutores
                        SET
                          cnh_condutor = '$IdCNH'
                        WHERE 
                          protocolo_evento = '$Protocolo' &&
                          nome_condutor = '$NomeCondutor'
                      ";
                      echo "</pre>";

                      $ExeQrUpdateCondutor = mysqli_query($connection, $QueryUpdateCondutor);
      
                      if( $ExeQrUpdateCondutor ){
                        echo "<br>Dados da CNH do condutor atualizados";
                      }else{
                        echo "<br>Erro: " . mysqli_error($connection);
                      }

                    }
                  }

                }else{
                  echo "<br>Erro: " . mysqli_error($connection);
                }
              }
            }else{
              //Atualizar o prontuário

              //Buscar a foto antes de cadastrar
              echo "<br><pre>" . 
              $QueryBuscarFotoProntuario = "
                SELECT * FROM tb_fotos
                WHERE 
                  categoria_foto = 'prontuario_condutor2' &&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Prontuario2'
              ";
              echo "</pre>";
              $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);

              while( $ReturnFoto2 = mysqli_fetch_assoc($ExeQrBuscarFotoProntuario) ){
                echo $IdFoto2 = $ReturnFoto2['id_foto'];
              }
              echo "<br><pre>" . 
              $QueryUpdateFotoProntuario = "
                UPDATE tb_cnh_registros
                SET
                  img_cnh2 = '$IdFoto2'
                WHERE
                  protocolo_cnh = '$Protocolo' && dono_cnh = 'condutor'
              ";
              echo "</pre>";

              $ExeQrUpdateFotoProntuario = mysqli_query($connection, $QueryUpdateFotoProntuario);

              if( $ExeQrUpdateFotoProntuario ){
                echo "<br>Foto do prontuário atualizado";
              }

            }


          }else{
            echo "<br>Erro: " . mysqli_error($connection);
          }


        }else{
          echo "<br>Foto do prontuário já cadastrado";
        }
      }
    }
  }else{

    //PROD


    "<br>Prontuário 2: " . $_FILES['print_prontuario_condutor2']['name'];
    "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";

    if( is_dir($PastaAssociado) ){
      //Diretório existente
      $extensao = pathinfo( $_FILES['print_prontuario_condutor2']['name'] );
      "<br>Extensão: " . $extensao = "." . $extensao['extension'];
      "<br>Pasta para upload: " . $target_dir = $PastaAssociado;
      "<br>Nome do arquivo: " . $Prontuario2 = "Prontuario_DETRAN_Condutor2" . $extensao;

      "<br>Arquivo de destinho: " . $target_file = $target_dir . $Prontuario2;

      //Fazer upload
      if( move_uploaded_file($_FILES['print_prontuario_condutor2']['tmp_name'], $target_file) ){
        "<br>Arquivo carregado";

        //Buscar a foto antes de cadastrar
        "<br><pre>" . 
        $QueryBuscarFotoProntuario = "
          SELECT * FROM tb_fotos
          WHERE
            categoria_foto = 'prontuario_condutor2' &&
            protocolo_foto = '$Protocolo' &&
            nome_foto = '$Prontuario2'
        ";
        "</pre>";

        $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
        $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);

        if( $RowQrBuscarFotoProntuario < 1 ){
          //Cadastrar a foto do prontuário 2
          "<br>Cadastrar Foto Prontuário 2<pre>" . 
          $QueryCadastrarFotoProntuario = "
            INSERT INTO tb_fotos(
              categoria_foto,
              protocolo_foto,
              nome_foto
            ) VALUES(
              'prontuario_condutor2',
              '$Protocolo',
              '$Prontuario2'
            )
          ";
          "</pre>";

          $ExeQrCadastrarFotoProntuario = mysqli_query($connection, $QueryCadastrarFotoProntuario);

          if( $ExeQrCadastrarFotoProntuario ){
            "<br>Foto do prontuário cadastrada.";


            //Buscar Prontuário antes de cadastrar
            "<br><pre>" . 
            $QueryBuscarProntuario = "
              SELECT * FROM tb_cnh_registros
              WHERE 
                protocolo_cnh = '$Protocolo'&&
                dono_cnh = 'condutor'
            ";
            "</pre>";
            "<br>";
            $ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
            $RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);

            if( $RowQrBuscarProntuario < 1 ){
              "<br>Cadastrar o prontuário";
      
              "<br><pre>" . 
              $QueryCadastrarProntuario = "
                INSERT INTO tb_cnh_registros(
                  protocolo_cnh,
                  dono_cnh,
                  status_cnh
                )VALUES(
                  '$Protocolo',
                  'condutor',
                  '$StatusCNH'
                )
              ";
              "</pre>";

              $ExeQrCadastrarProntuario = mysqli_query($connection, $QueryCadastrarProntuario);

              if( $ExeQrCadastrarProntuario ){
                "<br>Prontuário cadastrado, buscar foto para atualizar";

                "<br><pre>" . 
                $QueryBuscarFotoProntuario = "
                  SELECT * FROM tb_fotos
                  WHERE 
                    categoria_foto = 'prontuario_condutor2' &&
                    protocolo_foto = '$Protocolo' &&
                    nome_foto = '$Prontuario2'
                ";
                "</pre>";

                $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
                $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);

                if( $RowQrBuscarFotoProntuario > 0 ){
                  "<br>Foto cadastrada, vincular ID ao prontuário";
                  while( $ResFotoProntuario = mysqli_fetch_assoc($ExeQrBuscarFotoProntuario) ){
                    $IdFoto = $ResFotoProntuario['id_foto'];
                  }

                  //Update foto do prontuario
                  "<br><pre>" . 
                  $QueryUpdateProntuario = "
                    UPDATE tb_cnh_registros
                    SET
                      img_cnh1 = '$IdFoto'
                    WHERE 
                      protocolo_cnh = '$Protocolo' &&
                      dono_cnh = 'condutor'
                  ";
                  "</pre>";
                  $ExeUpdateProntuario = mysqli_query($connection, $QueryUpdateProntuario);

                  if( $ExeUpdateProntuario ){
                    "<br>Prontuário Atualizado";

                    //Buscar Prontuario
                    "<br><pre>" . 
                    $QueryBuscarProntuario = "
                      SELECT * FROM tb_cnh_registros
                      WHERE 
                        protocolo_cnh = '$Protocolo' &&
                        dono_cnh = 'condutor'
                    ";
                    "</pre>";
                    "<br>";
                    $ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
                    $RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);

                    if( $RowQrBuscarProntuario = 1 ){
                      while( $ResCNH = mysqli_fetch_assoc($ExeQrBuscarProntuario) ){
                        $IdCNH = $ResCNH['id_cnh'];
                      }

                      //Atualizar cadastro do condutor
                      "<br><pre>" . 
                      $QueryUpdateCondutor = "
                        UPDATE tb_condutores
                        SET
                          cnh_condutor = '$IdCNH'
                        WHERE 
                          protocolo_evento = '$Protocolo' &&
                          nome_condutor = '$NomeCondutor'
                      ";
                      "</pre>";

                      $ExeQrUpdateCondutor = mysqli_query($connection, $QueryUpdateCondutor);
      
                      if( $ExeQrUpdateCondutor ){
                        "<br>Dados da CNH do condutor atualizados";
                      }else{
                        "<br>Erro: " . mysqli_error($connection);
                      }

                    }
                  }

                }else{
                  "<br>Erro: " . mysqli_error($connection);
                }
              }
            }else{
              //Atualizar o prontuário

              //Buscar a foto antes de cadastrar
              "<br><pre>" . 
              $QueryBuscarFotoProntuario = "
                SELECT * FROM tb_fotos
                WHERE 
                  categoria_foto = 'prontuario_condutor2' &&
                  protocolo_foto = '$Protocolo' &&
                  nome_foto = '$Prontuario2'
              ";
              "</pre>";
              $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);

              while( $ReturnFoto2 = mysqli_fetch_assoc($ExeQrBuscarFotoProntuario) ){
                $IdFoto2 = $ReturnFoto2['id_foto'];
              }
              "<br><pre>" . 
              $QueryUpdateFotoProntuario = "
                UPDATE tb_cnh_registros
                SET
                  img_cnh2 = '$IdFoto2'
                WHERE
                  protocolo_cnh = '$Protocolo' && dono_cnh = 'condutor'
              ";
              "</pre>";

              $ExeQrUpdateFotoProntuario = mysqli_query($connection, $QueryUpdateFotoProntuario);

              if( $ExeQrUpdateFotoProntuario ){
                "<br>Foto do prontuário atualizado";
              }

            }


          }else{
            "<br>Erro: " . mysqli_error($connection);
          }


        }else{
          "<br>Foto do prontuário já cadastrado";
        }
      }
    }
  }