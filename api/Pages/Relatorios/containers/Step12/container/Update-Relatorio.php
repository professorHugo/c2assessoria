<?php

while($ResLocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento)){
    echo "<br>Id Local: " . $IdLocal = $ResLocalEvento['id_local'];
}

echo "</pre>";
echo "<br><pre>" . 
$QueryUpdateRelatorio = "
    UPDATE tb_relatorios
        SET local_evento = '$IdLocal'
    WHERE protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);

if( $ExeQrUpdateRelatorio ){
    echo "<br>Local do evento atualizado na <b>tb_relatorios</b>
    com o protocolo <b>$Protocolo</b>
    ";
}else{
    echo "<br>Erro ao atualizar: " . mysqli_error($connection);
}