<div class="col-12" style="margin-top: 2rem"></div>

<?php
 "<br><pre>".
$QueryBuscarMidiaSocialAssociado = "
    SELECT * FROM tb_fotos
    WHERE 
        protocolo_foto = '$Protocolo'&&
        pasta_foto = '$CPFAssociado' &&
        categoria_foto = 'print_midia_social'
";
 "</pre>";
$ExeQrBuscarMidiaSocialAssociado = mysqli_query($connection, $QueryBuscarMidiaSocialAssociado);
if( mysqli_num_rows($ExeQrBuscarMidiaSocialAssociado) >= 1 ){
    while( $ReturnFoto = mysqli_fetch_assoc($ExeQrBuscarMidiaSocialAssociado) ){
        $Foto = $ReturnFoto['nome_foto'];
        ?>
            <h5 class="col-12" style="border-bottom: 1px solid #ddd">Apontamento em rede social: </h5>
        
            <div class="col-12 text-center">
                <img 
                    src="Docs/<?php echo $CPFAssociado . "/".$Foto ?>" 
                    alt="<?php echo $CPFAssociado?>"
                    title="<?php echo $ReturnFoto['nome_foto']?>"
                    class="img-fluid"
                >
            </div>
        <?php
    }
}
?>