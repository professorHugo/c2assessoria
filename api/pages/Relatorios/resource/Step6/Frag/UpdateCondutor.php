<?php
if($_SESSION['CondutorVeiculo'] == 1){
    echo "<br>Associado é o condutor do veículo";
    echo "<br><pre>";
    echo $QueryUpdateCondutorAssociado = "
        UPDATE tb_condutores SET
            civil_condutor = '$EstadoCivilAssociado',
            profissao_condutor = '$ProfissaoAssociado'
        WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre><br>";
    $ExeQrUpdateCondutorAssociado = mysqli_query($connection, $QueryUpdateCondutorAssociado);
    if($ExeQrUpdateCondutorAssociado){
        echo "Condutor Associado atualizado";
    }else{
        echo "Erro: ". mysqli_error($connection);
    }
}

$QueryBuscarVeiculosCondutor= "SELECT * FROM tb_veiculos WHERE segurado_veiculo = '$CPFAssociado'";
$ExeQrBuscarVeiculosCondutor= mysqli_query($connection, $QueryBuscarVeiculosCondutor);
$RowQrBuscarVeiculosCondutor= mysqli_num_rows($ExeQrBuscarVeiculosCondutor);
if($RowQrBuscarVeiculosCondutor>= 1){
    //Guardar veículos encontrados
    while($RetVeiculosAssociado = mysqli_fetch_assoc($ExeQrBuscarVeiculosCondutor)){
        $id_veiculo_associado = $RetVeiculosAssociado['id_veiculo'];
        $i = 1;
        if($i = 1 && $id_veiculo_associado < $RowQrBuscarVeiculosCondutor){
            //Atualizar dados do associado
            echo $veiculo[$id_veiculo_associado] = "veiculo".$id_veiculo_associado."_condutor";
            echo "<br>
            <pre>";
            echo $QueryBuscarAssociadoAtualizar[$id_veiculo_associado] = "
                UPDATE tb_condutores SET
                    civil_condutor = '$EstadoCivilAssociado',
                    profissao_condutor = '$ProfissaoAssociado',
                    $veiculo[$id_veiculo_associado] = '$id_veiculo_associado',
                    vinculo_associado = 'Mesmo'
                WHERE protocolo_evento = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQr = mysqli_query($connection, $QueryBuscarAssociadoAtualizar[$id_veiculo_associado]);
            if($ExeQr){
                echo "Atualizado";
            }else{
                echo mysqli_error($connection);
            }
            echo "<br>";
        }
        
    }
}