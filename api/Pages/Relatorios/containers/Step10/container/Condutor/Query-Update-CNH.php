<?php
echo "<br><pre>" . 
$QueryImgCNHCondutor = "
    SELECT * FROM tb_fotos
    WHERE categoria_foto = 'cnh_condutor' AND protocolo_foto = '$Protocolo'
";
echo "</pre>";
$ExeQrImgCNHCondutor = mysqli_query($connection, $QueryImgCNHCondutor);
$RowQrImgCNHCondutor = mysqli_num_rows($ExeQrImgCNHCondutor);

if( $RowQrBuscarFotosCNH >= 1 ){
    while( $ReturnFotoCNH = mysqli_fetch_assoc($ExeQrImgCNHCondutor) ){
        echo "<br>Id foto: " . $IdFotoCNHCondutor = $ReturnFotoCNH['id_foto'];
    }
    
    echo "<br><pre>" . 
    $QueryUpdateImgCNH = "
        UPDATE tb_cnh_registros
            SET img_cnh = '$IdFotoCNHCondutor'
        WHERE protocolo_cnh = '$Protocolo' AND dono_cnh = 2
    ";
    echo "</pre>";
    $ExeQrUpdateImgCNH = mysqli_query($connection, $QueryUpdateImgCNH);
    if( $ExeQrUpdateImgCNH ){
        echo "<br>CNH atualizada com a foto <b>$IdFotoCNHCondutor</b>";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}