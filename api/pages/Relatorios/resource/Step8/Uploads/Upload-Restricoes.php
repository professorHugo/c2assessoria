<?php
echo "<br><br>Pasta do Associado: " . $PastaAssociado;
echo "<br><br>Diretório de Armazenamento: " . $PastaAssociado1 = "files/".$PastaAssociado;

$extensao = pathinfo($_FILES['print_restricoes_diversas']['name']);
echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];

echo "<br>Cadastrar no banco de dados: " . $ArquivoMulta = "print_restricoes_diversas" . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado1 . "/print_restricoes_diversas" . $extensao;

if(move_uploaded_file($_FILES['print_restricoes_diversas']['tmp_name'], $target_file)){
    //Verificar cadastro da foto no sistema antes
    echo "<br>" . 
    $QueryBuscarFotoRestricoesDiv = "
        SELECT * FROM tb_fotos 
        WHERE protocolo_foto = '$Protocolo'
        AND categoria_foto = 'restricoes_diversas'
    ";
    $ExeQrBuscarFotoRestricoesDiv = mysqli_query($connection, $QueryBuscarFotoRestricoesDiv);

    if(mysqli_num_rows($ExeQrBuscarFotoRestricoesDiv) > 0 ){
        echo "<br><b>Foto da restrição já cadastrada</b>";
    }else{
        //Cadastrar os dados da foto no Banco de dados
        echo "<br><pre>".
        $QueryCadastrarFotoRestricoesDiv = "
            INSERT INTO tb_fotos(
                categoria_foto,
                protocolo_foto,
                pasta_foto,
                nome_foto
            )VALUES(
                'restricoes_diversas',
                '$Protocolo',
                '$PastaAssociado',
                '$ArquivoMulta'
            )
        ";
        echo "<br></pre>";
        $ExeQrCadastrarFotoRestricoesDiv = mysqli_query($connection, $QueryCadastrarFotoRestricoesDiv);
        if($ExeQrCadastrarFotoRestricoesDiv){
            echo "<br> Foto Cadastrada";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }
}