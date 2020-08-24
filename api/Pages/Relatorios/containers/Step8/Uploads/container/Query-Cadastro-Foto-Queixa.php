<?php
echo "<br>Cadastro da foto
<pre>" . 
$QueryCadastrarFotoQueixa = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'queixa_registrada',
        '$Protocolo',
        '$CPFAssociado',
        '$PrintQueixaRegistradaFile'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoQueixa = mysqli_query(
    $connection, $QueryCadastrarFotoQueixa
);