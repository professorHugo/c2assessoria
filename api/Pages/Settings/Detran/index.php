<?php
 "<br><pre>" . 
$QueryBuscarDetran = "
    SELECT * FROM tb_detran_estados
";
 "</pre>";
$ExeQrBuscarDetran = mysqli_query($connection, $QueryBuscarDetran);
$RowQrBuscarDetran = mysqli_num_rows($ExeQrBuscarDetran);

include "View/index.php";