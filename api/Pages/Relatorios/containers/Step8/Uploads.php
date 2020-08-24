<?php
if( is_dir("Docs/".$CPFAssociado."/") ){
    echo "<br><br>Pasta de arquivos do associado: " . $PastaAssociado = "Docs/" . $CPFAssociado;

    include_once "Uploads/Multa-Evento.php";
    echo "<hr>";
    include_once "Uploads/Restricoes-Diversas.php";
    echo "<hr>";
    include_once "Uploads/Restricoes-Financeiras.php";
    echo "<hr>";
    include_once "Uploads/Queixa-Registrada.php";
    
}