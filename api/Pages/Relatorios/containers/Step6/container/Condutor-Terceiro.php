<?php
 "<br>Estado Civil Condutor: " . $CivilCondutor = $_POST['estado_civil_condutor'];
 "<br>Profissão Condutor: " . $ProfissaoCondutor = $_POST['profissao_condutor'];
 "<br>Veículo Próprio: ";
$VeiculoProprio = $_POST['veiculo_proprio'];
if( $VeiculoProprio == 1 ){
     "Sim";
}else{
     "Não";
}

if( $VeiculoProprio == 1 ){
     "<br>Quantidade: " . $VeiculosQuantidade = $_POST['veiculos_quantidade'];
    
    for( $count = 1 ; $count <= $VeiculosQuantidade; $count++ ){
        //Contador dos veículos
        "<br>Placa: " . $Placa = "placa_veiculo" . $count . "_condutor";
        "<br>Marca: " . $Marca = "marca_veiculo" . $count . "_condutor";
        "<br>Modelo: " . $Modelo = "modelo_veiculo" . $count . "_condutor";
        "<br>Seguro: " . $Seguro = "seguro_veiculo" . $count . "_condutor";

        switch( $count ){
            case $count :
                 "<br><b>Veículo $count</b>:";
                 "<br>Placa: " . $PlacaVeiculo.$Placa = $_POST[$Placa];
                 "<br>Marca: " . $MarcaVeiculo1.$Marca = $_POST[$Marca];
                 "<br>Modelo: " . $ModeloVeiculo1.$Modelo = $_POST[$Modelo];
                 "<br>Seguro: " . $SeguroVeiculo1.$Seguro = $_POST[$Seguro];
                 "<hr>";

                
            break;
        }
    }
}else{
    $VeiculosQuantidade = 3;

    for( $count = 1 ; $count <= $VeiculosQuantidade; $count++ ){
        //Contador dos veículos
        "<br>Placa: " . $Placa = "placa_veiculo" . $count . "_condutor";
        "<br>Marca: " . $Marca = "marca_veiculo" . $count . "_condutor";
        "<br>Modelo: " . $Modelo = "modelo_veiculo" . $count . "_condutor";
        "<br>Seguro: " . $Seguro = "seguro_veiculo" . $count . "_condutor";

        switch( $count ){
            case $count :
                 "<br><b>Veículo $count</b>:";
                 "<br>Placa: " . $PlacaVeiculo.$Placa = "NULL";
                 "<br>Marca: " . $MarcaVeiculo1.$Marca = "NULL";
                 "<br>Modelo: " . $ModeloVeiculo1.$Modelo = "NULL";
                 "<br>Seguro: " . $SeguroVeiculo1.$Seguro = "NULL";
                 "<hr>";
            break;
        }
    }
}