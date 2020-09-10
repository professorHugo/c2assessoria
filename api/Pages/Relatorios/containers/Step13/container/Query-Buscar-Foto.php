<?php
echo "<br><pre>" . 
$QueryBuscarFotoDeclaracao = "
    SELECT * FROM tb_fotos
    WHERE 
        protocolo_foto = '$Protocolo' AND 
        categoria_foto = 'declaracao_entrevistado' AND
        nome_foto = '$DeclaracaoEntrevistado'
";
echo "</pre>";
$ExeQrBuscarFotoDeclaracao = mysqli_query($connection, $QueryBuscarFotoDeclaracao);
$RowQrBuscarFotoDeclaracao = mysqli_num_rows($ExeQrBuscarFotoDeclaracao);