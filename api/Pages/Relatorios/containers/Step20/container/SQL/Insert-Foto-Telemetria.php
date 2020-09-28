<?php
echo "<br><pre>" . 
$QueryCadastrarFotoTelemetria = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'telemetria',
        '$Protocolo',
        '$CPFAssociado',
        '$FotoTelemetria'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoTelemetria = mysqli_query($connection, $QueryCadastrarFotoTelemetria);