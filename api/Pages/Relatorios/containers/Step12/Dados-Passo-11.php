<h5>Dados para usar: </h5>
<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " . 
$CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

echo "<br>Tipo de zona: ";
$TipoZona = $_POST['zona_evento'];
switch($TipoZona){
    case 1: echo "Residencial"; break;
    case 2: echo "Comercial"; break;
    case 3: echo "Mista"; break;
}

echo "<br>Criminalidade: ";
$IndiceCriminalidade = $_POST['indice_criminalidade'];
switch($IndiceCriminalidade){
    case 1: echo "Alto"; break;
    case 2: echo "Médio"; break;
    case 3: echo "Baixo"; break;
}

echo "<br>Fluxo Pedestres: ";
$FluxoPedestres = $_POST['fluxo_pedestres'];
switch($FluxoPedestres){
    case 1: echo "Alto"; break;
    case 2: echo "Médio"; break;
    case 3: echo "Baixo"; break;
}

echo "<br>Característica da via: ";
$CaracteristicaVia = $_POST['caracteristicas_via'];
switch($CaracteristicaVia){
    case 1: echo "Pavimentada"; break;
    case 2: echo "Não Pavimentada"; break;
}

echo "<br>Classificação Região: ";
$ClassificacaoRegiao = $_POST['classificacao_regiao'];
switch($ClassificacaoRegiao){
    case 1: echo "Média/Alta"; break;
    case 2: echo "Popular"; break;
    case 3: echo "Comunidade"; break;
}

echo "<br>Permitido Estacionar: ";
$PermitidoEstacionar = $_POST['per_estacionar'];
switch($PermitidoEstacionar){
    case 1: echo "Sim"; break;
    case 2: echo "Não"; break;
    case 3: echo "Não se Aplica"; break;
}