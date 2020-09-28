<div class="col-12" style="margin-top: 2rem"></div>

<?php
 "<br><pre>".
$QueryBuscarMidiaSocialCondutor = "
    SELECT * FROM tb_fotos
    WHERE 
        protocolo_foto = '$Protocolo'&&
        pasta_foto = '$CPFAssociado' &&
        categoria_foto = 'print_midia_social_condutor'
";
 "</pre>";
$ExeQrBuscarMidiaSocialCondutor = mysqli_query($connection, $QueryBuscarMidiaSocialCondutor);
if( mysqli_num_rows($ExeQrBuscarMidiaSocialCondutor) >= 1 ){
    while( $ReturnFotoCondutor = mysqli_fetch_assoc($ExeQrBuscarMidiaSocialCondutor) ){
        $Foto = $ReturnFotoCondutor['nome_foto'];
        ?>
            <h5 class="col-12" style="border-bottom: 1px solid #ddd">Apontamento em rede social: </h5>
        
            <div class="col-12 text-center">
                <img 
                    src="Docs/<?php echo $CPFAssociado . "/".$Foto ?>" 
                    alt="<?php echo $CPFAssociado?>"
                    title="<?php echo $ReturnFotoCondutor['nome_foto']?>"
                    class="img-fluid"
                >
            </div>
        <?php
    }
}
?>