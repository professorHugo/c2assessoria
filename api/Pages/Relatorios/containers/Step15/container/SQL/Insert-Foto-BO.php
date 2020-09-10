<?php
echo "<br><pre>" . 
$QueryCadastrarFotoBO = "
    INSERT INTO tb_fotos(
        protocolo_foto,
        categoria_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        '$Protocolo',
        'boletim_ocorrencia',
        '$CPFAssociado',
        '$FotoAcionadoBO'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoBO = mysqli_query($connection, $QueryCadastrarFotoBO);
