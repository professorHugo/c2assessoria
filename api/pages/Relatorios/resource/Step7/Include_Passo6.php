<?php
echo "Protocolo: " . $Protocolo = $_SESSION['Protocolo']['pr'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['Placa'];

echo "<br>Proprietario: " . $ProprietarioLegal = $_POST['proprietario_legal'];
echo "<br> Nome do Proprietario: " . $_POST['nome_proprietario_veiculo'];

if($ProprietarioLegal === "Terceiros"){
    echo "<br> Vínculo com Associado: " . $VinculoAssociado = $_POST['vinculo_associado'];
}

echo "<br> Documento do veículo: " . $DocumentoVeiculos = $_POST['dut_veiculo'];
echo "<br> Proprietario Anterior: ". $ProprietarioAnterior = $_POST['proprietario_anterior'];
echo "<br> Procedência: " . $ProcedenteVeiculo = $_POST['procedente_veiculo'];


include_once "File-Procedencias.php";
include_once "File-Chaves.php";
include_once "File-Anti-Furto.php";


