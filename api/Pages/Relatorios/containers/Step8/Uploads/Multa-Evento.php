<?php
echo "<br>Print Multa Evento: " . $_FILES['evento_multa_veiculo']['name'];
//Extensão do arquivo
$extensao = pathinfo( $_FILES['print_multa_evento']['name'] );
$extensao = "." . $extensao['extension'];
//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$FotoMultaArquivo = $EventoMultaVeiculo.$extensao;

echo "<br>Destino Upload: " . 
$target_file = $PastaAssociado . "/" . $FotoMultaArquivo;

if( move_uploaded_file($PrintMultaEvento, $target_file )){
    echo "<br>O arquivo <b>$FotoMultaArquivo</b> carregado na pasta <b>$CPFAssociado</b>";
    
    //Atualizar foto no banco de dados
    include "container/Query-Update-Multa.php";
    //$RowQrBuscarFotoMulta Vem do arquivo acima

    if( $RowQrBuscarFotoMulta >= 1 ){

        echo "<br>Foto <b>$FotoMultaArquivo</b> já cadastrada, atualizar dados do veículo";
        
        //Atualizar veículo
        include "container/Query-Update-Veiculo.php";
        


    }else{

        //QueryCadastro da foto de Multa
        include "container/Query-Cadastro-Foto-Multa.php";

        $ExeQrCadastrarFotoMulta = mysqli_query($connection, $QueryCadastrarFotoMulta);
        if( $ExeQrCadastrarFotoMulta ){
            echo "
                <br>Foto <b>$FotoMultaArquivo</b> 
                Cadastrada para o protocolo <b>$Protocolo</b>
            ";

            include "container/Query-Update-Multa.php";
            //$RowQrBuscarFotoMulta Vem do arquivo acima

            if( $RowQrBuscarFotoMulta >=1 ){

                //Atualizar veículo
                include "container/Query-Update-Veiculo.php";
            }
        }else{
            echo "<br>Erro ao cadastrar a foto <b>$FotoMultaArquivo: " . mysqli_error($connection)."</b>";
        }        
    }    
}else{
    echo "Erro";
}