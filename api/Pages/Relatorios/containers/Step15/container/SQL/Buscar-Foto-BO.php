<?php
echo "<br><pre>" . 
$QueryBuscarFotoBO = "
    SELECT * FROM tb_fotos
    WHERE protocolo_foto = '$Protocolo' AND categoria_foto = 'boletim_ocorrencia'
";
echo "</pre>";
$ExeQrBuscarFotoBO = mysqli_query($connection, $QueryBuscarFotoBO);
$RowQrBuscarFotoBO = mysqli_num_rows($ExeQrBuscarFotoBO);