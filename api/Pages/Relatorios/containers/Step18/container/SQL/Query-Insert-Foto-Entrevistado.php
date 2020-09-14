<?php
echo "<br><pre>" . 
$QueryCadastrarFotoDeclaracaoAssociado = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'declaracao_entrevistado_a',
        '$Protocolo',
        '$CPFAssociado',
        '$FotoDeclaracaoEntevistado'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoDeclaracaoAssociado = mysqli_query(
    $connection, $QueryCadastrarFotoDeclaracaoAssociado
);