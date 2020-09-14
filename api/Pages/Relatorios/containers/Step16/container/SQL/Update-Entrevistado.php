<?php
while( $ReturnFotoEntrevistado = mysqli_fetch_assoc( $ExeQrBuscarFotosDeclaracaoEntrevistados ) ){
    echo "<br>Id foto: " . $IdFotoEntrevistado = $ReturnFotoEntrevistado['id_foto'];
}
echo "<br><pre>" . 
$QueryUpdateEntrevistado = "
    UPDATE tb_entrevistados
    SET
        foto_declaracao_entrevistado = '$IdFotoEntrevistado'
    WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        id_entrevistado = '$IdEntrevistado'
";
echo "</pre>";
$ExeQrUpdateEntrevistado = mysqli_query($connection, $QueryUpdateEntrevistado);

if( $ExeQrUpdateEntrevistado ){
    echo "
        <br>Update feito com sucesso com a foto <b>$IdFotoEntrevistado</b>
        no entrevistado <b>$IdEntrevistado</b>
    ";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}