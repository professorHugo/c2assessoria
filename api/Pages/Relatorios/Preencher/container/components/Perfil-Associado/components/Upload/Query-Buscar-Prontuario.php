<?php
echo "<br><pre>" . 
$QueryBuscarProntuario = "
  SELECT * FROM tb_fotos
  WHERE 
    protocolo_foto = '$Protocolo' &&
    categoria_foto = 'prontuario_associado' &&
    nome_foto = '$Prontuario'
";
echo "</pre>";

$ExeQrBuscarProntuario = mysqli_query($connection, $QueryBuscarProntuario);
$RowQrBuscarProntuario = mysqli_num_rows($ExeQrBuscarProntuario);