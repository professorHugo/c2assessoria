<?php
//Pasta do Uplado
$PastaAssociado = "files/" .$_SESSION['PastaAssociado'];
echo "<br> Pasta: " . $target_dir = $PastaAssociado;
$extensao = pathinfo($_FILES['foto_procedente']['name']);
echo "<br> Extensão: " . $extensao = "." . $extensao['extension'];
echo "<br> Cadastrar no Banco de Dados: " . $ArquivoDB = "procedencia_".$PrintProcedencia . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado . "/procedencia_" . $PrintProcedencia . $extensao;

move_uploaded_file($_FILES['foto_procedente']['tmp_name'], $target_file);


//Verificar se o procedente já está cadastrado
echo "<br>" . $QueryBuscarFotosProcedentes = "
    SELECT * FROM tb_fotos_procedentes WHERE protocolo_foto_procedente = '$Protocolo'
";
$ExeQrBuscarFotosPrecedentes = mysqli_query($connection, $QueryBuscarFotosProcedentes);
$RowQrBuscarFotosPrecedentes = mysqli_num_rows($ExeQrBuscarFotosPrecedentes);
if($RowQrBuscarFotosPrecedentes >= 1){
    echo "<br>A foto do Prototoco $Protocolo já está cadastrado";
}else{
    echo "<br><pre>";
    echo $QueryCadastrarProcedencia = "
        INSERT INTO tb_fotos_procedentes(
            placa_foto_procedente,
            tipo_procedente,
            protocolo_foto_procedente,
            local_foto_procedente,
            nome_foto_procedente
        )VALUES(
            '$PlacaVeiculo',
            '$ProcedenteVeiculo',
            '$Protocolo',
            '$PastaAssociado',
            '$ArquivoDB'
        )
    ";
    echo "</pre><br>";
    $ExeQrCadastrarProcedencia = mysqli_query($connection, $QueryCadastrarProcedencia);
    if($ExeQrCadastrarProcedencia){
        echo "<br>Foto Cadastrada no banco de dados para o protocolo $Protocolo";
    }else{
        echo "Erro: " . mysqli_error($connection);
    }
}

//Update Procedencia do Veículo
$QueryByscarFotosProcedencias = "SELECT * FROM tb_fotos_procedentes WHERE placa_foto_procedente = '$PlacaVeiculo'";
$ExeQrBuscarFotosPrecedencias = mysqli_query($connection, $QueryByscarFotosProcedencias);
$RowQrBuscarFotosPrecedencias = mysqli_num_rows($ExeQrBuscarFotosPrecedencias);
if($RowQrBuscarFotosPrecedencias >= 1){
    while($ResBuscarFotosPrecedencias = mysqli_fetch_assoc($ExeQrBuscarFotosPrecedencias)){
        $Proc = $ResBuscarFotosPrecedencias['id_foto_procedente'];
        echo "<br><pre>";
        echo $QueryUpdateProcedenciaVeiculo = "
            UPDATE tb_veiculos SET
                procedencia_apresentada = '$Proc'
            WHERE placa_veiculo = '$PlacaVeiculo'
        ";
        echo "</pre><br>";
        $ExeQrUpdateProcedenciaVeiculo = mysqli_query($connection, $QueryUpdateProcedenciaVeiculo);
        if($ExeQrUpdateProcedenciaVeiculo){
            echo "<br> Procedencia do veículo de placa '$PlacaVeiculo' atualizado";
        }
    }
}