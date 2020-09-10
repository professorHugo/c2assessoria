<?php
echo "<br><pre>" . 
$QueryBuscarFotoLocaliza = "
    SELECT * FROM tb_fotos
    WHERE protocolo_foto = '$Protocolo' AND categoria_foto = 'localizacao'
";
echo "</pre>";
$ExeQrBuscarFotoLocaliza = mysqli_query($connection, $QueryBuscarFotoLocaliza);
$RowQrBuscarFotoLocaliza = mysqli_num_rows($ExeQrBuscarFotoLocaliza);