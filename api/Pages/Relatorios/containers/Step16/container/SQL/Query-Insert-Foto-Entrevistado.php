<?php
echo "<br><pre>" . 
$QueryCadastrarFotoDeclaracaoCondutor = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'declaracao_entrevistado_c',
        '$Protocolo',
        '$CPFAssociado',
        '$FotoDeclaracaoEntevistado'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoDeclaracaoCondutor = mysqli_query(
    $connection, $QueryCadastrarFotoDeclaracaoCondutor
);