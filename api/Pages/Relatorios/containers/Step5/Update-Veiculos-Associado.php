<?php
echo "<br><pre>". 
$QueryBuscarVeiculosAssociado = "
    SELECT 
        DISTINCT id_veiculo
    FROM tb_veiculos 
    WHERE segurado_veiculo = '$CPFAssociado'
    ORDER BY id_veiculo ASC
";
echo "</pre>";
$ExeQrBuscarVeiculosAssociado = mysqli_query($connection, $QueryBuscarVeiculosAssociado);
echo "<br>Quantidade de Veículos para o CPF $CPFAssociado: " . 
$RowQrBuscarVeiculosAssociado = mysqli_num_rows($ExeQrBuscarVeiculosAssociado);
if($RowQrBuscarVeiculosAssociado >= 1){

    ///Ajustar a partir daqui
    //Guardar veículos encontrados
    while($RetVeiculosAssociado = mysqli_fetch_assoc($ExeQrBuscarVeiculosAssociado)){
        echo "<br>Id do veículo a ser guardado: " . 
        $id_veiculo_associado = $RetVeiculosAssociado['id_veiculo'];
        echo "<br>Item: " . $Veiculo = "veiculo".$id_veiculo_associado."_associado";

        echo "<br><pre>".
        $QueryUpdateAssociado[$id_veiculo_associado] = "
            UPDATE tb_associados SET
                $Veiculo = '$id_veiculo_associado'
            WHERE cpf_associado = '$CPFAssociado'
        ";
        echo "</pre>";
        $ExeQrUpdateAssociado[$id_veiculo_associado] = mysqli_query(
            $connection, $QueryUpdateAssociado[$id_veiculo_associado]
        );
    }
    
}