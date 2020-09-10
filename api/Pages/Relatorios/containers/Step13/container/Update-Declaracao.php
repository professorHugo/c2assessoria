<?php
echo "<br>Foto cadastrada no banco de dados, atualizar a declaração.";
echo "<br><pre>" . 
$QueryUpdateDeclaracao = "
    UPDATE tb_entrevistados
    SET
        foto_declaracao_entrevistado = '$IdFoto'
    WHERE protocolo_entrevistados = '$Protocolo' AND id_entrevistado = '$IdEntrevistado'
";
echo "</pre>";
$ExeQrUpdateDeclaracao = mysqli_query($connection, $QueryUpdateDeclaracao);
if( $ExeQrUpdateDeclaracao ){
    echo "<br>Declaração atualizada com a foto de id <b>$IdFoto</b>";
}else{
    echo "<br>Erro ao atualizar: " . mysqli_error($connection);
}