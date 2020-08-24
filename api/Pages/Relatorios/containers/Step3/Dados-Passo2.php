<?php
// Novos dados (Passo 2)
echo "<br>Condutor Select: " . $contudorVeiculo = $_POST['condutor_select'];
echo "<br>Nome do Condutor: " . $nomeCondutor = $_POST['nome_condutor'];
echo "<br>Placa: " . $placaVeiculo = $_POST['placa_veiculo'];
echo "<br>Marca: " . $marcaVeiculo = $_POST['marca_veiculo'];
echo "<br>Modelo: " . $modeloVeiculo = $_POST['modelo_veiculo'];

echo "<br>Session Condutor Select: " . $_SESSION['CondutorVeiculo'] = $contudorVeiculo;
echo "<br>Session Placa: " . $_SESSION['PlacaVeiculo'] = $placaVeiculo;