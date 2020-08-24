<?php

//Dados do Passo 3
echo "<br>Data: " . $dataEvento = $_POST['data_evento'];
echo "<br>Horário: " . $horarioEvento = $_POST['horario_evento'];
echo "<br>CEP: " . $cepEvento = $_POST['cep_evento'];
echo "<br>Endereço: " . $enderecoEvento = $_POST['endereco_evento'];
echo "<br>Bairro: " . $bairroEvento = $_POST['bairro_evento'];
echo "<br>Cidade: " . $cidadeEvento = $_POST['cidade_evento'];
echo "<br>UF: " . $ufEvento = $_POST['estado_evento'];
echo "<br>Número: " . $numeroEvento = $_POST['numero_evento'];

//Próximo passo por condutor
if($_SESSION['ProtocoloCondutor'] == 1){
    //Caso o condutor seja o Associado
    echo "<br>Próximo passo: " . $PassoCadastroSindicancia = 6;
}else{
    //Caso o condutor seja terceiros
    echo "<br>Próximo passo: " . $PassoCadastroSindicancia = 5;
}