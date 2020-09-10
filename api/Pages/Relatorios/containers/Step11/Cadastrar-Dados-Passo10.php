<?php
include "container/Query-Buscar-Financeiro.php";

if( $RowQrBuscarFinanceiro >= 1 ){
    echo "<br>Financeiro já cadastrado para o protocolo <b>$Protocolo</b>";

    //Update do veículo
    include "container/Update-Veiculo.php";
    
}else{
    
    include "container/Query-Cadastrar-Veiculo.php";

    if( $ExeQrCadastraFinanceiro ){

        echo "<br>Situação financeira cadastrada, 
        atualizar o veículo de placa $PlacaVeiculo com os dados";

        
        //Update do veículo
        include "container/Query-Buscar-Financeiro.php";
        if( $RowQrBuscarFinanceiro >=1 ){
            while( $ResFinanceiro = mysqli_fetch_assoc($ExeQrBuscarFinanceiro) ){
                echo "<br>ID Financeiro: " . $IdFinanceiro = $ResFinanceiro['id_financeiro'];
            }
        }

        include "container/Update-Veiculo.php";        

    }
}