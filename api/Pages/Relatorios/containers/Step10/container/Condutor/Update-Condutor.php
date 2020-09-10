<?php
echo "<br><pre>" . 
$QueryBuscarCNH = "
    SELECT * FROM tb_cnh_registros
    WHERE protocolo_cnh = '$Protocolo' AND dono_cnh = 2
";
echo "</pre>";
$ExeQrBuscarCNH = mysqli_query($connection, $QueryBuscarCNH);
$RowQrBuscarCNH = mysqli_num_rows($ExeQrBuscarCNH);
if( $RowQrBuscarCNH >= 1 ){
    while( $ReturnCNH = mysqli_fetch_assoc($ExeQrBuscarCNH) ){
        $IdCNHCondutor = $ReturnCNH['id_cnh'];
    }
    echo "<br><pre>" . 
    $QueryUpdateCNHCondutor = "
        UPDATE tb_condutores
            SET cnh_condutor = '$IdCNHCondutor'
        WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrUpdateCNHCondutor = mysqli_query($connection, $QueryUpdateCNHCondutor);
    if( $ExeQrUpdateCNHCondutor ){
        echo "<br>CNH do condutor do protocolo <b>$Protocolo</b> 
        atualizado com o id $IdCNHCondutor";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}