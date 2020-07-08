<?php
$QueryBuscarVeiculosAssociado = "SELECT * FROM tb_veiculos WHERE segurado_veiculo = '$CPFAssociado'";
$ExeQrBuscarVeiculosAssociado = mysqli_query($connection, $QueryBuscarVeiculosAssociado);
$RowQrBuscarVeiculosAssociado = mysqli_num_rows($ExeQrBuscarVeiculosAssociado);
if($RowQrBuscarVeiculosAssociado >= 1){
    //Guardar veículos encontrados
    while($RetVeiculosAssociado = mysqli_fetch_assoc($ExeQrBuscarVeiculosAssociado)){
        $id_veiculo_associado = $RetVeiculosAssociado['id_veiculo'];
        $i = 1;
        if($i = 1 && $id_veiculo_associado <= $RowQrBuscarVeiculosAssociado){
            //Atualizar dados do associado
            echo $veiculo[$id_veiculo_associado] = "veiculo".$id_veiculo_associado."_associado";
            echo "<br>
            <pre>";
            echo $QueryBuscarAssociadoAtualizar[$id_veiculo_associado] = "
                UPDATE tb_associados SET
                    civil_associado = '$EstadoCivilAssociado',
                    profissao_associado = '$ProfissaoAssociado',
                    $veiculo[$id_veiculo_associado] = '$id_veiculo_associado'
                WHERE cpf_associado = '$CPFAssociado'
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