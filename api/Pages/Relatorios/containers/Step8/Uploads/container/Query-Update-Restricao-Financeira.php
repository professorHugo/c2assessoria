<?php
echo "<br><pre>" . 
$QueryBuscarFotoRestricaoFin = "
    SELECT * FROM 
        tb_fotos 
    WHERE 
        categoria_foto = 'restricoes_financeiras' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotoRestricaoFin = mysqli_query($connection, $QueryBuscarFotoRestricaoFin);
$RowQrBuscarFotoRestricaoFin = mysqli_num_rows($ExeQrBuscarFotoRestricaoFin);