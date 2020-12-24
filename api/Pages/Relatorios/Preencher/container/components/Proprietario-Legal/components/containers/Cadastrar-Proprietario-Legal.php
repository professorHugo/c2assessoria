<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Verificar Cadastro do proprietario<pre>" . 
    $QueryBuscarProprietario = "
      SELECT * FROM 
        tb_proprietario_legal
      WHERE 
        protocolo_proprietario = '$Protocolo' &&
        nome_proprietario = '$NomeProprietario'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

    if( $RowQrBuscarProprietario < 1 ){
      echo "<br>Cadastrar Proprietario<pre>" . 
      $QueryCadastrarProprietario = "
        INSERT INTO tb_proprietario_legal(
          protocolo_proprietario,
          nome_proprietario,
          vinculo_associado,
          observacao_proprietario
        )VALUES(
          '$Protocolo',
          '$NomeProprietario',
          '$VinculoProprietario',
          '$OBSProprietario'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);

      if( $ExeQrCadastrarProprietario ){
        echo "<br>Proprietario Legal Cadastrado para o protocolo $Protocolo, atualizar veículo";
        
        echo "<br><pre>" . 
        $QueryBuscarProprietario = "
          SELECT * FROM 
            tb_proprietario_legal
          WHERE 
            protocolo_proprietario = '$Protocolo' &&
            nome_proprietario = '$NomeProprietario'
        ";
        echo "</pre>";
        $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
        while($Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietario)){
          $IdProprietario = $Proprietario['id_proprietario'];
        }


        echo "<br><pre>";
        echo $QueryUpdateVeiculo = "
          UPDATE tb_veiculos
          SET
            proprietario_veiculo = '$IdProprietario'
          WHERE
            protocolo_evento = '$Protocolo' &&
            placa_veiculo = '$PlacaVeiculo'
        ";
        echo "</pre>";

        if( $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo) ){
          echo "<br>Proprietário do Veículo atualizado com sucesso";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Proprietario Legal já cadastrado";
    }
  }else{
    //PROD
     "<br>Verificar Cadastro do proprietario<pre>" . 
    $QueryBuscarProprietario = "
      SELECT * FROM 
        tb_proprietario_legal
      WHERE 
        protocolo_proprietario = '$Protocolo' &&
        nome_proprietario = '$NomeProprietario'
    ";
     "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

    if( $RowQrBuscarProprietario < 1 ){
       "<br>Cadastrar Proprietario<pre>" . 
      $QueryCadastrarProprietario = "
        INSERT INTO tb_proprietario_legal(
          protocolo_proprietario,
          nome_proprietario,
          vinculo_associado,
          observacao_proprietario
        )VALUES(
          '$Protocolo',
          '$NomeProprietario',
          '$VinculoProprietario',
          '$OBSProprietario'
        )
      ";
       "</pre>";

      $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);

      if( $ExeQrCadastrarProprietario ){
         "<br>Proprietario Legal Cadastrado para o protocolo $Protocolo, atualizar veículo";
        
         "<br><pre>" . 
        $QueryBuscarProprietario = "
          SELECT * FROM 
            tb_proprietario_legal
          WHERE 
            protocolo_proprietario = '$Protocolo' &&
            nome_proprietario = '$NomeProprietario'
        ";
         "</pre>";
        $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
        while($Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietario)){
          $IdProprietario = $Proprietario['id_proprietario'];
        }


         "<br><pre>";
         $QueryUpdateVeiculo = "
          UPDATE tb_veiculos
          SET
            proprietario_veiculo = '$IdProprietario'
          WHERE
            protocolo_evento = '$Protocolo' &&
            placa_veiculo = '$PlacaVeiculo'
        ";
         "</pre>";

         if( $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo) ){
           "<br>Proprietário do Veículo atualizado com sucesso";
         }else{
           echo "<br>Erro: " . mysqli_error($connection);
         }
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
       "<br>Proprietario Legal já cadastrado";
    }
  }