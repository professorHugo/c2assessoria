<?php
echo "<br><pre>" . 
$QueryBuscarFotoQueixa = "
    SELECT * FROM 
        tb_fotos 
    WHERE 
        categoria_foto = 'queixa_registrada' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotoQueixa = mysqli_query($connection, $QueryBuscarFotoQueixa);
$RowQrBuscarFotoQueixa = mysqli_num_rows($ExeQrBuscarFotoQueixa);