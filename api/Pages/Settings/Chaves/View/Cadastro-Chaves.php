<?php
 "Chave: " . $NomeChave = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarChave = "
    SELECT * FROM 
        tb_tipos_chaves 
    WHERE 
        descricao_chave = '$NomeChave' &&
        ativacao = 1
";
 "</pre>";
$ExeQrBuscarChave = mysqli_query($connection, $QueryBuscarChave);

if( mysqli_num_rows($ExeQrBuscarChave) < 1 ){
     "<br><pre>" . 
    $QueryCadastrarChave = "
        INSERT INTO tb_tipos_chaves(
            descricao_chave
        )VALUES(
            '$NomeChave'
        )
    ";
     "</pre>";
    $ExeQrCadastrarChave = mysqli_query($connection, $QueryCadastrarChave);
    if( $ExeQrCadastrarChave ){
         "<br>Chave <b>$NomeChave</b> cadastrada";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Chaves'>
        ";
    }
}else{
     "<br>Chave <b>$NomeChave</b> já tem cadastro";
    echo "
        <meta http-equiv='refresh' content='0;?Page=Settings&Chaves'>
    ";
}