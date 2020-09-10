<?php
echo "<br><pre>" . 
$QueryCadastrarFotoLocaliza = "
    INSERT INTO tb_fotos(
        protocolo_foto,
        categoria_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        '$Protocolo',
        'localizacao',
        '$CPFAssociado',
        '$FotoAcionadoLocaliza'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoLocaliza = mysqli_query($connection, $QueryCadastrarFotoLocaliza);
