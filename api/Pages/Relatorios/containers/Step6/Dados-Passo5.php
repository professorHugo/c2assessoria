<?php
//Dados apenas caso o condutor seja diferente do associado
$Protocolo = $_SESSION['ProtocoloCondutor'];
$QueryBuscarNomeCondutor = "SELECT * FROM tb_condutores WHERE protocolo_evento = '$Protocolo'";
$ExeQrBuscarNomeCondutor = mysqli_query($connection, $QueryBuscarNomeCondutor);
if($ExeQrBuscarNomeCondutor){
    while($ReturnNome = mysqli_fetch_assoc($ExeQrBuscarNomeCondutor)){
        echo "<br>Nome Condutor: " . $NomeCondutor = $ReturnNome['nome_condutor'];
    }
}

echo "<br>Vínculo com associado: " . $VinculoAssociado = $_POST['vinculo_condutor'];
echo "<br>Estado Civil Condutor: " . $EstadoCivilCondutor = $_POST['estado_civil_condutor'];
echo "<br>Profissão Condutor: " . $ProfissaoCondutor = $_POST['profissao_condutor'];

$VeiculoProprio = $_POST['veiculo_proprio'];
echo "<br>Tem veículo Próprio: ";
if( $VeiculoProprio == 1 ){
    echo "Sim";
}else{
    echo "Não";
}

if( $VeiculoProprio == 1 ){
    
    $VeiculosQuantidade = $_POST['veiculos_quantidade'];
    if( $VeiculosQuantidade > 0 ){
        echo "<br>Quantos: " . $VeiculosQuantidade;
    }

}

