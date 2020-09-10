<?php
echo "<br><pre>" . 
$QueryBuscarCNH2 = "
    SELECT * FROM tb_cnh_registros
    WHERE protocolo_cnh = '$Protocolo' AND dono_cnh = 1
";
echo "</pre>";
$ExeQrBuscarCNH2 = mysqli_query($connection, $QueryBuscarCNH2);
$RowQrBuscarCNH2 = mysqli_num_rows($ExeQrBuscarCNH2);
if( $RowQrBuscarCNH2 >= 1 ){
    while( $ReturnCNH2 = mysqli_fetch_assoc($ExeQrBuscarCNH2) ){
        $IdCNHAssociado = $ReturnCNH2['id_cnh'];
    }
    echo "<br><pre>" . 
    $QueryUpdateCNHCondutor = "
        UPDATE tb_associados
            SET cnh_associado = '$IdCNHAssociado'
        WHERE cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateCNHCondutor = mysqli_query($connection, $QueryUpdateCNHCondutor);
    if( $ExeQrUpdateCNHCondutor ){
        echo "<br>CNH do condutor do protocolo <b>$Protocolo</b> 
        atualizado com o id $IdCNHAssociado";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}