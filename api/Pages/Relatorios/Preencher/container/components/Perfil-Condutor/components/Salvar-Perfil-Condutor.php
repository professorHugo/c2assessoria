<?php

if( $SysMode == 1 ){
  //DEV
  echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

  echo "<br>Nome: " . $NomeCondutor = $_POST['nome_condutor'];

  echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];

  echo "<br>Estado Civil: " . $EstadoCivil = $_POST['estado_civil_condutor'];
  echo "<br>Profissão: " . $Profissao = $_POST['profissao_condutor'];
  echo "<br>Vínculo: " . $Vinculo = $_POST['vinculo_proprietario'];
  echo "<br>Veículos Próprios: " . $VeiculosProprios = $_POST['veiculo_proprio'];
  echo "<br>Registro CNH: " . $RegistroCNH = $_POST['registro_cnh'];
  echo "<br>Status CNH: " . $StatusCNH = $_POST['status_cnh'];

  if(!isset($_POST['veiculos_quantidade'])){
    $QuantidadeVeiculosExtras = "";
  }
  echo "<br>";

  if( $VeiculosProprios == 1 ){
    echo "<br>Quantidade de Veículos extras: " . $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];
    //Cadastrar Condutor como proprietário
    echo "<br><pre>";
    echo $QueryBuscarProprietario = "
      SELECT * FROM 
        tb_proprietario_legal 
      WHERE 
        protocolo_proprietario = '$Protocolo' && nome_proprietario = '$NomeCondutor'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

    if( $RowQrBuscarProprietario < 1 ){
      echo "<br>Proprietario ainda não cadastrado";
      echo "<br><pre>";
      echo $QueryCadastrarProprietario = "
        INSERT INTO tb_proprietario_legal(
          protocolo_proprietario,
          nome_proprietario,
          vinculo_associado
        )VALUES(
          '$Protocolo',
          '$NomeCondutor',
          '$Vinculo'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);
      if( $ExeQrCadastrarProprietario ){
        echo "<br>Proprietario  $NomeCondutor Cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "Proprietario $NomeCondutor já cadastrado";
    }


    switch( $QuantidadeVeiculosExtras ){
      case 1:
        include "Veiculos1.php";
      break;
      case 2:
        include "Veiculos1.php";
        include "Veiculos2.php";
      break;
      case 3:
        include "Veiculos1.php";
        include "Veiculos2.php";
        include "Veiculos3.php";
      break;
    }


    if( $RegistroCNH == 1 ){
      echo "<br><br>Condutor Habilitado";
      
      $StatusCNH = $_POST['status_cnh'];
      switch($StatusCNH){
        case 1: $StatusCNH = "Válida";break;
        case 2: $StatusCNH = "Vencida";break;
        case 3: $StatusCNH = "Suspensa";break;
        case 4: $StatusCNH = "Cassada";break;
      }
  
      echo "<br>Status: " . $StatusCNH;

      //UPDATE dos dados preenchidos do condutor
      echo "<br><pre>" . 
      $QueryUpdateCondutor = "
        UPDATE tb_condutores
        SET
          civil_condutor = '$EstadoCivil',
          profissao_condutor = '$Profissao',
          vinculo_associado = '$Vinculo',
          veiculo_proprio = '$VeiculosProprios',
          qtd_veiculo_proprio = '$QuantidadeVeiculosExtras',
          perfil_salvo = 1
        WHERE
          protocolo_evento = '$Protocolo'
      ";
      echo "<br></pre>";
      $ExeQrUpdateCondutor = mysqli_query($connection, $QueryUpdateCondutor);

      if( $ExeQrUpdateCondutor ){
        echo "<br>Condutor Atualizado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
  
      include "Upload/index.php";
    }
  }

  //Update data de modificação do relatório
  include 'Update-Data-Modifica-Relatorio.php';

}else{
  //PROD

  "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

  "<br>Nome: " . $NomeCondutor = $_POST['nome_condutor'];

  "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];

  "<br>Estado Civil: " . $EstadoCivil = $_POST['estado_civil_condutor'];
  "<br>Profissão: " . $Profissao = $_POST['profissao_condutor'];
  "<br>Vínculo: " . $Vinculo = $_POST['vinculo_proprietario'];
  "<br>Veículos Próprios: " . $VeiculosProprios = $_POST['veiculo_proprio'];
  "<br>Registro CNH: " . $RegistroCNH = $_POST['registro_cnh'];
  "<br>Status CNH: " . $StatusCNH = $_POST['status_cnh'];

  if(!isset($_POST['veiculos_quantidade'])){
    $QuantidadeVeiculosExtras = "";
  }
  "<br>";

  if( $VeiculosProprios == 1 ){
    "<br>Quantidade de Veículos extras: " . $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];
    //Cadastrar Condutor como proprietário
    "<br><pre>";
    $QueryBuscarProprietario = "
      SELECT * FROM 
        tb_proprietario_legal 
      WHERE 
        protocolo_proprietario = '$Protocolo' && nome_proprietario = '$NomeCondutor'
    ";
    "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

    if( $RowQrBuscarProprietario < 1 ){
      "<br>Proprietario ainda não cadastrado";
      "<br><pre>";
      $QueryCadastrarProprietario = "
        INSERT INTO tb_proprietario_legal(
          protocolo_proprietario,
          nome_proprietario,
          vinculo_associado
        )VALUES(
          '$Protocolo',
          '$NomeCondutor',
          '$Vinculo'
        )
      ";
      "</pre>";
      $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);
      if( $ExeQrCadastrarProprietario ){
        "<br>Proprietario  $NomeCondutor Cadastrado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "Proprietario $NomeCondutor já cadastrado";
    }


    switch( $QuantidadeVeiculosExtras ){
      case 1:
        include "Veiculos1.php";
      break;
      case 2:
        include "Veiculos1.php";
        include "Veiculos2.php";
      break;
      case 3:
        include "Veiculos1.php";
        include "Veiculos2.php";
        include "Veiculos3.php";
      break;
    }


    if( $RegistroCNH == 1 ){
      "<br><br>Condutor Habilitado";
      
      $StatusCNH = $_POST['status_cnh'];
      switch($StatusCNH){
        case 1: $StatusCNH = "Válida";break;
        case 2: $StatusCNH = "Vencida";break;
        case 3: $StatusCNH = "Suspensa";break;
        case 4: $StatusCNH = "Cassada";break;
      }
  
      "<br>Status: " . $StatusCNH;

      //UPDATE dos dados preenchidos do condutor
      "<br><pre>" . 
      $QueryUpdateCondutor = "
        UPDATE tb_condutores
        SET
          civil_condutor = '$EstadoCivil',
          profissao_condutor = '$Profissao',
          vinculo_associado = '$Vinculo',
          veiculo_proprio = '$VeiculosProprios',
          qtd_veiculo_proprio = '$QuantidadeVeiculosExtras',
          perfil_salvo = 1
        WHERE
          protocolo_evento = '$Protocolo'
      ";
      "<br></pre>";
      $ExeQrUpdateCondutor = mysqli_query($connection, $QueryUpdateCondutor);

      if( $ExeQrUpdateCondutor ){
        "<br>Condutor Atualizado";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
  
      include "Upload/index.php";
    }
  }

  //Update data de modificação do relatório
  include 'Update-Data-Modifica-Relatorio.php';
}