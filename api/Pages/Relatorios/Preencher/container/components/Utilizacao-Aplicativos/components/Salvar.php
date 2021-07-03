<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

    echo "<br><br>Usado Aplicativo após Evento: " . $UsadoAposEvento = $_POST['utilizacao_app_mobilidade'];

    echo "<br>Motorista por aplicativo: " . $MotoristaAplicativo = $_POST['motorista_aplicativo'];

    
    
  }else{
    
    //PROD
    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

    "<br><br>Usado Aplicativo após Evento: " . $UsadoAposEvento = $_POST['utilizacao_app_mobilidade'];
    
    "<br>Motorista por aplicativo: " . $MotoristaAplicativo = $_POST['motorista_aplicativo'];
    
  }

  //Cadastrar uso de aplicativo de mobilidade após evento
  include 'Uso-Aplicativo/index.php';
  
  //Cadastrar Motorista por aplicativo
  if( $MotoristaAplicativo == 1 ){
    include 'Motorista-Aplicativo/index.php';
  }

  //Update de status de última modificação do relatório
  include 'Update-Status-Relatorio.php';