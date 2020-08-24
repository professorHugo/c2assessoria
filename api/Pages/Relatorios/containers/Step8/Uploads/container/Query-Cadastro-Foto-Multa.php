<?php
echo "<br>Cadastro da foto
<pre>" . 
$QueryCadastrarFotoMulta = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'multa_evento',
        '$Protocolo',
        '$CPFAssociado',
        '$FotoMultaArquivo'
    )
";
echo "</pre>";