<?php
echo "<br><pre>" . 
$QueryImgCNHAssociado = "
    SELECT * FROM tb_fotos
    WHERE categoria_foto = 'cnh_associado' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrImgCNHAssociado = mysqli_query($connection, $QueryImgCNHAssociado);
$RowQrImgCNHAssociado2 = mysqli_num_rows($ExeQrImgCNHAssociado);

if( $RowQrImgCNHAssociado2 >= 1 ){
    while( $ReturnFotoCNH2 = mysqli_fetch_assoc($ExeQrImgCNHAssociado) ){
        echo "<br>Id foto: " . $IdFotoCNHAssociado = $ReturnFotoCNH2['id_foto'];
    }
    
    echo "<br><pre>" . 
    $QueryUpdateImgCNH2 = "
        UPDATE tb_cnh_registros
            SET img_cnh = '$IdFotoCNHAssociado'
        WHERE protocolo_cnh = '$Protocolo' AND dono_cnh = 1
    ";
    echo "</pre>";
    $ExeQrUpdateImgCNH2 = mysqli_query($connection, $QueryUpdateImgCNH2);
    if( $ExeQrUpdateImgCNH2 ){
        echo "<br>CNH atualizada com a foto <b>$IdFotoCNHAssociado</b>";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}