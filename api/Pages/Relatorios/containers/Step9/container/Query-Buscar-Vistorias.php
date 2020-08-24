<?php
echo "<br><pre>" . 
$QueryBuscarFotosVistoria = "
    SELECT * FROM 
        tb_fotos 
    WHERE categoria_foto = 'vistorias_realizadas' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFotosVistoria = mysqli_query($connection, $QueryBuscarFotosVistoria);
$RowQrBuscarFotosVistoria = mysqli_num_rows($ExeQrBuscarFotosVistoria);