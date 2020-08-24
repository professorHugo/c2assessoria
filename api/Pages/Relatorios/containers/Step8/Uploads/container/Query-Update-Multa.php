<?php
echo "<br><pre>" . 
$QueryBuscarFotoMulta = "
    SELECT * FROM 
        tb_fotos 
    WHERE 
        categoria_foto = 'multa_evento' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotoMulta = mysqli_query($connection, $QueryBuscarFotoMulta);
$RowQrBuscarFotoMulta = mysqli_num_rows($ExeQrBuscarFotoMulta);