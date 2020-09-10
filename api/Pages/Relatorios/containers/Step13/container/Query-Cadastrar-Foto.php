<?php
echo "<br>Foto não cadastrada no banco de dados, 
cadastrar a foto para atualizar a declaração.";

echo "<br><pre>" . 
$QueryCadastrarFotoDeclaracao = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'declaracao_entrevistado',
        '$Protocolo',
        '$CPFAssociado',
        '$DeclaracaoEntrevistado'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoDeclaracao = mysqli_query($connection, $QueryCadastrarFotoDeclaracao);