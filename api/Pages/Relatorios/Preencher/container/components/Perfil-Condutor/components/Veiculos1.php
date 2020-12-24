<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br>Veículo1: ";
  echo "<br>Placa: " . $Placa1 = $_POST['placa_veiculo1'];
  echo "<br>Marca: " . $Marca1 = $_POST['marca_veiculo1'];
  echo "<br>Modelo: " . $Modelo1 = $_POST['modelo_veiculo1'];
  echo "<br>Proteção: " . $Protecao1 = $_POST['protecao_veiculo1'];
  echo "<br>Nome Condutor: " . $Condutor = $_POST['nome_condutor'];
  
  
  if( isset($_POST['placa_veiculo1']) ){
    echo "<br><pre>" . 
    $QueryVerificarPlaca1 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa1' && protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrVerificarPlaca1 = mysqli_query($connection, $QueryVerificarPlaca1);
    $RowQrVerificarPlaca1 = mysqli_num_rows($ExeQrVerificarPlaca1);

    if( $RowQrVerificarPlaca1 < 1 ){

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
      $QueryCadastrarVeiculo1 = "
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
          '$Marca1',
          '$Modelo1',
          '$Placa1',
          '$Protecao1'
        )
      ";
      echo "</pre>";

      $ExeQrCadastrarVeiculo1 = mysqli_query($connection, $QueryCadastrarVeiculo1);
      if( $ExeQrCadastrarVeiculo1 ){
        echo "<br>Veículo 1 cadastrado";
        //Atualizar o Associado com o novo veículo extra
        echo "<br>Atualizar o cadastro do condutor<pre>";
        echo $QueryBuscarVeiculoExtra1 = "
          SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa1'
        ";
        echo "</pre>";
        $ExeQrBuscarVeiculoExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
        while( $ReturnVeiculo1 = mysqli_fetch_assoc($ExeQrBuscarVeiculoExtra1) ){
          $IdVeiculoExtra1 = $ReturnVeiculo1['id_veiculo'];

          echo "<br><pre>";
          echo $QueryUpdateAssociado = "
            UPDATE tb_condutores
            SET
              veiculo1_condutor = '$IdVeiculoExtra1'
            WHERE nome_condutor = '$Condutor'
          ";
          echo "</pre>";
          $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
          if( $ExeQrUpdateAssociado ){
            echo "<br>Veículo extra 1 atualizado para $IdVeiculoExtra1";
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
   "<br>Veículo1: ";
   "<br>Placa: " . $Placa1 = $_POST['placa_veiculo1'];
   "<br>Marca: " . $Marca1 = $_POST['marca_veiculo1'];
   "<br>Modelo: " . $Modelo1 = $_POST['modelo_veiculo1'];
   "<br>Proteção: " . $Protecao1 = $_POST['protecao_veiculo1'];
  
  
  if( isset($_POST['placa_veiculo1']) ){
     "<br><pre>" . 
    $QueryVerificarPlaca1 = "
      SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa1' && protocolo_evento = '$Protocolo'
    ";
     "</pre>";
    $ExeQrVerificarPlaca1 = mysqli_query($connection, $QueryVerificarPlaca1);
    $RowQrVerificarPlaca1 = mysqli_num_rows($ExeQrVerificarPlaca1);

    if( $RowQrVerificarPlaca1 < 1 ){

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
      $QueryCadastrarVeiculo1 = "
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
          '$Marca1',
          '$Modelo1',
          '$Placa1',
          '$Protecao1'
        )
      ";
       "</pre>";

      $ExeQrCadastrarVeiculo1 = mysqli_query($connection, $QueryCadastrarVeiculo1);
      if( $ExeQrCadastrarVeiculo1 ){
         "<br>Veículo 1 cadastrado";
        //Atualizar o Associado com o novo veículo extra
         "<br>Atualizar o cadastro do Condutor<pre>";
         $QueryBuscarVeiculoExtra1 = "
          SELECT * FROM tb_veiculos WHERE placa_veiculo = '$Placa1'
        ";
         "</pre>";
        $ExeQrBuscarVeiculoExtra1 = mysqli_query($connection, $QueryBuscarVeiculoExtra1);
        while( $ReturnVeiculo1 = mysqli_fetch_assoc($ExeQrBuscarVeiculoExtra1) ){
          $IdVeiculoExtra1 = $ReturnVeiculo1['id_veiculo'];

           "<br><pre>";
           $QueryUpdateAssociado = "
            UPDATE tb_condutores
            SET
              veiculo1_condutor = '$IdVeiculoExtra1'
            WHERE nome_condutor = '$Condutor'
          ";
           "</pre>";
          $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
          if( $ExeQrUpdateAssociado ){
             "<br>Veículo extra 1 atualizado para $IdVeiculoExtra1";
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