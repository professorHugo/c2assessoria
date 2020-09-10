<?php
echo "<br><pre>" . 
$QueryBuscarFotoPC = "
    SELECT * FROM tb_fotos
    WHERE protocolo_foto = '$Protocolo' AND categoria_foto = 'policia_civil'
";
echo "</pre>";
$ExeQrBuscarFotoPC = mysqli_query($connection, $QueryBuscarFotoPC);
$RowQrBuscarFotoPC = mysqli_num_rows($ExeQrBuscarFotoPC);