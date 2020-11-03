<?php
if( isset($_POST['Salvar']) ){
  echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

  echo "<br>Estado Civil: " . $EstadoCivil = $_POST['estado_civil_associado'];
  echo "<br>Profissão: " . $Profissao = $_POST['profissao_associado'];
  echo "<br>Outros Veículos: " . $OutrosVeiculos = $_POST['outro_veiculo'];
  echo "<br>Id Proprietario: " . $Proprietario = $_POST['id_associado'];
  echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
  echo "<br>Registro CNH: " . $RegistroCNH = $_POST['registro_cnh'];
  echo "<br>";

  if( $OutrosVeiculos == 1 ){
    echo "<br>Quantidade de Veículos extras: " . $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];

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
  }

  if( $RegistroCNH == 1 ){
    echo "<br>Associado Habilitado";
    
    $StatusCNH = $_POST['status_cnh'];
    switch($StatusCNH){
      case 1: $StatusCNH = "Válida";break;
      case 2: $StatusCNH = "Vencida";break;
      case 3: $StatusCNH = "Suspensa";break;
      case 4: $StatusCNH = "Cassada";break;
    }

    echo "<br>Status: " . $StatusCNH;

    include "Upload/index.php";
  }
}