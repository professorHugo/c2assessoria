<?php
 "<br><pre>" . 
$QueryBuscarNaturezas = "
    SELECT * FROM tb_natureza_evento
";
 "</pre>";
$ExeQrBuscarNaturezas = mysqli_query($connection, $QueryBuscarNaturezas);
$RowQrBuscarNaturezas = mysqli_num_rows($ExeQrBuscarNaturezas);

include "View/index.php";