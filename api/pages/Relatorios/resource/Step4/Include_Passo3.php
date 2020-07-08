<?php

//Dados do Passo 3
$dataEvento = $_POST['data_evento'];
$horarioEvento = $_POST['horario_evento'];
$cepEvento = $_POST['cep_evento'];
$enderecoEvento = $_POST['endereco_evento'];
$bairroEvento = $_POST['bairro_evento'];
$cidadeEvento = $_POST['cidade_evento'];
$ufEvento = $_POST['estado_evento'];

//Array do Passo 3
$Step3 = array($dataEvento,$horarioEvento,$cepEvento,$enderecoEvento,$bairroEvento,$cidadeEvento,$ufEvento);
$_SESSION['CadastroSindicancia3'] = $Step3;

// echo $_SESSION['CadastroSindicancia2'][0];

if($_SESSION['CadastroSindicancia2'][0] == 1){
    //Caso o condutor seja o Associado
    $PassoCadastroSindicancia = 6;
}else{
    //Caso o condutor seja terceiros
    $PassoCadastroSindicancia = 5;
}