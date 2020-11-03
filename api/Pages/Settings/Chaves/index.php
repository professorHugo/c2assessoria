<?php
 "<br><pre>" . 
$QueryBuscarChaves = "
    SELECT * FROM tb_tipos_chaves
";
 "</pre>";
$ExeQrBuscarChaves = mysqli_query($connection, $QueryBuscarChaves);
$RowQrBuscarChaves = mysqli_num_rows($ExeQrBuscarChaves);

include "View/index.php";