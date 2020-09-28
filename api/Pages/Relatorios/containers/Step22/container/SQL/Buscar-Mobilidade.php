<?php
echo "<br><pre>" . 
$QueryBuscarMobilidade = "
    SELECT * FROM
        tb_mobilidade
    WHERE 
        protocolo_mobilidade = '$Protocolo'&&
        placa_mobilidade = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrBuscarMobilidade = mysqli_query($connection, $QueryBuscarMobilidade);
$RowQrBuscarMobilidade = mysqli_num_rows($ExeQrBuscarMobilidade);