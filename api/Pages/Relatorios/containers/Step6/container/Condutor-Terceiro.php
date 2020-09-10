<?php
echo "<br>Estado Civil Condutor: " . $CivilCondutor = $_POST['estado_civil_condutor'];
echo "<br>Profissão Condutor: " . $ProfissaoCondutor = $_POST['profissao_condutor'];
echo "<br>Veículo Próprio: ";
$VeiculoProprio = $_POST['veiculo_proprio'];
if( $VeiculoProprio == 1 ){
    echo "Sim";
}else{
    echo "Não";
}

if( $VeiculoProprio == 1 ){
    echo "<br>Quantidade: " . $VeiculosQuantidade = $_POST['veiculos_quantidade'];
    
    for( $count = 1 ; $count <= $VeiculosQuantidade; $count++ ){
        //Contador dos veículos
       echo "<br>Placa: " . $Placa = "placa_veiculo" . $count . "_condutor";
       echo "<br>Marca: " . $Marca = "marca_veiculo" . $count . "_condutor";
       echo "<br>Modelo: " . $Modelo = "modelo_veiculo" . $count . "_condutor";
       echo "<br>Seguro: " . $Seguro = "seguro_veiculo" . $count . "_condutor";

        switch( $count ){
            case $count :
                echo "<br><b>Veículo $count</b>:";
                echo "<br>Placa: " . $PlacaVeiculo.$Placa = $_POST[$Placa];
                echo "<br>Marca: " . $MarcaVeiculo1.$Marca = $_POST[$Marca];
                echo "<br>Modelo: " . $ModeloVeiculo1.$Modelo = $_POST[$Modelo];
                echo "<br>Seguro: " . $SeguroVeiculo1.$Seguro = $_POST[$Seguro];
                echo "<hr>";                
            break;
        }
    }
}else{
    $VeiculosQuantidade = 3;

    for( $count = 1 ; $count <= $VeiculosQuantidade; $count++ ){
        //Contador dos veículos
       echo "<br>Placa: " . $Placa = "placa_veiculo" . $count . "_condutor";
       echo "<br>Marca: " . $Marca = "marca_veiculo" . $count . "_condutor";
       echo "<br>Modelo: " . $Modelo = "modelo_veiculo" . $count . "_condutor";
       echo "<br>Seguro: " . $Seguro = "seguro_veiculo" . $count . "_condutor";

        switch( $count ){
            case $count :
                echo "<br><b>Veículo $count</b>:";
                echo "<br>Placa: " . $PlacaVeiculo.$Placa = "NULL";
                echo "<br>Marca: " . $MarcaVeiculo1.$Marca = "NULL";
                echo "<br>Modelo: " . $ModeloVeiculo1.$Modelo = "NULL";
                echo "<br>Seguro: " . $SeguroVeiculo1.$Seguro = "NULL";
                echo "<hr>";
            break;
        }
    }
}