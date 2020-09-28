<?php
echo "<br><pre>" . 
$QueryCadastrarFotoMobilidade = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'mobilidade_urbana',
        '$Protocolo',
        '$CPFAssociado',
        '$FotoMobilidade'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoMobilidade = mysqli_query($connection, $QueryCadastrarFotoMobilidade);