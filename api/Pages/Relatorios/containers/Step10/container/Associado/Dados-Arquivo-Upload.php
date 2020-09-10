<?php
//Extensão do arquivo
$extensao = pathinfo( $_FILES['foto_cnh_associado']['name'] );
echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$CNHAssociadoArquivo = "CNH_Associado_" . $CNHAssociado.$extensao;
echo "<br>Destino Upload: " . 
$target_file2 = "Docs/" . $CPFAssociado . "/" . $CNHAssociadoArquivo;