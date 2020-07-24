<?php
echo "<br><br>Pasta do Associado: " . $PastaAssociado;
echo "<br><br>Diretório de Armazenamento: " . $PastaAssociado1 = "files/".$PastaAssociado;

$extensao = pathinfo($_FILES['print_restricoes_financeiras']['name']);
echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];

echo "<br>Cadastrar no banco de dados: " . $ArquivoMulta = "print_restricoes_financeiras" . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado1 . "/print_restricoes_financeiras" . $extensao;

if(move_uploaded_file($_FILES['print_restricoes_financeiras']['tmp_name'], $target_file)){
    //Verificar cadastro da foto no sistema antes
    echo "<br>" . 
    $QueryBuscarFotoRestricoesFin = "
        SELECT * FROM tb_fotos 
        WHERE protocolo_foto = '$Protocolo'
        AND categoria_foto = 'restricoes_financeiras'
    ";
    $ExeQrBuscarFotoRestricoesDiv = mysqli_query($connection, $QueryBuscarFotoRestricoesFin);

    if(mysqli_num_rows($ExeQrBuscarFotoRestricoesDiv) > 0 ){
        echo "<br><b>Foto da restrição financeira já cadastrada</b>";
    }else{
        //Cadastrar os dados da foto no Banco de dados
        echo "<br><pre>".
        $QueryCadastrarFotoRestricoesFin = "
            INSERT INTO tb_fotos(
                categoria_foto,
                protocolo_foto,
                pasta_foto,
                nome_foto
            )VALUES(
                'restricoes_financeiras',
                '$Protocolo',
                '$PastaAssociado',
                '$ArquivoMulta'
            )
        ";
        echo "<br></pre>";
        $ExeQrCadastrarFotoRestricoesFin = mysqli_query($connection, $QueryCadastrarFotoRestricoesFin);
        if($ExeQrCadastrarFotoRestricoesFin){
            echo "<br> Foto Cadastrada";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }
}