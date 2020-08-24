<h5>Dados para usar: </h5>
<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

echo "<br>Vistoria Realizada? ";
$VistoriaRealizada = $_POST['vistoria_realizada'];
if( $VistoriaRealizada == 1 ){
    echo "Sim";
    echo "<br>Print: " . $PrintVistoria = $_FILES['print_vistoria_cautelar']['tmp_name'];
    switch($VistoriaRealizada){
        case 1: $VistoriaRealizada = "Vistoria_Realizada_Sim";break;
        case 2: $VistoriaRealizada = "Vistoria_Realizada_não";break;
    }
    
    echo "<br>Data: " . $DataVistoria = $_POST['data_vistoria'];
    echo "<br>Situação: ";
    $SituacaoVistoria = $_POST['situacao_vistoria'];
    switch($SituacaoVistoria){
        case 1: echo $SituacaoVistoria = "Aprovada";break;
        case 2: echo $SituacaoVistoria = "Não Aprovada";break;
        case 3: echo $SituacaoVistoria = "Não Efetuada";break;
    }

    echo "<br>Observação da Vistoria: " . $ObservacaoVistoria = $_POST['observacao_vistoria'];

}else{
    echo "Não";
}

echo "<hr>";