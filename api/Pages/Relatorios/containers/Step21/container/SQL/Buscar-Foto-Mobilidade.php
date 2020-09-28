<?php
echo "<br><pre>" . 
$QueryBuscarFotoMobilidade = "
    SELECT * FROM tb_fotos
    WHERE 
        categoria_foto = 'mobilidade_urbana' &&
        protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotoMobilidade = mysqli_query($connection, $QueryBuscarFotoMobilidade);
$RowBuscarFotoMobilidade = mysqli_num_rows($ExeQrBuscarFotoMobilidade);