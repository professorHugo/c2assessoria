<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br><pre>" . 
  $QueryBuscarRegistroDetran = "
    SELECT * FROM tb_registro_detran
    WHERE protocolo_registro_detran = '$Protocolo'
  ";
  echo "</pre>";
  $ExeQrBuscarRegistroDetran = mysqli_query($connection, $QueryBuscarRegistroDetran);
  while( $Detran = mysqli_fetch_assoc($ExeQrBuscarRegistroDetran) ){
    echo "<br>Registro Detran: " . $IdDetran = $Detran['id_registro_detran'];
  }

  if( $VistoriaCautelar == 1 ){
    echo "<br><pre>" . 
    $QueryBuscarVistorias = "
      SELECT * FROM tb_vistorias_realizadas
      WHERE protocolo_vistoria = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarVistorias = mysqli_query($connection, $QueryBuscarVistorias);
    while( $Vistoria = mysqli_fetch_assoc($ExeQrBuscarVistorias) ){
      $IdVistoria = $Vistoria['id_vistoria'];
    }
    echo "<br><pre>" . 
    $QueryUpdateVeiculo = "
      UPDATE tb_veiculos
      SET
        vistoria_realizada = '$IdVistoria',
        registro_detran = '$IdDetran'
      WHERE
        protocolo_evento = '$Protocolo' &&
        placa_veiculo = '$PlacaVeiculo'
    ";
    echo "</pre>";
  }else{
    $IdVistoria = NULL;
    echo "<br><pre>" . 
    $QueryUpdateVeiculo = "
      UPDATE tb_veiculos
      SET
        registro_detran = '$IdDetran'
      WHERE
        protocolo_evento = '$Protocolo' &&
        placa_veiculo = '$PlacaVeiculo'
    ";
    echo "</pre>";
  }
  


  


  $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
  if( $ExeQrUpdateVeiculo ){
    echo "<br>Veículo atualizado com a Vistoria e Registro do Detran";
  }else{
    echo "<br>Erro: " . mysqli_error($connection);
  }
}else{

  //PROD
}