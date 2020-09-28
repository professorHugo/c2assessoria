<?php
echo "<br><pre>" . 
$QueryBuscaRegistroMobilidade = "
    SELECT * FROM tb_registro_mobilidade
    WHERE
        protocolo_mobilidade = '$Protocolo'&&
        placa_mobilidade = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrBuscaRegistroMobilidade = mysqli_query($connection, $QueryBuscaRegistroMobilidade);
$RowQrBuscaRegistroMobilidade = mysqli_num_rows($ExeQrBuscaRegistroMobilidade);