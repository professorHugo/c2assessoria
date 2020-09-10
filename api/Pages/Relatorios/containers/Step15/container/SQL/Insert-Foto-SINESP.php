<?php
echo "<br><pre>" . 
$QueryCadastrarFotoSINESP = "
    INSERT INTO tb_fotos(
        protocolo_foto,
        categoria_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        '$Protocolo',
        'registro_sinesp',
        '$CPFAssociado',
        '$FotoAcionadoSINESP'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoSINESP = mysqli_query($connection, $QueryCadastrarFotoSINESP);
