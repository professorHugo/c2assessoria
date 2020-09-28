<?php
echo "<br>Contexto Geral: " . $ContextoGeral = $_POST['contexto_geral'];

echo "<br><pre>".
$QueryUpdateRelatorio = "
    UPDATE tb_relatorios
    SET
        contexto_geral_relatorio = '$ContextoGeral',
        status_relatorio = 'Preenchido'
    WHERE
        protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
