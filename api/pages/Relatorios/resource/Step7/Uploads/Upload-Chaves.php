<?php
//Pasta do Uplado
$PastaAssociado = "files/" .$_SESSION['PastaAssociado'];
echo "<br> Pasta: " . $target_dir = $PastaAssociado;
$extensao = pathinfo($_FILES['foto_chaves_apresentadas']['name']);
echo "<br> Extensão: " . $extensao = "." . $extensao['extension'];
echo "<br> Cadastrar no Banco de Dados: " . $ArquivoDB = "chave_".$ChaveApresentada . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado . "/chave_" . $ChaveApresentada . $extensao;

if(move_uploaded_file($_FILES['foto_chaves_apresentadas']['tmp_name'], $target_file)){

    //Verificar se a foto da chave já está cadastrada
    echo "<br>" . $QueryBuscarFotosChaves = "
        SELECT * FROM tb_chaves_apresentadas WHERE protocolo_chave_apresentada = '$Protocolo'
    ";
    $ExeQrBuscarFotosChaves = mysqli_query($connection, $QueryBuscarFotosChaves);
    $RowQrBuscarFotosChaves = mysqli_num_rows($ExeQrBuscarFotosChaves);
    if($RowQrBuscarFotosChaves >= 1){
        echo "<br>A foto do Prototoco $Protocolo já está cadastrado";
        }else{
        echo "<br><pre>";
        echo $QueryCadastrarChave = "
            INSERT INTO tb_chaves_apresentadas(
                protocolo_chave_apresentada,
                tipo_chave_apresentada,
                local_chave_apresentada,
                nome_chave_apresentada
            )VALUES(
                '$Protocolo',
                '$ChavesApresentadas',
                '$PastaAssociado',
                '$ArquivoDB'
            )
        ";
        echo "</pre><br>";
        $ExeQrCadastrarProcedencia = mysqli_query($connection, $QueryCadastrarChave);
        if($ExeQrCadastrarProcedencia){
            echo "<br>Foto Cadastrada no banco de dados para o protocolo $Protocolo";
        }else{
            echo "Erro: " . mysqli_error($connection);
        }
    }

}else{
    echo "<br><br><b>Erro</b>";
}



//Atualizar veículo com a foto da chave
echo "<br><pre>";
echo $QueryBuscarFotoChaves = "
    SELECT * FROM 
        tb_chaves_apresentadas
    WHERE protocolo_chave_apresentada = '$Protocolo'
";
echo "</pre><br>";
$ExeQrBuscarFotosChaves = mysqli_query($connection, $QueryBuscarFotoChaves);
$RowQrBuscarFotosChaves = mysqli_num_rows($ExeQrBuscarFotosChaves);
if($RowQrBuscarFotosChaves >= 1){
    while($ResFtChaves = mysqli_fetch_assoc($ExeQrBuscarFotosChaves)){
        $IdFoto = $ResFtChaves['id_chave_apresentada'];
        $QueryUpdateVeiculo = "
            UPDATE tb_veiculos SET
                chaves_apresentadas_veiculo = '$IdFoto'
            WHERE placa_veiculo = '$PlacaVeiculo'
        ";
        $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
        if($ExeQrUpdateVeiculo){
            echo "<br> Veículo de placa $PlacaVeiculo com o protocolo $Protocolo atualizado com a foto de ID $IdFoto";
        }else{
            echo "<br>Erro: ".mysqli_error($connection);
        }

    }
}