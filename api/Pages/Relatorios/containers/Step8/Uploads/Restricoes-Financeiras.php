<?php
echo "<br>Print Restrições Financeiras: " . $_FILES['print_restricoes_financeiras']['name'];
//Extensão do arquivo
$extensao = pathinfo( $_FILES['print_restricoes_financeiras']['name'] );
$extensao = "." . $extensao['extension'];
//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$PrintRestricoesFinanceirasFile = $RestricoesFinanceiras.$extensao;

echo "<br>Destino Upload: " . 
$target_file = $PastaAssociado . "/" . $PrintRestricoesFinanceirasFile;

if( move_uploaded_file($PrintRestricoesFinanceiras, $target_file )){
    echo "
        <br>O arquivo <b>$PrintRestricoesFinanceirasFile</b> 
        carregado na pasta <b>$CPFAssociado</b>
    ";
    
    //Atualizar foto no banco de dados
    include "container/Query-Update-Restricao-Financeira.php";
    //$RowQrBuscarFotoRestricaoFin Vem do arquivo acima

    if( $RowQrBuscarFotoRestricaoFin >= 1 ){

        echo "
            <br>Foto <b>$PrintRestricoesFinanceirasFile</b> já cadastrada,
            atualizar dados do veículo
        ";
        
        //Atualizar veículo
        include "container/Query-Update-Veiculo3.php";
        


    }else{

        //Query de cadastro da foto no banco de dados
        include "container/Query-Cadastro-Foto-Restricao-Fin.php";
        // ExeQrCadastrarFotoRestricoesDiv vem do arquivo acima

        if( $ExeQrCadastrarFotoRestricoesFin ){
            echo "
                <br>Foto <b>$PrintRestricoesFinanceirasFile</b> 
                Cadastrada para o protocolo <b>$Protocolo</b>
            ";

            include "container/Query-Update-Restricao-Financeira.php";
            //$RowQrBuscarFotoMulta Vem do arquivo acima

            if( $RowQrBuscarFotoRestricaoFin >=1 ){

                //Atualizar veículo
                include "container/Query-Update-Veiculo3.php";
            }
        }else{
            echo "
                <br>Erro ao cadastrar a foto <b>$PrintRestricoesFinanceirasFile: " .  mysqli_error($connection)."</b>
            ";
        }        
    }    
}else{
    echo "Erro";
}