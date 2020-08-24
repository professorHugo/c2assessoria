<?php
echo "<br>Cadastro da foto
<pre>" . 
$QueryCadastrarFotoRestricoesDiv = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'restricoes_diversas',
        '$Protocolo',
        '$CPFAssociado',
        '$PrintRestricoesDiversasFile'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoRestricoesDiv = mysqli_query(
    $connection, $QueryCadastrarFotoRestricoesDiv
);