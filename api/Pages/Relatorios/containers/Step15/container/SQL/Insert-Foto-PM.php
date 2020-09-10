<?php
echo "<br><pre>" . 
$QueryCadastrarFotoPM = "
    INSERT INTO tb_fotos(
        protocolo_foto,
        categoria_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        '$Protocolo',
        'policia_militar',
        '$CPFAssociado',
        '$FotoAcionadoPM'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoPM = mysqli_query($connection, $QueryCadastrarFotoPM);
