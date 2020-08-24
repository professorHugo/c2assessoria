<?php
echo "Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];
echo "<br>CPF do associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];

echo "<br>Proprietario Legal: ";
$ProprietarioLegal = $_POST['proprietario_legal'];
if( $ProprietarioAnterior == 1 ){
    echo $ProprietarioLegal = "Associado";
}else{
    echo $ProprietarioLegal = "Terceiros";
}
echo "<br> Nome do Proprietario: " . $_POST['nome_proprietario_veiculo'];


if($ProprietarioLegal === "Terceiros"){
    echo "<br> Vínculo com Associado: ";
    $VinculoAssociado = $_POST['vinculo_associado'];
    switch($VinculoAssociado) {
        case 0: echo $VinculoAssociado = "Sem_Vínculo";break;
        case 1: echo $VinculoAssociado = "Pai";break;
        case 2: echo $VinculoAssociado = "Mãe";break;
        case 3: echo $VinculoAssociado = "Irmão";break;
        case 4: echo $VinculoAssociado = "Amigo";break;
        case 5: echo $VinculoAssociado = "Comercial";break;

    }
}

echo "<br> Documento do veículo: " . $DocumentoVeiculos = $_POST['dut_veiculo'];
echo "<br> Proprietario Anterior: ". $ProprietarioAnterior = $_POST['proprietario_anterior'];

echo "<br><br><h4>Prints</h4>";
echo "<br> Procedência: ";
$ProcedenteVeiculo = $_POST['procedente_veiculo'];
switch($ProcedenteVeiculo){
    case 1: echo $ProcedenteVeiculo = "Procedente_Nao_Apresentado";break;
    case 2: echo $ProcedenteVeiculo = "Procedente_Loja";break;
    case 3: echo $ProcedenteVeiculo = "Procedente_Particular";break;
    case 4: echo $ProcedenteVeiculo = "Procedente_Leilao";break;
}

echo "<br> Fotos das chaves: ";
$FotoChaves = $_POST['chaves_apresentadas'];
switch($FotoChaves){
    case 1: echo $FotoChaves = "Chaves_De_Uso";break;
    case 2: echo $FotoChaves = "Chaves_Reserva";break;
    case 3: echo $FotoChaves = "Chaves_Nao_apresentado";break;
}

echo "<br> Sistema Anti-Furto: ";
$SistemaAntiFurto = $_POST['sistema_anti_furto'];
switch($SistemaAntiFurto){
    case 0: echo $SistemaAntiFurto = "Sistema_Anti_Furto_N_Disponivel";break;
    case 1: echo $SistemaAntiFurto = "Sistema_Anti_Furto_Alarme";break;
    case 2: echo $SistemaAntiFurto = "Sistema_Anti_Furto_Rastreador";break;
    case 3: echo $SistemaAntiFurto = "Sistema_Anti_Furto_Localizador";break;
    case 4: echo $SistemaAntiFurto = "Sistema_Anti_Furto_Rastreador_e_Localizador";break;
}

