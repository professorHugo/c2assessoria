<?php
echo "<br><pre>" . 
$QueryBuscarFotoSINESP = "
    SELECT * FROM tb_fotos
    WHERE protocolo_foto = '$Protocolo' AND categoria_foto = 'registro_sinesp'
";
echo "</pre>";
$ExeQrBuscarFotoSINESP = mysqli_query($connection, $QueryBuscarFotoSINESP);
$RowQrBuscarFotoSINESP = mysqli_num_rows($ExeQrBuscarFotoSINESP);