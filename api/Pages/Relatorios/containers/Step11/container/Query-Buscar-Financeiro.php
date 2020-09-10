<?php
echo "<br><pre>" . 
$QueryBuscarFinanceiro = "
    SELECT * FROM tb_financeiro_veiculo
    WHERE protocolo_financeiro = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarFinanceiro = mysqli_query($connection, $QueryBuscarFinanceiro);
$RowQrBuscarFinanceiro = mysqli_num_rows($ExeQrBuscarFinanceiro);