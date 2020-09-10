<?php
echo "<br>Cadastrar foto no Banco de dados<pre>" . 
$QueryCadastrarFotoCNHCondutor = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'cnh_condutor',
        '$Protocolo',
        '$CPFAssociado',
        '$CNHCondutorArquivo'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoCNHCondutor = mysqli_query(
    $connection, $QueryCadastrarFotoCNHCondutor
);