<?php
echo "<br><br>Pasta do Associado: " . $PastaAssociado;
echo "<br><br>Diretório de Armazenamento: " . $PastaAssociado1 = "files/".$PastaAssociado;

$extensao = pathinfo($_FILES['print_queixa_registrada']['name']);
echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];

echo "<br>Cadastrar no banco de dados: " . $ArquivoMulta = "print_queixa_registrada" . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado1 . "/print_queixa_registrada" . $extensao;

if(move_uploaded_file($_FILES['print_queixa_registrada']['tmp_name'], $target_file)){
    //Verificar cadastro da foto no sistema antes
    echo "<br>" . 
    $QueryBuscarFotoQueixa = "
        SELECT * FROM tb_fotos 
        WHERE protocolo_foto = '$Protocolo'
        AND categoria_foto = 'queixa_registrada'
    ";
    $ExeQrBuscarFotoQueixa = mysqli_query($connection, $QueryBuscarFotoQueixa);

    if(mysqli_num_rows($ExeQrBuscarFotoQueixa) > 0 ){
        echo "<br><b>Foto da Queixa Registrada já cadastrada</b>";
    }else{
        //Cadastrar os dados da foto no Banco de dados
        echo "<br><pre>".
        $QueryCadastrarFotoQueixa = "
            INSERT INTO tb_fotos(
                categoria_foto,
                protocolo_foto,
                pasta_foto,
                nome_foto
            )VALUES(
                'queixa_registrada',
                '$Protocolo',
                '$PastaAssociado',
                '$ArquivoMulta'
            )
        ";
        echo "<br></pre>";
        $ExeQrCadastrarFotoQueixa = mysqli_query($connection, $QueryCadastrarFotoQueixa);
        if($ExeQrCadastrarFotoQueixa){
            echo "<br> Foto Cadastrada";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }
}