<?php
if( is_dir("Docs/".$CPFAssociado."/") ){
    echo "<br><br>Pasta de arquivos do associado: " . $PastaAssociado = "Docs/" . $CPFAssociado;

    echo "<br>Foto da Vistoria: " . $_FILES['print_vistoria_cautelar']['name'];
    //Extensão do arquivo
    $extensao = pathinfo( $_FILES['print_vistoria_cautelar']['name'] );
    $extensao = "." . $extensao['extension'];
    //Nome do arquivo
    echo "<br>Nome do arquivo: " . 
    $FotoVistoriaArquivo = $VistoriaRealizada.$extensao;

    echo "<br>Destino Upload: " . 
    $target_file = $PastaAssociado . "/" . $FotoVistoriaArquivo;

    if( move_uploaded_file($PrintVistoria, $target_file) ){
        echo "<br>
            O Arquivo de vistoria <b>$FotoVistoriaArquivo</b> 
            foi carregado para a pasta <b>$PastaAssociado</b>
        ";

        //Verificar se já existe a foto no banco de dados
        include "container/Query-Buscar-Vistorias.php";

        if( $RowQrBuscarFotosVistoria >=1 ){
            echo "<br>
            A foto <b>$FotoVistoriaArquivo</b> já existe, 
            atualizar o arquivo na <b>tb_vistorias_realizadas</b> e 
            atualizar a <b>tb_veiculos</b>
            ";



            //Update do arquivo na tb_vistorias_realizadas
            include "container/Update-Vistorias-Realizadas.php";
            //Update do veículo com a vistoria realizada
            include "container/Update-Vistoria-Veiculo.php";


            
        }else{
            //Cadastrar o arquivo no banco de dados
            echo "<br>Cadastrar foto no Banco de dados<pre>" . 
            $QueryCadastrarFotoVistoria = "
                INSERT INTO tb_fotos(
                    categoria_foto,
                    protocolo_foto,
                    pasta_foto,
                    nome_foto
                )VALUES(
                    'vistorias_realizadas',
                    '$Protocolo',
                    '$CPFAssociado',
                    '$FotoVistoriaArquivo'
                )
            ";
            echo "</pre>";
            $ExeQrCadastrarFotoVistoria = mysqli_query($connection, $QueryCadastrarFotoVistoria);
            if( $ExeQrCadastrarFotoVistoria ){
                echo "<br>
                    Foto <b>$FotoVistoriaArquivo</b> cadastrada.
                    Atualizar a tb_vistorias_realizadas
                ";



                //Update do arquivo na tb_vistorias_realizadas
                include "container/Update-Vistorias-Realizadas.php";
                //Update do veículo com a vistoria realizada
                include "container/Update-Vistoria-Veiculo.php";



            }else{
                echo "
                <br>Erro ao cadastrar a foto <b>$FotoVistoriaArquivo</b>
                " . mysqli_error($connection);
            }
        }
    }else{
        echo "<br>Erro";
    }
    
}