<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    echo "<br>";
    echo "<br>";
  
    //Criar registro na tb_local_evento
    echo "<br><pre>" .
    $QueryBuscarLocalEvento = "
      SELECT * FROM tb_local_evento
      WHERE protocolo_local_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
    $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
    if( $RowQrBuscarLocalEvento < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarLocalEvento = "
        INSERT INTO tb_local_evento(
          protocolo_local_evento
        )VALUES(
          '$Protocolo'
        )
      ";
      echo "</pre>";
      if( $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryCadastrarLocalEvento) ){
        echo "<br>Local do evento cadastrado com sucesso!";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      echo "<br>Local do evento já cadastrado";
    }
  
    if( !empty($_FILES['print_foto_img_evento1']['name']) ){
      include 'Uploads/Foto-Evento1.php';
      echo "<br>";
    }
  
    if( !empty($_FILES['print_foto_img_evento2']['name']) ){
      include 'Uploads/Foto-Evento2.php';
      echo "<br>";
    }
  
    if( !empty($_FILES['print_foto_img_evento3']['name']) ){
      include 'Uploads/Foto-Evento3.php';
      echo "<br>";
    }
  
    //update relatório com o local do evento
    include 'Update-Relatorio.php';
  }else{

    //PROD
    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    "<br>";
    "<br>";
  
    //Criar registro na tb_local_evento
    "<br><pre>" .
    $QueryBuscarLocalEvento = "
      SELECT * FROM tb_local_evento
      WHERE protocolo_local_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
    $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
    if( $RowQrBuscarLocalEvento < 1 ){
      "<br><pre>" . 
      $QueryCadastrarLocalEvento = "
        INSERT INTO tb_local_evento(
          protocolo_local_evento
        )VALUES(
          '$Protocolo'
        )
      ";
      "</pre>";
      if( $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryCadastrarLocalEvento) ){
        "<br>Local do evento cadastrado com sucesso!";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }else{
      "<br>Local do evento já cadastrado";
    }
  
    if( !empty($_FILES['print_foto_img_evento1']['name']) ){
      include 'Uploads/Foto-Evento1.php';
      "<br>";
    }
  
    if( !empty($_FILES['print_foto_img_evento2']['name']) ){
      include 'Uploads/Foto-Evento2.php';
      "<br>";
    }
  
    if( !empty($_FILES['print_foto_img_evento3']['name']) ){
      include 'Uploads/Foto-Evento3.php';
      "<br>";
    }
  
    //update relatório com o local do evento
    include 'Update-Relatorio.php';
  }