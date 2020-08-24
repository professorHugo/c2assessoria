<?php
echo "<br>Print Restroções Diversas: " . $_FILES['print_restricoes_diversas']['name'];
//Extensão do arquivo
$extensao = pathinfo( $_FILES['print_restricoes_diversas']['name'] );
$extensao = "." . $extensao['extension'];
//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$PrintRestricoesDiversasFile = $RestricoesDiversas.$extensao;

echo "<br>Destino Upload: " . 
$target_file = $PastaAssociado . "/" . $PrintRestricoesDiversasFile;

if( move_uploaded_file($PrintRestricoesDiversas, $target_file )){
    echo "
        <br>O arquivo <b>$PrintRestricoesDiversasFile</b> 
        carregado na pasta <b>$CPFAssociado</b>
    ";
    
    //Atualizar foto no banco de dados
    include "container/Query-Update-Restricao-Diversa.php";
    //$RowQrBuscarFotoRestricaoDiv Vem do arquivo acima

    if( $RowQrBuscarFotoRestricaoDiv >= 1 ){

        echo "
            <br>Foto <b>$PrintRestricoesDiversasFile</b> já cadastrada,
            atualizar dados do veículo
        ";
        
        //Atualizar veículo
        include "container/Query-Update-Veiculo2.php";
        


    }else{

        //Query de cadastro da foto no banco de dados
        include "container/Query-Cadastro-Foto-Restricao-Div.php";
        // ExeQrCadastrarFotoRestricoesDiv vem do arquivo acima

        if( $ExeQrCadastrarFotoRestricoesDiv ){
            echo "
                <br>Foto <b>$PrintRestricoesDiversasFile</b> 
                Cadastrada para o protocolo <b>$Protocolo</b>
            ";

            include "container/Query-Update-Restricao-Diversa.php";
            //$RowQrBuscarFotoMulta Vem do arquivo acima

            if( $RowQrBuscarFotoRestricaoDiv >=1 ){

                //Atualizar veículo
                include "container/Query-Update-Veiculo2.php";
            }
        }else{
            echo "
                <br>Erro ao cadastrar a foto <b>$PrintRestricoesDiversasFile: " . 
                mysqli_error($connection)."</b>
            ";
        }        
    }    
}else{
    echo "Erro";
}