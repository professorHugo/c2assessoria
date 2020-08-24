<?php
//novos dados do passo 4
echo "<br>Estado Civil Associado: " .  $estadoCivil = $_POST['estado_civil'];
echo "<br>Profissão do Associado: " . $profissaoAssociado = $_POST['profissao_associado'];

$outroVeiculo = $_POST['outro_veiculo'];
echo "<br>Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br>CPF Associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br>Condutor Veículo: " . $Condutor = $_SESSION['CondutorVeiculo'];

echo "<br>Outro Veículo? ";
if($outroVeiculo == 1){
    echo "Sim";
}else{
    echo "Não";
}
$veiculosQuantidade = $_POST['veiculos_quantidade'];
if($veiculosQuantidade >= 1){
    echo "<br>Quantos: ";
    echo $veiculosQuantidade;
}