<?php
echo "<br><pre>" . 
$QueryBuscarFotosCNH = "
    SELECT * FROM 
        tb_fotos 
    WHERE categoria_foto = 'cnh_condutor' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotosCNH = mysqli_query($connection, $QueryBuscarFotosCNH);
$RowQrBuscarFotosCNH = mysqli_num_rows($ExeQrBuscarFotosCNH);