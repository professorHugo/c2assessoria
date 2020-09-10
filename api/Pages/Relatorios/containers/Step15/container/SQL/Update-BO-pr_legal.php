<?php
while( $ReturnFotoBO = mysqli_fetch_assoc( $ExeQrBuscarFotoBO ) ){
     "<br>Id BO: " . $IdFotoBO = $ReturnFotoBO['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdateBO = "
    UPDATE tb_pr_legal
    SET
        boletim_resposta = '$BoletimDeOcorrenciaR',
        boletim_pr_legal = '$IdFotoBO',
        boletim_autentico = '$BoletimAutentico'
    WHERE protocolo_pr_legal = '$Protocolo'
";
echo "</pre>";

$ExeQrUpdateBO = mysqli_query($connection, $QueryUpdateBO);
if( $ExeQrUpdateBO ){
    echo "<br>Update feito no procedimento com a foto <b>$IdFotoBO</b>";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}