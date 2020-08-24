<?php
if( is_dir("Docs/".$CPFAssociado."/") ){
    echo "<br><br>Pasta de arquivos do associado: " . $PastaAssociado = "Docs/" . $CPFAssociado;

    include_once "Uploads/Procedentes.php";
    include_once "Uploads/Chaves.php";
    include_once "Uploads/Sistemas-Anti-Furto.php";
    
}