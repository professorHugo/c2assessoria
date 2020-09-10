<?php
echo "<br>Buscar Locais pelo protocolo<pre>" . 
$QueryBuscarLocalEvento = "
    SELECT * FROM tb_local_evento
    WHERE protocolo_local = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
$RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);