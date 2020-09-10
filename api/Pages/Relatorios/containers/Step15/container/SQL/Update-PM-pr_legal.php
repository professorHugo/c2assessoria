<?php
while( $ReturnFotoPM = mysqli_fetch_assoc($ExeQrBuscarFotoPM) ){
    $IdFotoPM = $ReturnFotoPM['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdatePM = "
    UPDATE tb_pr_legal
    SET
        pm_resposta = '$PoliciamentoMilitarR',
        pm_pr_legal = '$IdFotoPM'
    WHERE protocolo_pr_legal = '$Protocolo'
";
echo "</pre>";

$ExeQrUpdatePM = mysqli_query($connection, $QueryUpdatePM);
if( $ExeQrUpdatePM ){
    echo "<br>Update feito no procedimento com a foto <b>$IdFotoPM</b>";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}