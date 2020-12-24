<?php
echo "<br><pre>" . 
$QueryCadastrarProntuario = "
  INSERT INTO tb_cnh_registros(
    protocolo_cnh,
    dono_cnh,
    status_cnh
  )VALUES(
    '$Protocolo',
    '$CPFAssociado',
    '$StatusCNH'
  )
";
echo "</pre>";
$ExeQrCadastrarProntuario = mysqli_query($connection, $QueryCadastrarProntuario);
