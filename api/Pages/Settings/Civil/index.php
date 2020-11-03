<?php
 "<br><pre>" . 
$QueryBuscarCivil = "
    SELECT * FROM tb_tipos_civil
";
 "</pre>";
$ExeQrBuscarCivil = mysqli_query($connection, $QueryBuscarCivil);
$RowQrBuscarCivil = mysqli_num_rows($ExeQrBuscarCivil);

include "View/index.php";