<?php
echo "<br>".$VistoriaRealizada = $_POST['vistoria_realizada'];

if($VistoriaRealizada == 1){
    echo "<br>Data da Vistoria: " . $DataVistoria = $_POST['data_vistoria'];
    echo "<br>Situação da Vistoria: " . $SituacaoVistoria = $_POST['situacao_vistoria'];
    echo "<br>Arquivo da Vistoria: " . $ArquivoVistoria = $_FILES['print_vistoria_cautelar']['name'];
    echo "<br>Texto da observação sobre a vistoria: " . $ObservacaoVistoria = $_POST['observacao_vistoria'];
}
