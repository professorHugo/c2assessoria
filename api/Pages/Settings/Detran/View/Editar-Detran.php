<?php
echo "<br>Editar Estado";
echo "<br>Id Estado: " . $IdEstado = $_POST['id_detran'];
echo "<br>Sigla Estado: " . $EstadoDetran = $_POST['nome'];

echo "<br><pre>" . 
$QueryBuscarEstados = "
  SELECT * FROM tb_detran_estados
  WHERE id_detran = '$IdEstado'
";
echo "</pre>";

$ExeQrBuscarEstados = mysqli_query($connection, $QueryBuscarEstados);
$RowQrBuscarEstados = mysqli_num_rows($ExeQrBuscarEstados);

if( $RowQrBuscarEstados = 1 ){
  echo "<br><pre>" . 
  $QueryEditarEstado = "
    UPDATE tb_detran_estados
    SET estado_detran = '$EstadoDetran'
    WHERE id_detran = '$IdEstado'
  ";
  echo "</pre>";
  $ExeQrEditarEstado = mysqli_query($connection, $QueryEditarEstado);

  if( $ExeQrBuscarEstados ){
    echo "<br>Estado <b>$IdEstado</b> alterado para <b>$EstadoDetran</b>";
    echo "<meta http-equiv='refresh' content='0;?Page=Settings&Detran'>";
  }
}