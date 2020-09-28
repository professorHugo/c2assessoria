<?php
echo "<br>Local dos Fatos: ";
$LocalFatos = $_POST['local_fatos'];
if( $LocalFatos == 1 ){
    echo "Converge";
}else{
    echo "Não Converge";
}

echo "<br>Residência do Associado: ";
$ResidenciaAssociado = $_POST['residencia_associado'];
if( $ResidenciaAssociado == 1 ){
    echo "Converge";
}else{
    echo "Não Converge";
}

echo "<br>Apontamentos Irregulares: ";
$ApontamentosIrregulares = $_POST['apontamentos_irregulares'];
if( $ApontamentosIrregulares == 0 ){
    echo "Não";
}else{
    echo "Sim";
}

echo "<br><pre>" . 
$QueryBuscarTelemetria = "
    SELECT * FROM 
        tb_registro_telemetria
    WHERE 
        protocolo_telemetria = '$Protocolo' &&
        placa_telemetria = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrBuscarTelemetria = mysqli_query($connection, $QueryBuscarTelemetria);
$RowQrBuscarTelemetria = mysqli_num_rows($ExeQrBuscarTelemetria);

if( $RowQrBuscarTelemetria >= 1 ){
    echo "<br><b>Telemetria já registrada</b>, atualizar a foto";
}else{
    echo "<br><b>Cadastrar Telemetria</b>";
    echo "<br><pre>" . 
    $QueryCadastrarTelemetria = "
        INSERT INTO tb_registro_telemetria(
            protocolo_telemetria,
            placa_telemetria,
            local_telemetria,
            residencia_telemetria,
            ap_irregular_telemetria
        )VALUES(
            '$Protocolo',
            '$PlacaVeiculo',
            '$LocalFatos',
            '$ResidenciaAssociado',
            '$ApontamentosIrregulares'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarTelemetria = mysqli_query($connection, $QueryCadastrarTelemetria);
    if( $ExeQrCadastrarTelemetria ){
        echo "
            <br>Telemetria cadastrada para o protocolo <b>$Protocolo</b>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}



include_once "container/Upload-Telemetria.php";