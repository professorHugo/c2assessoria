<?php
echo "<br><pre>" . 
$QueryBuscarFotoProntuario = "
  SELECT * FROM tb_fotos
  WHERE 
    categoria_foto = 'prontuario_associado' &&
    protocolo_foto = '$Protocolo' &&
    nome_foto = '$Prontuario'
";
echo "</pre>";
$ExeQrBuscarFotoProntuario = mysqli_query($connection, $QueryBuscarFotoProntuario);
$RowQrBuscarFotoProntuario = mysqli_num_rows($ExeQrBuscarFotoProntuario);