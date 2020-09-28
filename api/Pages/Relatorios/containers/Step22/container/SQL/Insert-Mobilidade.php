<?php
echo "<br><pre>" . 
$QueryInsertMobilidade = "
    INSERT INTO tb_mobilidade(
        protocolo_mobilidade,
        placa_mobilidade,
        registros_mobilidade,
        convergencia_mobilidade,
        motorista_mobilidade,
        app1_mobilidade,
        app2_mobilidade,
        app3_mobilidade,
        app4_mobilidade,
        app5_mobilidade,
        app6_mobilidade,
        observacao_mobilidade
    )VALUES(
        '$Protocolo',
        '$PlacaVeiculo',
        '$RegistrosAnteriores',
        '$RegistrosConvergem',
        '$MotoristaApp',
        '$app1',
        '$app2',
        '$app3',
        '$app4',
        '$app5',
        '$app6',
        '$Observacoes'
    )
";
echo "</pre>";
$ExeQrInsertMobilidade = mysqli_query($connection, $QueryInsertMobilidade);