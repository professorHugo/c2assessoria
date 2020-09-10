<?php
echo "<br><pre>" . 
$QueryCadastrarFotoPC = "
    INSERT INTO tb_fotos(
        protocolo_foto,
        categoria_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        '$Protocolo',
        'policia_civil',
        '$CPFAssociado',
        '$FotoAcionadoPC'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoPC = mysqli_query($connection, $QueryCadastrarFotoPC);
