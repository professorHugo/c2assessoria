<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['Protocolo']['pr'];
$PastaAssociado1 = $_SESSION['Protocolo']['cpf'];
echo "<br> Pasta do Associado: " . $PastaAssociado = "files/".$_SESSION['Protocolo']['cpf'];

$extensao = pathinfo($_FILES['print_vistoria_cautelar']['name']);
echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];

echo "<br>Cadastrar no banco de dados: " . $ArquivoMulta = "print_vistoria_cautelar" . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado . "/print_vistoria_cautelar" . $extensao;

if(move_uploaded_file($_FILES['print_vistoria_cautelar']['tmp_name'], $target_file)){
    //Buscar dados sobre a vistoria no banco de dados
    $QuerzBuscarVistorias = "SELECT * FROM tb_vistorias_realizadas WHERE protocolo_vistoria = '$Protocolo'";
    $ExeQrBuscarVistorias = mysqli_query($connection, $QuerzBuscarVistorias);
    $RowQrByscarVistorias = mysqli_num_rows($ExeQrBuscarVistorias);

    if($RowQrByscarVistorias >= 1){
        echo "<br><b>A vistoria para o protocolo $Protocolo já está cadastrada </b>";
    }else{
        //Cadastrar a foto da vistoria no banco de dados
        echo "<br><pre>".
        $QueryCadastrarFotoVistoria = "
            INSERT INTO tb_fotos(
                categoria_foto,
                protocolo_foto,
                pasta_foto,
                nome_foto
            )VALUES(
                'vistorias_realizadas',
                '$Protocolo',
                '$PastaAssociado1',
                '$ArquivoMulta'
            )
        ";
        echo "</pre>";
        $ExeQrCadastrarFotoVistoria = mysqli_query($connection, $QueryCadastrarFotoVistoria);
        if($ExeQrCadastrarFotoVistoria){
            echo "<br><b>Foto da Vistoria cadastrada no banco de dados</b>";
        }

        //Cadastrar nova vistoria no banco de dados
        $QueryBuscarFotoVistoria = "
            SELECT * FROM tb_fotos WHERE categoria_foto = 'vistorias_realizadas' && protocolo_foto = '$Protocolo'
        ";
        $ExeQrBuscarFotoVistoria = mysqli_query($connection, $QueryBuscarFotoVistoria);
        $RowQrBuscarFotoVistoria = mysqli_num_rows($ExeQrBuscarFotoVistoria);
        if($RowQrBuscarFotoVistoria >= 1){
            while($Res = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria)){
                echo "<br>" . $ResId = $Res['id_foto'];
                echo "<br><pre>";
                echo $QueryCadastrarVistoria = "
                    INSERT INTO tb_vistorias_realizadas(
                        protocolo_vistoria,
                        data_vistoria,
                        situacao_vistoria,
                        arquivo_vistoria
                    )VALUES(
                        '$Protocolo',
                        '$DataVistoria',
                        '$SituacaoVistoria',
                        '$ResId'
                    )
                ";
                echo "</pre>";
                $ExeQrCadastrarVistoria = mysqli_query($connection, $QueryCadastrarVistoria);
                if($ExeQrCadastrarVistoria){
                    echo "<br>Vistoria Cadastrada no banco de dados";
                }else{
                    echo "<br>Erro: ".mysqli_error($connection);
                }
            }
        }
    }
}else{
    echo "erro";
}