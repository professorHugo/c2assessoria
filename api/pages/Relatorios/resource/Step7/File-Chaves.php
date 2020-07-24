<?php
echo "<br> Chaves Apresentadas: " . $ChavesApresentadas = $_POST['chaves_apresentadas'];
switch ($ChavesApresentadas) {
    case 1:
        $ChaveApresentada = "De_Uso";
    break;
    case 2:
        $ChaveApresentada = "Reserva";
    break;
    case 3:
        $ChaveApresentada = "Nao_Apresentado";
    break;
}
//Upload de foto da chave apresentada

if($ChavesApresentadas != 3){
    echo "<br> Upload da foto da chave... " . $FotoChave = $_FILES['foto_chaves_apresentadas']['name'];
    include_once "Uploads/Upload-Chaves.php";
}