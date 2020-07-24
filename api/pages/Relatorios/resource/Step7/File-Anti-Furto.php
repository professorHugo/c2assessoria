<?php
echo "<br> Sistema anti-furto: " . $SistemaAntiFurto = $_POST['sistema_anti_furto'];

switch ($SistemaAntiFurto) {
    case 1:
        $SistemaApresentado = "De_Uso";
    break;
    case 2:
        $SistemaApresentado = "Reserva";
    break;
    case 3:
        $SistemaApresentado = "Nao_Apresentado";
    break;
}
//Upload de foto da chave apresentada
if($SistemaAntiFurto > 0){
    echo "<br> Fazer upload da foto do sistema anti-furto... " . $FotoSistemaAntiFurto = $_FILES['foto_sistema']['name'];
    include_once "Uploads/Upload-Anti-Furto.php";
}