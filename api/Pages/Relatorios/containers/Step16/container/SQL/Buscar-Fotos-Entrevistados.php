<?php
echo "<br><pre>" . 
$QueryBuscarFotosDeclaracaoEntrevistados = "
    SELECT * FROM tb_fotos
    WHERE 
        protocolo_foto = '$Protocolo' &&
        categoria_foto = 'declaracao_entrevistado_c' &&
        nome_foto = '$FotoDeclaracaoEntevistado'
";
echo "</pre>";
$ExeQrBuscarFotosDeclaracaoEntrevistados = mysqli_query(
    $connection, $QueryBuscarFotosDeclaracaoEntrevistados
);

$RowQrBuscarFotosDeclaracaoEntrevistados = mysqli_num_rows(
    $ExeQrBuscarFotosDeclaracaoEntrevistados
);