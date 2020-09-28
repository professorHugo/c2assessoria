<?php
echo "<br><pre>".
$UpdateRelatorio = "
    UPDATE tb_relatorios
    SET 
        status_relatorio = '$_GET[Step]'
    WHERE protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateRelatorio = mysqli_query($connection, $UpdateRelatorio);
if( $ExeQrUpdateRelatorio ){
    echo "<br>Relatório atualizado";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}