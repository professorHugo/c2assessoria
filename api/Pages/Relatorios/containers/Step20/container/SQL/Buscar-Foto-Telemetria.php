<?php
echo "<br><pre>" . 
$QueryBuscarFotoTelemetria = "
    SELECT * FROM tb_fotos
    WHERE 
        categoria_foto = 'telemetria' &&
        protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotoTelemetria = mysqli_query($connection, $QueryBuscarFotoTelemetria);
$RowQrBuscarFotoTelemetria = mysqli_num_rows($ExeQrBuscarFotoTelemetria);