<?php
echo "<br>Print Restroções Financeiras: " . $_FILES['print_queixa_registrada']['name'];
//Extensão do arquivo
$extensao = pathinfo( $_FILES['print_queixa_registrada']['name'] );
$extensao = "." . $extensao['extension'];
//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$PrintQueixaRegistradaFile = $QueixaRegistrada.$extensao;

echo "<br>Destino Upload: " . 
$target_file = $PastaAssociado . "/" . $PrintQueixaRegistradaFile;

if( move_uploaded_file($PrintQueixaRegistrada, $target_file )){
    echo "
        <br>O arquivo <b>$PrintQueixaRegistradaFile</b> 
        carregado na pasta <b>$CPFAssociado</b>
    ";
    
    //Atualizar foto no banco de dados
    include "container/Query-Update-Queixa-Registrada.php";
    //$RowQrBuscarFotoQueixa Vem do arquivo acima

    if( $RowQrBuscarFotoQueixa >= 1 ){

        echo "
            <br>Foto <b>$PrintQueixaRegistradaFile</b> já cadastrada,
            atualizar dados do veículo
        ";
        
        //Atualizar veículo
        include "container/Query-Update-Veiculo4.php";
        


    }else{

        //Query de cadastro da foto no banco de dados
        include "container/Query-Cadastro-Foto-Queixa.php";
        // ExeQrCadastrarFotoRestricoesDiv vem do arquivo acima

        if( $ExeQrCadastrarFotoQueixa ){
            echo "
                <br>Foto <b>$PrintQueixaRegistradaFile</b> 
                Cadastrada para o protocolo <b>$Protocolo</b>
            ";

            include "container/Query-Update-Queixa-Registrada.php";
            //$RowQrBuscarFotoMulta Vem do arquivo acima

            if( $RowQrBuscarFotoQueixa >=1 ){

                //Atualizar veículo
                include "container/Query-Update-Veiculo4.php";
            }
        }else{
            echo "
                <br>Erro ao cadastrar a foto <b>$PrintQueixaRegistradaFile: " .  mysqli_error($connection)."</b>
            ";
        }        
    }    
}else{
    echo "Erro";
}