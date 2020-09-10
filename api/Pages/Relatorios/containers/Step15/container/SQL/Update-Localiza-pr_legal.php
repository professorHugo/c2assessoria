<?php
while( $ReturnFotoLocaliza = mysqli_fetch_assoc( $ExeQrBuscarFotoLocaliza ) ){
    $IdFotoLocaliza = $ReturnFotoLocaliza['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdateLocaliza = "
    UPDATE tb_pr_legal
    SET
        localizacao_resposta = '$PoliciamentoCivilR',
        localizacao_pr_legal = '$IdFotoLocaliza'
    WHERE protocolo_pr_legal = '$Protocolo'
";
echo "</pre>";

$ExeQrUpdateLocaliza = mysqli_query($connection, $QueryUpdateLocaliza);
if( $ExeQrUpdateLocaliza ){
    echo "<br>Update feito no procedimento com a foto <b>$IdFotoLocaliza</b>";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}