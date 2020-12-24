<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br>Veículo2: ";
  echo "<br>Placa: " . $Placa2 = $_POST['placa_veiculo2'];
  echo "<br>Marca: " . $Marca2 = $_POST['marca_veiculo2'];
  echo "<br>Modelo: " . $Modelo2 = $_POST['modelo_veiculo2'];
  echo "<br>Proteção: " . $Protecao2 = $_POST['protecao_veiculo2'];
  echo "<br>Nome Condutor: " . $Condutor = $_POST['nome_condutor'];
  
  
  if( isset($_POST['placa_veiculo2']) ){
    echo "<br><pre>" . 
    $QueryVerificarPlaca2 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa2' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrVerificarPlaca2 = mysqli_query($connection, $QueryVerificarPlaca2);
    $RowQrVerificarPlaca2 = mysqli_num_rows($ExeQrVerificarPlaca2);

    if( $RowQrVerificarPlaca2 < 1 ){

      echo "<br><pre>";
      echo $QueryBuscarProprietario = "
        SELECT * FROM tb_proprietario_legal
        WHERE protocolo_proprietario = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrBuscarProprietarios = mysqli_query($connection, $QueryBuscarProprietario);
      $RowQrBuscarProprietarios = mysqli_num_rows($ExeQrBuscarProprietarios);

      if( $RowQrBuscarProprietarios >= 1 ){
        //Cadastrar o veículo
        while($Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarios)){
          $ProprietarioVeiculo = $Proprietario['id_proprietario'];
        }
      }

      echo "<br><pre>" . 
      $QueryCadastrarVeiculo2 = "
        INSERT INTO tb_veiculos(
          proprietario_veiculo,
          segurado_veiculo,
          protocolo_evento,
          marca_veiculo,
          modelo_veiculo,
          placa_veiculo,
          protecao_veiculo
        )VALUES(
          '$ProprietarioVeiculo',
          '$CPFAssociado',
          '$Protocolo',
          '$Marca2',
          '$Modelo2',
          '$Placa2',
          '$Protecao2'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarVeiculo2 = mysqli_query($connection, $QueryCadastrarVeiculo2);
      if( $ExeQrCadastrarVeiculo2 ){
        echo "<br>Veículo 2 cadastrado";
        //Atualizar o Associado com o novo veículo extra
        echo "<br>Atualizar o cadastro do condutor<pre>";
        echo $QueryBuscarVeiculoExtra1 = "
          SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa2'
        ";
        echo "</pre>";
        $ExeQrBuscarVeiculoExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
        while( $ReturnVeiculo2 = mysqli_fetch_assoc($ExeQrBuscarVeiculoExtra1) ){
          $IdVeiculoExtra2 = $ReturnVeiculo2['id_veiculo'];

          echo "<br><pre>";
          echo $QueryUpdateAssociado = "
            UPDATE tb_condutores
            SET
              veiculo2_condutor = '$IdVeiculoExtra2'
            WHERE nome_condutor = '$Condutor'
          ";
          echo "</pre>";
          $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
          if( $ExeQrUpdateAssociado ){
            echo "<br>Veículo extra 1 atualizado para $IdVeiculoExtra2";
          }else{
            echo "<br>Erro: " . mysqli_error($connection);
          }
        }
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Veículo já cadastrado";
    }
  }


}else{
  //Prod
   "<br>Veículo2: ";
   "<br>Placa: " . $Placa2 = $_POST['placa_veiculo2'];
   "<br>Marca: " . $Marca2 = $_POST['marca_veiculo2'];
   "<br>Modelo: " . $Modelo2 = $_POST['modelo_veiculo2'];
   "<br>Proteção: " . $Protecao2 = $_POST['protecao_veiculo2'];
  
  
  if( isset($_POST['placa_veiculo2']) ){
     "<br><pre>" . 
    $QueryVerificarPlaca2 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa2' && protocolo_evento = '$Protocolo'
    ";
     "</pre>";
    $ExeQrVerificarPlaca2 = mysqli_query($connection, $QueryVerificarPlaca2);
    $RowQrVerificarPlaca2 = mysqli_num_rows($ExeQrVerificarPlaca2);

    if( $RowQrVerificarPlaca2 < 1 ){

       "<br><pre>";
       $QueryBuscarProprietario = "
        SELECT * FROM tb_proprietario_legal
        WHERE protocolo_proprietario = '$Protocolo'
      ";
       "</pre>";
      $ExeQrBuscarProprietarios = mysqli_query($connection, $QueryBuscarProprietario);
      $RowQrBuscarProprietarios = mysqli_num_rows($ExeQrBuscarProprietarios);

      if( $RowQrBuscarProprietarios >= 1 ){
        //Cadastrar o veículo
        while($Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarios)){
          $ProprietarioVeiculo = $Proprietario['id_proprietario'];
        }
      }

       "<br><pre>" . 
      $QueryCadastrarVeiculo2 = "
        INSERT INTO tb_veiculos(
          proprietario_veiculo,
          segurado_veiculo,
          protocolo_evento,
          marca_veiculo,
          modelo_veiculo,
          placa_veiculo,
          protecao_veiculo
        )VALUES(
          '$ProprietarioVeiculo',
          '$CPFAssociado',
          '$Protocolo',
          '$Marca2',
          '$Modelo2',
          '$Placa2',
          '$Protecao2'
        )
      ";
       "</pre>";

      $ExeQrCadastrarVeiculo2 = mysqli_query($connection, $QueryCadastrarVeiculo2);
      if( $ExeQrCadastrarVeiculo2 ){
         "<br>Veículo 2 cadastrado";
        //Atualizar o Associado com o novo veículo extra
         "<br>Atualizar o cadastro do Condutor<pre>";
         $QueryBuscarVeiculoExtra1 = "
          SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa2'
        ";
         "</pre>";
        $ExeQrBuscarVeiculoExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
        while( $ReturnVeiculo2 = mysqli_fetch_assoc($ExeQrBuscarVeiculoExtra1) ){
          $IdVeiculoExtra2 = $ReturnVeiculo2['id_veiculo'];

           "<br><pre>";
           $QueryUpdateAssociado = "
            UPDATE tb_condutores
            SET
              veiculo2_condutor = '$IdVeiculoExtra2'
            WHERE nome_condutor = '$Condutor'
          ";
           "</pre>";
          $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
          if( $ExeQrUpdateAssociado ){
             "<br>Veículo extra 1 atualizado para $IdVeiculoExtra2";
          }else{
            echo "<br>Erro: " . mysqli_error($connection);
          }
        }
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
       "<br>Veículo já cadastrado";
    }
  }
}