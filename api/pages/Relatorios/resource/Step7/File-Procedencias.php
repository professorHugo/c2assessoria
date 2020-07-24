<?php
switch ($ProcedenteVeiculo) {
    case 0:
        echo "<br>" . $PrintProcedencia = "Nao_Apresentado";
    break;
    case 1:
        echo "<br>" . $PrintProcedencia = "Loja";
    break;
    case 2:
        echo "<br>" . $PrintProcedencia = "Particular";
    break;
    case 3:
        echo "<br>" . $PrintProcedencia = "Leilao";
    break;
}

//Update veículo
echo "<pre>";
echo $QueryUpdateVeiculo = "
    UPDATE tb_veiculos SET
        dut_veiculo = '$DocumentoVeiculos',
        procedente_veiculo = '$ProcedenteVeiculo',
        proprietario_anterior_veiculo = '$ProprietarioAnterior'
    WHERE placa_veiculo = '$PlacaVeiculo'
";
echo "</pre>";
$ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
if($ExeQrUpdateVeiculo){
    echo "<br> Dados do veículo de placa $PlacaVeiculo atualizados.<br>";
}else{
    echo "<br> Erro: ".mysqli_error($connection);
}

//Upload do comprovante de procedente e cadastrar no banco de dados
if($ProcedenteVeiculo != 0){
    echo "<br> Upload da foto do comprovante de procedência do veículo... ";
    echo $_FILES['foto_procedente']['name'];
    include_once "Uploads/Upload-Procedencia.php";
}