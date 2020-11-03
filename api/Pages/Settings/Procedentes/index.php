<?php
 "<br><pre>" . 
$QueryBuscarProcedente = "
    SELECT * FROM tb_tipos_procedentes
";
 "</pre>";
$ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
$RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

include "View/index.php";