<?php
while( $ReturnFotoSINESP = mysqli_fetch_assoc($ExeQrBuscarFotoSINESP) ){
    $IdFotoSINESP = $ReturnFotoSINESP['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdateSINESP = "
    UPDATE tb_pr_legal
    SET
        resposta_sinesp = '$RegistroSINESP_R',
        sinesp_pr_legal = '$IdFotoSINESP',
        print_sinesp = '$RegistroSINESP_R'
    WHERE protocolo_pr_legal = '$Protocolo'
";
echo "</pre>";

$ExeQrUpdateSINESP = mysqli_query($connection, $QueryUpdateSINESP);
if( $ExeQrUpdateSINESP ){
    echo "<br>Update feito no procedimento com a foto <b>$IdFotoSINESP</b>";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}