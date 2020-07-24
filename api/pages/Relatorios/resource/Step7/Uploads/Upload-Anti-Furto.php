<?php
//Pasta do Uplado
$PastaAssociado = "files/" .$_SESSION['PastaAssociado'];
echo "<br> Pasta: " . $target_dir = $PastaAssociado;
$extensao = pathinfo($_FILES['foto_sistema']['name']);
echo "<br> Extensão: " . $extensao = "." . $extensao['extension'];
echo "<br> Cadastrar no Banco de Dados: " . $ArquivoDB = "sistema_".$SistemaApresentado . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado . "/sistema_" . $SistemaApresentado . $extensao;

if(move_uploaded_file($_FILES['foto_sistema']['tmp_name'], $target_file)){
    //Verificar se o procedente já está cadastrado
    echo "<br>" . $QueryBuscarFotoSistema = "
    SELECT * FROM tb_foto_sistema_af WHERE protocolo_foto_sistema = '$Protocolo'
    ";
    $ExeQrBuscarFotoSistema = mysqli_query($connection, $QueryBuscarFotoSistema);
    $RowQrBuscarFotoSistema = mysqli_num_rows($ExeQrBuscarFotoSistema);
    if($RowQrBuscarFotoSistema >= 1){
        echo "<br>A foto do Prototoco $Protocolo já está cadastrado";
        while($ReSistema = mysqli_fetch_assoc($ExeQrBuscarFotoSistema)){
            $IdSistema = $ReSistema['id_foto_sistema'];
            echo "<br><pre>".
            $QueryUpdateFotoSistemaVeiculo = "
                UPDATE tb_veiculos SET
                    sistema_anti_furto = '$IdSistema'
                WHERE placa_veiculo = '$PlacaVeiculo'
            ";
            echo "</pre><br>";
            $ExeQrUpdateFotoSistemaVeiculo = mysqli_query($connection, $QueryUpdateFotoSistemaVeiculo);
            if($ExeQrBuscarFotoSistema){
                echo "<br> Foto do sistema anti-furto atualizado para o veículo de placa $PlacaVeiculo";
            }else{
                echo "<br>Erro: ".mysqli_error($connection);
            }
        }
    }else{
        echo "<br><pre>";
        echo $QueryCadastrarChave = "
            INSERT INTO tb_foto_sistema_af(
                protocolo_foto_sistema,
                tipo_sistema,
                local_foto_sistema,
                nome_foto_sistema
            )VALUES(
                '$Protocolo',
                '$SistemaAntiFurto',
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
    echo "<br>Erro.";
}