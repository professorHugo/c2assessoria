<h5>Dados para usar: </h5>
<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

echo "<br><br>Instituição Financeira: " . $InstituicaoFinanceira = $_POST['instituicao_financeira'];
echo "<br>Total de Parcelas: " . $TotalParcelas = $_POST['total_parcelas'];
echo "<br>Valor: " . $ValorParcela = $_POST['valor_parcela'];
echo "<br>Pagas: " . $QuantidadePagas = $_POST['parcelas_pagas'];
echo "<br>Situação do financiamento: ";
$SituacaoFinanciamento = $_POST['situacao_financeira'];
switch($SituacaoFinanciamento){
    case 1 : echo "Adimplência";break;
    case 2 : echo "Inadimplência";break;
}