<?php
echo "<br>Cadastrar foto no Banco de dados<pre>" . 
$QueryCadastrarFotoCNHAssociado = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'cnh_associado',
        '$Protocolo',
        '$CPFAssociado',
        '$CNHAssociadoArquivo'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoCNHAssociado = mysqli_query(
    $connection, $QueryCadastrarFotoCNHAssociado
);