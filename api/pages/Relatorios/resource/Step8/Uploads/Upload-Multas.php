<?php
echo "<br><br>Diretório de Armazenamento: " . $PastaAssociado1 = "files/".$PastaAssociado;

$extensao = pathinfo($_FILES['print_multa_evento']['name']);
echo "<br>Extensão: " . $extensao = "." . $extensao['extension'];

echo "<br>Cadastrar no banco de dados: " . $ArquivoMulta = "print_multa_evento" . $extensao;

echo "<br> Nome do arquivo: " . $target_file = $PastaAssociado1 . "/print_multa_evento" . $extensao;

if(move_uploaded_file($_FILES['print_multa_evento']['tmp_name'], $target_file)){
    //Verificar cadastro da foto no sistema antes
    echo "<br>" . 
    $QueryBuscarFotoMulta = "
        SELECT * FROM tb_fotos 
        WHERE protocolo_foto = '$Protocolo'
        AND categoria_foto = 'multa'
    ";
    "<br><pre>"; 
    ($ExeQrBuscarFotoMulta = mysqli_query($connection, $QueryBuscarFotoMulta));
    "</pre><br>";
    if(mysqli_num_rows($ExeQrBuscarFotoMulta) > 0){
        echo "<br><b>Foto da multa já cadastrada</b>";
    }else{
        //Cadastrar os dados da foto no Banco de dados
        echo "<br><pre>".
        $QueryCadastrarFotoMulta = "
            INSERT INTO tb_fotos(
                categoria_foto,
                protocolo_foto,
                pasta_foto,
                nome_foto
            )VALUES(
                'multa',
                '$Protocolo',
                '$PastaAssociado',
                '$ArquivoMulta'
            )
        ";
        echo "<br></pre>";
        $ExeQrCadastrarFotoMulta = mysqli_query($connection, $QueryCadastrarFotoMulta);
        if($ExeQrCadastrarFotoMulta){
            echo "<br> Foto Cadastrada";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }
}