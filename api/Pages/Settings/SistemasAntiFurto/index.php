<?php
 "<br><pre>" . 
$QueryBuscarAntiFurto = "
    SELECT * FROM tb_sistemas_anti_furto
";
 "</pre>";
$ExeQrBuscarAntiFurto = mysqli_query($connection, $QueryBuscarAntiFurto);
$RowQrBuscarAntiFurto = mysqli_num_rows($ExeQrBuscarAntiFurto);

include "View/index.php";