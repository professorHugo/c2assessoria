<?php
while( $ReturnFotoPC = mysqli_fetch_assoc( $ExeQrBuscarFotoPC ) ){
    $IdFotoPC = $ReturnFotoPC['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdatePC = "
    UPDATE tb_pr_legal
    SET
        pc_resposta = '$PoliciamentoCivilR',
        pc_pr_legal = '$IdFotoPC'
    WHERE protocolo_pr_legal = '$Protocolo'
";
echo "</pre>";

$ExeQrUpdatePC = mysqli_query($connection, $QueryUpdatePC);
if( $ExeQrUpdatePC ){
    echo "<br>Update feito no procedimento com a foto <b>$IdFotoPC</b>";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}