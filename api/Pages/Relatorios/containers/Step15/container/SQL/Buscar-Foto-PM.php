<?php
echo "<br><pre>" . 
$QueryBuscarFotoPM = "
    SELECT * FROM tb_fotos
    WHERE protocolo_foto = '$Protocolo' AND categoria_foto = 'policia_militar'
";
echo "</pre>";
$ExeQrBuscarFotoPM = mysqli_query($connection, $QueryBuscarFotoPM);
$RowQrBuscarFotoPM = mysqli_num_rows($ExeQrBuscarFotoPM);