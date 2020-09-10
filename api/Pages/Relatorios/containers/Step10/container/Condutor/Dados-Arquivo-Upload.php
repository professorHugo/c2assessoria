<?php
//Extensão do arquivo
$extensao = pathinfo( $_FILES['foto_cnh_condutor']['name'] );
echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$CNHCondutorArquivo = "CNH_Condutor_" . $CNHCondutor.$extensao;
echo "<br>Destino Upload: " . 
$target_file = "Docs/" . $CPFAssociado . "/" . $CNHCondutorArquivo;