<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];


echo "<br><br> Multa pertinente ao evento: ";
$EventoMultaVeiculo = $_POST['evento_multa_veiculo'];
if( $EventoMultaVeiculo == 1 ){
    echo "Sim";
}else{
    echo "Não";
}
echo "<br> Print: " . 
$PrintMultaEvento = $_FILES['print_multa_evento']['tmp_name'];
switch($EventoMultaVeiculo){
    case 1: $EventoMultaVeiculo = "Multa_Sim";break;
    case 2: $EventoMultaVeiculo = "Multa_Nao";break;
}


echo "<br><br> Restrições Diversas: ";
$RestricoesDiversas = $_POST['restricoes_diversas'];
if( $RestricoesDiversas == 1 ){
    echo "Sim";
}else{
    echo "Não";
}
echo "<br> Print: " . 
$PrintRestricoesDiversas = $_FILES['print_restricoes_diversas']['tmp_name'];
switch($RestricoesDiversas){
    case 1: $RestricoesDiversas = "Restricoes_Diversas_Sim";break;
    case 2: $RestricoesDiversas = "Restricoes_Diversas_Nao";break;
}


echo "<br><br> Restrições Financeiras: ";
$RestricoesFinanceiras = $_POST['restricoes_financeiras'];
if( $RestricoesFinanceiras == 1){
    echo "Sim";
}else{
    echo "Não";
}
echo "<br> Print: " . 
$PrintRestricoesFinanceiras = $_FILES['print_restricoes_financeiras']['tmp_name'];
switch($RestricoesFinanceiras){
    case 1: $RestricoesFinanceiras = "Restricoes_Financeiras_Sim";break;
    case 2: $RestricoesFinanceiras = "Restricoes_Financeiras_Nao";break;
}


echo "<br><br> Registro de Queixas: ";
$QueixaRegistrada = $_POST['queixa_veiculo'];

if( $QueixaRegistrada == 1 ){
    echo "Sim";
}else{
    echo "Não";
}
echo "<br> Print: " . 
$PrintQueixaRegistrada = $_FILES['print_queixa_registrada']['tmp_name'];
switch($QueixaRegistrada){
    case 1: $QueixaRegistrada = "Queixa_Registrada_Sim";break;
    case 2: $QueixaRegistrada = "Queixa_Registrada_Nao";break;
}