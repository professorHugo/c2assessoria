<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br>Veículo3: ";
  echo "<br>Placa: " . $Placa3 = $_POST['placa_veiculo3'];
  echo "<br>Marca: " . $Marca3 = $_POST['marca_veiculo3'];
  echo "<br>Modelo: " . $Modelo3 = $_POST['modelo_veiculo3'];
  echo "<br>Proteção: " . $Protecao3 = $_POST['protecao_veiculo3'];
  echo "<br>Nome Condutor: " . $Condutor = $_POST['nome_condutor'];
  
  
  if( isset($_POST['placa_veiculo3']) ){
    echo "<br><pre>" . 
    $QueryVerificarPlaca3 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa3' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrVerificarPlaca3 = mysqli_query($connection, $QueryVerificarPlaca3);
    $RowQrVerificarPlaca3 = mysqli_num_rows($ExeQrVerificarPlaca3);

    if( $RowQrVerificarPlaca3 < 1 ){

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
      $QueryCadastrarVeiculo3 = "
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
          '$Marca3',
          '$Modelo3',
          '$Placa3',
          '$Protecao3'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarVeiculo3 = mysqli_query($connection, $QueryCadastrarVeiculo3);
      if( $ExeQrCadastrarVeiculo3 ){
        echo "<br>Veículo 3 cadastrado";
        //Atualizar o Associado com o novo veículo extra
        echo "<br>Atualizar o cadastro do condutor<pre>";
        echo $QueryBuscarVeiculoExtra1 = "
          SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa3'
        ";
        echo "</pre>";
        $ExeQrBuscarVeiculoExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
        while( $ReturnVeiculo3 = mysqli_fetch_assoc($ExeQrBuscarVeiculoExtra1) ){
          $IdVeiculoExtra3 = $ReturnVeiculo3['id_veiculo'];

          echo "<br><pre>";
          echo $QueryUpdateAssociado = "
            UPDATE tb_condutores
            SET
              veiculo3_condutor = '$IdVeiculoExtra3'
            WHERE nome_condutor = '$Condutor'
          ";
          echo "</pre>";
          $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
          if( $ExeQrUpdateAssociado ){
            echo "<br>Veículo extra 3 atualizado para $IdVeiculoExtra3";
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
   "<br>Veículo3: ";
   "<br>Placa: " . $Placa3 = $_POST['placa_veiculo3'];
   "<br>Marca: " . $Marca3 = $_POST['marca_veiculo3'];
   "<br>Modelo: " . $Modelo3 = $_POST['modelo_veiculo3'];
   "<br>Proteção: " . $Protecao3 = $_POST['protecao_veiculo3'];
  
  
  if( isset($_POST['placa_veiculo3']) ){
     "<br><pre>" . 
    $QueryVerificarPlaca3 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa3' && protocolo_evento = '$Protocolo'
    ";
     "</pre>";
    $ExeQrVerificarPlaca3 = mysqli_query($connection, $QueryVerificarPlaca3);
    $RowQrVerificarPlaca3 = mysqli_num_rows($ExeQrVerificarPlaca3);

    if( $RowQrVerificarPlaca3 < 1 ){

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
      $QueryCadastrarVeiculo3 = "
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
          '$Marca3',
          '$Modelo3',
          '$Placa3',
          '$Protecao3'
        )
      ";
       "</pre>";

      $ExeQrCadastrarVeiculo3 = mysqli_query($connection, $QueryCadastrarVeiculo3);
      if( $ExeQrCadastrarVeiculo3 ){
         "<br>Veículo 3 cadastrado";
        //Atualizar o Associado com o novo veículo extra
         "<br>Atualizar o cadastro do Condutor<pre>";
         $QueryBuscarVeiculoExtra1 = "
          SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa3'
        ";
         "</pre>";
        $ExeQrBuscarVeiculoExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
        while( $ReturnVeiculo3 = mysqli_fetch_assoc($ExeQrBuscarVeiculoExtra1) ){
          $IdVeiculoExtra3 = $ReturnVeiculo3['id_veiculo'];

           "<br><pre>";
           $QueryUpdateAssociado = "
            UPDATE tb_condutores
            SET
              veiculo3_condutor = '$IdVeiculoExtra3'
            WHERE nome_condutor = '$Condutor'
          ";
           "</pre>";
          $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
          if( $ExeQrUpdateAssociado ){
             "<br>Veículo extra 3 atualizado para $IdVeiculoExtra3";
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