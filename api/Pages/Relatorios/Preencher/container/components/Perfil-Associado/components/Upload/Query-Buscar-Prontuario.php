<?php
echo "<br><pre>" . 
$QueryBuscarProntuario = "
  SELECT * FROM tb_cnh_registros
  WHERE 
    protocolo_cnh = '$Protocolo'
";
echo "</pre>";
echo "<br>";
$ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
$RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);