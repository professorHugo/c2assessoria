<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['Protocolo']['pr'];
echo "<br> Pasta do Associado: " . $PastaAssociado = $_SESSION['Protocolo']['cpf'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

echo "<br><br> Multa pertinente ao evento: " . $EventoMultaVeiculo = $_POST['evento_multa_veiculo'];
echo "<br> Print: " . $PrintMultaEvento = $_FILES['print_multa_evento']['name'];

echo "<br><br> Restrições Diversas: " . $RestricoesDiversas = $_POST['restricoes_diversas'];
echo "<br> Print: " . $PrintRestricoesDiversas = $_FILES['print_restricoes_diversas']['name'];

echo "<br><br> Restrições Financeiras: " . $RestricoesFinanceiras = $_POST['restricoes_financeiras'];
echo "<br> Print: " . $PrintRestricoesFinanceiras = $_FILES['print_restricoes_financeiras']['name'];

echo "<br><br> Registro de Queixas: " . $QueixaRegistrada = $_POST['queixa_veiculo'];
echo "<br> Print: " . $PrintQueixaRegistrada = $_FILES['print_queixa_registrada']['name'];


