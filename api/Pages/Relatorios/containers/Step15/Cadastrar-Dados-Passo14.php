<?php
echo "<br><pre>" . 
$QueryBuscarProcedimentos = "
    SELECT * FROM tb_pr_legal
    WHERE protocolo_pr_legal = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarProcedimentos = mysqli_query($connection, $QueryBuscarProcedimentos);
$RowQrBuscarProcedimentos = mysqli_num_rows($ExeQrBuscarProcedimentos);

if( $RowQrBuscarProcedimentos >= 1 ){
    echo "
        <br>Procedimentos encontrados para o protocolo <b>$Protocolo</b>.
        Atualizar o registro dos procedimentos legais.
    ";
}else{
    echo "
        <br>Procedimentos ainda <b>não</b> registrados para o protocolo <b>$Protocolo</b>.
        Efetuar o cadastro dos procedimentos
    ";
    //Fazer o upload do arquivo
}