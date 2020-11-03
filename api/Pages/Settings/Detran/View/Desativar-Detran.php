<?php
echo "<br>Desativar Estado";
echo "<br>Id Estado: " . $IdEstado = $_POST['id_detran'];
echo "<br>Sigla: " . $NomeEstado = $_POST['nome'];

$QueryBuscarEstado = "SELECT * FROM tb_detran_estados WHERE id_detran = '$IdEstado'";
$ExeQrBuscarEstado = mysqli_query($connection, $QueryBuscarEstado);
$RowQrBuscarEstado = mysqli_num_rows($ExeQrBuscarEstado);

if( $RowQrBuscarEstado = 1 ){
  echo "<br><pre>" . 
  $QueryEditarEstado = "
    UPDATE tb_detran_estados
    SET estado_detran = '$NomeEstado', ativacao = '2'
    WHERE id_detran = '$IdEstado'
  ";
  echo "</pre>";
  $ExeQrEditarEstado = mysqli_query($connection, $QueryEditarEstado);

  if( $ExeQrEditarEstado ){
    echo "<br>O estado <b>$IdEstado</b> atualizado e Desativado";
    echo "<meta http-equiv='refresh' content='0;?Page=Settings&Detran'>";
  }else{
    echo "<br>Erro: " . mysqli_error($connection);
  }
}