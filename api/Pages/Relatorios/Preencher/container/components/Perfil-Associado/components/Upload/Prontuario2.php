<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br>Prontuário2: " . $_FILES['print_prontuario_associado2']['name'];
  echo "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";
  
  if( is_dir($PastaAssociado) ){
    //Diretório já existe
    $extensao2 = pathinfo( $_FILES['print_prontuario_associado2']['name'] );
    echo "<br>Extensão do arquivo: " . $extensao2 = "." . $extensao2['extension'];
    echo "<br>Pasta para upload: " . $target_dir2 = $PastaAssociado;
    echo "<br>Nome do arquivo: " . $Prontuario2 = "Prontuario_DETRAN_Associado2".$extensao2;
  
    echo "<br>Arquivo de destinho: " . $target_file = $target_dir2 . $Prontuario2;
  
    if( move_uploaded_file( $_FILES['print_prontuario_associado2']['tmp_name'], $target_file ) ){
      echo "<br>Arquivo carregado com sucesso";
  
      //Buscar a foto antes de cadastrar
      echo "<br><pre>" . 
      $QueryBuscarFotoProntuario = "
        SELECT * FROM tb_fotos
        WHERE 
          categoria_foto = 'prontuario_associado2' &&
          protocolo_foto = '$Protocolo' &&
          nome_foto = '$Prontuario2'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
      $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);
  
      if( $RowQrBuscarFotoProntuario < 1 ){
        echo "<br><pre>" . 
        $QueryCadastrarFotoProntuario = "
          INSERT INTO tb_fotos(
            categoria_foto,
            protocolo_foto,
            nome_foto
          )VALUES(
            'prontuario_associado2',
            '$Protocolo',
            '$Prontuario2'
          )
        ";
        echo "</pre>";
  
        $ExeQrCadastrarFotoProntuario = mysqli_query($connection, $QueryCadastrarFotoProntuario);
  
        if( $ExeQrCadastrarFotoProntuario ){
          echo "<br>Foto do prontuário cadastrada.";
            //Buscar o Prontuário antes de cadastrar
            echo "<br><pre>" . 
            $QueryBuscarProntuario = "
              SELECT * FROM tb_cnh_registros
              WHERE 
                protocolo_cnh = '$Protocolo' &&
                dono_cnh = '$CPFAssociado'
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
                  '$CPFAssociado',
                  '$StatusCNH'
                )
              ";
              echo "</pre>";
  
              $ExeQrCadastrarProntuario = mysqli_query($connection, $QueryCadastrarProntuario);
  
              if( $ExeQrCadastrarProntuario ){
                echo "<br>Prontuário cadastrado. Buscar foto para atualizar o prontuário";
                
                echo "<br><pre>" . 
                $QueryBuscarFotoProntuario = "
                  SELECT * FROM tb_fotos
                  WHERE 
                    categoria_foto = 'prontuario_associado2' &&
                    protocolo_foto = '$Protocolo' &&
                    nome_foto = '$Prontuario2'
                ";
                echo "</pre>";
                $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
                $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);
  
                if( $RowQrBuscarFotoProntuario >= 1 ){
                  echo "<br>A foto já foi cadastrada. Atualizar o prontuário com o id da foto";
  
                  while( $ResFotoProntuario = mysqli_fetch_assoc($ExeQrBuscarFotoProntuario) ){
                    $IdFoto = $ResFotoProntuario['id_foto'];
                  }
  
                  //Update do Prontuário
                  echo "<br><pre>" . 
                  $QueryUpdateProntuario = "
                    UPDATE tb_cnh_registros
                    SET
                      img_cnh2 = '$IdFoto'
                    WHERE 
                      protocolo_cnh = '$Protocolo' &&
                      dono_cnh = '$CPFAssociado'
                  ";
                  echo "</pre>";
                  $ExeUpdateProntuario = mysqli_query($connection, $QueryUpdateProntuario);
  
                  if( $ExeUpdateProntuario ){
                    echo "<br>Prontuario atualizado";
  
                    //Buscar Prontuario
                    echo "<br><pre>" . 
                    $QueryBuscarProntuario = "
                      SELECT * FROM tb_cnh_registros
                      WHERE 
                        protocolo_cnh = '$Protocolo' &&
                        dono_cnh = '$CPFAssociado'
                    ";
                    echo "</pre>";
                    echo "<br>";
                    $ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
                    $RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);
  
                    if( $RowQrBuscarFotoProntuario = 1 ){
                      while( $ResCNH = mysqli_fetch_assoc($ExeQrBuscarProntuario) ){
                        $IdCNH = $ResCNH['id_cnh'];
                      }
                      //Atualizar cadastro do associado
                      echo "<br><pre>" . 
                      $QueryUpdateAssociado = "
                        UPDATE tb_associados
                        SET
                          cnh_associado = '$IdCNH'
                        WHERE cpf_associado = '$CPFAssociado'
                      ";
                      echo "</pre>";
                      $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
  
                      if( $ExeQrUpdateAssociado ){
                        echo "<br>Dados da CNH do associado atualizados";
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
              //Atulizar o prontuário

              //Buscar a foto antes de cadastrar
              echo "<br><pre>" . 
              $QueryBuscarFotoProntuario = "
                SELECT * FROM tb_fotos
                WHERE 
                  categoria_foto = 'prontuario_associado2' &&
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
                  protocolo_cnh = '$Protocolo' && dono_cnh = '$CPFAssociado'
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
  "<br>Prontuário2: " . $_FILES['print_prontuario_associado2']['name'];
  "<br>Pasta do Associado: " . $PastaAssociado = "Docs/".$CPFAssociado."/";
  
  if( is_dir($PastaAssociado) ){
    //Diretório já existe
    $extensao2 = pathinfo( $_FILES['print_prontuario_associado2']['name'] );
    "<br>Extensão do arquivo: " . $extensao2 = "." . $extensao2['extension'];
    "<br>Pasta para upload: " . $target_dir2 = $PastaAssociado;
    "<br>Nome do arquivo: " . $Prontuario2 = "Prontuario_DETRAN_Associado2".$extensao2;
  
    "<br>Arquivo de destinho: " . $target_file = $target_dir2 . $Prontuario2;
  
    if( move_uploaded_file( $_FILES['print_prontuario_associado2']['tmp_name'], $target_file ) ){
      "<br>Arquivo carregado com sucesso";
  
      //Buscar a foto antes de cadastrar
      "<br><pre>" . 
      $QueryBuscarFotoProntuario = "
        SELECT * FROM tb_fotos
        WHERE 
          categoria_foto = 'prontuario_associado2' &&
          protocolo_foto = '$Protocolo' &&
          nome_foto = '$Prontuario2'
      ";
      "</pre>";
      $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
      $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);
  
      if( $RowQrBuscarFotoProntuario < 1 ){
        "<br><pre>" . 
        $QueryCadastrarFotoProntuario = "
          INSERT INTO tb_fotos(
            categoria_foto,
            protocolo_foto,
            nome_foto
          )VALUES(
            'prontuario_associado2',
            '$Protocolo',
            '$Prontuario2'
          )
        ";
        "</pre>";
  
        $ExeQrCadastrarFotoProntuario = mysqli_query($connection, $QueryCadastrarFotoProntuario);
  
        if( $ExeQrCadastrarFotoProntuario ){
          "<br>Foto do prontuário cadastrada.";
            //Buscar o Prontuário antes de cadastrar
            "<br><pre>" . 
            $QueryBuscarProntuario = "
              SELECT * FROM tb_cnh_registros
              WHERE 
                protocolo_cnh = '$Protocolo' &&
                dono_cnh = '$CPFAssociado'
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
                  '$CPFAssociado',
                  '$StatusCNH'
                )
              ";
              "</pre>";
  
              $ExeQrCadastrarProntuario = mysqli_query($connection, $QueryCadastrarProntuario);
  
              if( $ExeQrCadastrarProntuario ){
                "<br>Prontuário cadastrado. Buscar foto para atualizar o prontuário";
                
                "<br><pre>" . 
                $QueryBuscarFotoProntuario = "
                  SELECT * FROM tb_fotos
                  WHERE 
                    categoria_foto = 'prontuario_associado2' &&
                    protocolo_foto = '$Protocolo' &&
                    nome_foto = '$Prontuario2'
                ";
                "</pre>";
                $ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
                $RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);
  
                if( $RowQrBuscarFotoProntuario >= 1 ){
                  "<br>A foto já foi cadastrada. Atualizar o prontuário com o id da foto";
  
                  while( $ResFotoProntuario = mysqli_fetch_assoc($ExeQrBuscarFotoProntuario) ){
                    $IdFoto = $ResFotoProntuario['id_foto'];
                  }
  
                  //Update do Prontuário
                  "<br><pre>" . 
                  $QueryUpdateProntuario = "
                    UPDATE tb_cnh_registros
                    SET
                      img_cnh2 = '$IdFoto'
                    WHERE 
                      protocolo_cnh = '$Protocolo' &&
                      dono_cnh = '$CPFAssociado'
                  ";
                  "</pre>";
                  $ExeUpdateProntuario = mysqli_query($connection, $QueryUpdateProntuario);
  
                  if( $ExeUpdateProntuario ){
                    "<br>Prontuario atualizado";
  
                    //Buscar Prontuario
                    "<br><pre>" . 
                    $QueryBuscarProntuario = "
                      SELECT * FROM tb_cnh_registros
                      WHERE 
                        protocolo_cnh = '$Protocolo' &&
                        dono_cnh = '$CPFAssociado'
                    ";
                    "</pre>";
                    "<br>";
                    $ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
                    $RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);
  
                    if( $RowQrBuscarFotoProntuario = 1 ){
                      while( $ResCNH = mysqli_fetch_assoc($ExeQrBuscarProntuario) ){
                        $IdCNH = $ResCNH['id_cnh'];
                      }
                      //Atualizar cadastro do associado
                      "<br><pre>" . 
                      $QueryUpdateAssociado = "
                        UPDATE tb_associados
                        SET
                          cnh_associado = '$IdCNH'
                        WHERE cpf_associado = '$CPFAssociado'
                      ";
                      "</pre>";
                      $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
  
                      if( $ExeQrUpdateAssociado ){
                        "<br>Dados da CNH do associado atualizados";
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
              //Atulizar o prontuário

              //Buscar a foto antes de cadastrar
              "<br><pre>" . 
              $QueryBuscarFotoProntuario = "
                SELECT * FROM tb_fotos
                WHERE 
                  categoria_foto = 'prontuario_associado2' &&
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
                  protocolo_cnh = '$Protocolo' && dono_cnh = '$CPFAssociado'
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