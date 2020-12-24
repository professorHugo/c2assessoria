<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br>Procedente: " . $Proecedente = $_POST['procedente_veiculo'];
  echo "<br>Comprovante Apresentado" . $Comprovante = $_POST['comprovante_procedente'];
  echo "<br>CPF: " . $CPFAssociado = $_POST['cpf_associado'];
  echo "<br>Placa: " . $PlacaVeiculo = $_POST['placa_veiculo'];
  echo "<br>Procedente: " . $ConfirmaProcedente = $_POST['procedente_veiculo'];

  include 'container/Cadastrar-Procedente.php';


  if( !empty( $_FILES['print_foto_comprovante1']['name'] ) ){
    echo "<br> Comprovante 1: " . $Comprovante1 = $_FILES['print_foto_comprovante1']['name'];
    include 'container/Uploads/Comprovante1.php';
  }

  if( !empty( $_FILES['print_foto_comprovante2']['name'] ) ){
    echo "<br><br> Comprovante 2: " . $Comprovante2 = $_FILES['print_foto_comprovante2']['name'];
    include 'container/Uploads/Comprovante2.php';
  }

  if( !empty( $_FILES['print_foto_comprovante3']['name'] ) ){
    echo "<br> Comprovante 3: " . $Comprovante3 = $_FILES['print_foto_comprovante3']['name'];
    include 'container/Uploads/Comprovante3.php';
  }

  //Atualizar Procedência
  echo "<br><pre>" . 
  $QueryBuscarProcedente = "
    SELECT * FROM tb_procedentes
    WHERE protocolo_procedente = '$Protocolo'
  ";
  echo "</pre>";
  $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
  $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);
  if( $RowQrBuscarProcedente <> 0 ){

    while($Procedente = mysqli_fetch_assoc($ExeQrBuscarProcedente)){
      $IdProcedente = $Procedente['id_procedente'];
    }

    echo "<br><pre>" . 
    $QueryUpdateVeiculo = "
      UPDATE tb_veiculos
      SET
        procedente_veiculo = '$IdProcedente'
      WHERE
        protocolo_evento = '$Protocolo' &&
        placa_veiculo = '$PlacaVeiculo'
    ";
    echo "</pre>";
    $ExeQrUpdateProcedente = mysqli_query($connection, $QueryUpdateVeiculo);
    if( $ExeQrUpdateProcedente ){
      echo "<br>Veículo atualizado com o procedente";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }

  //Update data de modificação do relatório
  include 'Update-Data-Modifica-Relatorio.php';
}else{
  //PROD

  "<br>Procedente: " . $Proecedente = $_POST['procedente_veiculo'];
  "<br>Comprovante Apresentado" . $Comprovante = $_POST['comprovante_procedente'];
  "<br>CPF: " . $CPFAssociado = $_POST['cpf_associado'];
  "<br>Placa: " . $PlacaVeiculo = $_POST['placa_veiculo'];
  "<br>Procedente: " . $ConfirmaProcedente = $_POST['procedente_veiculo'];

  include 'container/Cadastrar-Procedente.php';


  if( !empty( $_FILES['print_foto_comprovante1']['name'] ) ){
    "<br> Comprovante 1: " . $Comprovante1 = $_FILES['print_foto_comprovante1']['name'];
    include 'container/Uploads/Comprovante1.php';
  }

  if( !empty( $_FILES['print_foto_comprovante2']['name'] ) ){
    "<br><br> Comprovante 2: " . $Comprovante2 = $_FILES['print_foto_comprovante2']['name'];
    include 'container/Uploads/Comprovante2.php';
  }

  if( !empty( $_FILES['print_foto_comprovante3']['name'] ) ){
    "<br> Comprovante 3: " . $Comprovante3 = $_FILES['print_foto_comprovante3']['name'];
    include 'container/Uploads/Comprovante3.php';
  }

  //Atualizar Procedência
  "<br><pre>" . 
  $QueryBuscarProcedente = "
    SELECT * FROM tb_procedentes
    WHERE protocolo_procedente = '$Protocolo'
  ";
  "</pre>";
  $ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
  $RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);
  if( $RowQrBuscarProcedente <> 0 ){

    while($Procedente = mysqli_fetch_assoc($ExeQrBuscarProcedente)){
      $IdProcedente = $Procedente['id_procedente'];
    }

    "<br><pre>" . 
    $QueryUpdateVeiculo = "
      UPDATE tb_veiculos
      SET
        procedente_veiculo = '$IdProcedente'
      WHERE
        protocolo_evento = '$Protocolo' &&
        placa_veiculo = '$PlacaVeiculo'
    ";
    "</pre>";
    $ExeQrUpdateProcedente = mysqli_query($connection, $QueryUpdateVeiculo);
    if( $ExeQrUpdateProcedente ){
      "<br>Veículo atualizado com o procedente";
    }else{
      "<br>Erro: " . mysqli_error($connection);
    }
  }

  //Update data de modificação do relatório
  include 'Update-Data-Modifica-Relatorio.php';
}