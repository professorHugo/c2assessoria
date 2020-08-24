<?php
echo "<br><pre>" . 
$QueryBuscarVistoria = "
    SELECT * FROM tb_vistorias_realizadas
    WHERE protocolo_vistoria = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarVistoria = mysqli_query($connection, $QueryBuscarVistoria);
$RowQrBuscarVistoria = mysqli_num_rows($ExeQrBuscarVistoria);
if( $RowQrBuscarVistoria >= 1 ){
    echo "<br><pre>" . 
    $QueryBuscarFotoVistoria = "
        SELECT * FROM tb_fotos
        WHERE categoria_foto = 'vistorias_realizadas' AND protocolo_foto = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoVistoria = mysqli_query($connection, $QueryBuscarFotoVistoria);
    $RowQrBuscarFotoVistoria = mysqli_num_rows($ExeQrBuscarFotoVistoria);
    if( $ExeQrBuscarFotoVistoria >= 1 ){
        while($ReturnFoto = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria)){
           $IdVistoria = $ReturnFoto['id_foto'];
        }

        echo "<br><pre>" . 
        $QueryUpdateArquivoVistoria = "
            UPDATE tb_vistorias_realizadas
            SET
                arquivo_vistoria = '$IdVistoria'
            WHERE protocolo_vistoria = '$Protocolo'
        ";
        echo "</pre>";
        $ExeQrUpdateArquivoVistoria = mysqli_query($connection, $QueryUpdateArquivoVistoria);
        if( $ExeQrUpdateArquivoVistoria ){
            echo "<br>Arquivo <b>$FotoVistoriaArquivo</b> atualizdo na <b>tb_vistorias_realizadas</b>";
        }else{
            echo "<br>Erro ao atualizar: " .mysqli_error($connection);
        }


    }

    
}