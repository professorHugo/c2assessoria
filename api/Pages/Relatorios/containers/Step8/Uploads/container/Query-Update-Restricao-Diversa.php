<?php
echo "<br><pre>" . 
$QueryBuscarFotoRestricaoDiv = "
    SELECT * FROM 
        tb_fotos 
    WHERE 
        categoria_foto = 'restricoes_diversas' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotoRestricaoDiv = mysqli_query($connection, $QueryBuscarFotoRestricaoDiv);
$RowQrBuscarFotoRestricaoDiv = mysqli_num_rows($ExeQrBuscarFotoRestricaoDiv);