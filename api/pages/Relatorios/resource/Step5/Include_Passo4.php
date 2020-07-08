<?php
//novos dados do passo 4
 "Estado Civil Associado: " .  $estadoCivil = $_POST['estado_civil'];
 "<br>";
 "Profissão do Associado: " . $profissaoAssociado = $_POST['profissao_associado'];
 "<br>";
$outroVeiculo = $_POST['outro_veiculo'];

 "Outros Veículos? ";
if($outroVeiculo == 1){
    "Sim";
}else{
     "Não";
}
 "<br>";

$veiculosQuantidade = $_POST['veiculos_quantidade'];
 "Quantos: ";
if($veiculosQuantidade >= 1){
     $veiculosQuantidade;
}
 "<br>";


