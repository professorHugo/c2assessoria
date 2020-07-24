<?php
//Variáveis Base
echo "<br>Estado Civil Condutor: " . $EstadoCivilCondutor = $_POST['estado_civil_condutor'];
echo "<br>Profissão Condutor: " . $ProfissaoCondutor = $_POST['profissao_condutor'];
echo "<br>Vínculo com Associado: " . $VinculoAssociado = $_POST['vinculo_associado'];
echo "<br>Qtd Veiculo Prório Condutor: " . $QtdVeiculoProprioCondutor = $_POST['veiculos_quantidade'];

echo "<br>Protocolo: ".$Protocolo = $_SESSION['Protocolo']['pr'];
echo "<br>CPF: " . $CPFAssociado = $_SESSION['Protocolo']['cpf'];

echo "<br>Veiculo Prório Condutor: " . $VeiculoProprioCondutor = $_POST['veiculo_proprio'];
echo "<br>Update: ".$Update =  date("Y/m/d H:i:s");

echo "<br>Condutor apontou em midias sociais: " . $MidiasSociaisCondutor = $_POST['midias_sociais_condutor'];
echo "<br> Print: " . $PrintMidiasSociais = $printMidiasSociaisCondutor;

//Análise de Veículos Próprios do Condutor
include_once "Frag2/Veiculo-Proprio-Condutor.php";

if($VeiculoProprioCondutor == 1){
    //Cadastrar Veículos do Condutor
    //Verificar se o veículo (mesmo extra) já está armazenado no banco de dados
    switch($QtdVeiculoProprioCondutor){
        case 1: include_once "Frag2/Veiculo1.php";break;
        case 2: 
            include_once "Frag2/Veiculo1.php";
            include_once "Frag2/Veiculo2.php";
        break;
        case 3: 
            include_once "Frag2/Veiculo1.php";
            include_once "Frag2/Veiculo2.php";
            include_once "Frag2/Veiculo3.php";
        break;
    }
}else{

}

echo "<br>";
//Update dos veículos do condutor
include_once "Frag2/UpdateCondutor.php";