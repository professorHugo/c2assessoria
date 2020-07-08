<?php
// Novos dados (Passo 2)
$contudorVeiculo = $_POST['condutor_select'];
$nomeCondutor = $_POST['nome_condutor'];
$placaVeiculo = $_POST['placa_veiculo'];
$marcaVeiculo = $_POST['marca_veiculo'];
$modeloVeiculo = $_POST['modelo_veiculo'];

//Array do Passo 2
$Step2 = array($contudorVeiculo,$nomeCondutor,$placaVeiculo,$marcaVeiculo,$modeloVeiculo);
 "Passo 2: ";
($_SESSION['CadastroSindicancia2'] = $Step2);