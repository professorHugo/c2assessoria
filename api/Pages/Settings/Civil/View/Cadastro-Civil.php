<?php
 "Estado civil: " . $NomeCivil = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarCivil = "
    SELECT * FROM 
        tb_tipos_civil 
    WHERE 
        descricao_civil = '$NomeCivil' &&
        ativacao = 1
";
 "</pre>";
$ExeQrBuscarCivil = mysqli_query($connection, $QueryBuscarCivil);

if( mysqli_num_rows($ExeQrBuscarCivil) < 1 ){
     "<br><pre>" . 
    $QueryCadastrarCivil = "
        INSERT INTO tb_tipos_civil(
            descricao_civil
        )VALUES(
            '$NomeCivil'
        )
    ";
     "</pre>";
    $ExeQrCadastrarCivil = mysqli_query($connection, $QueryCadastrarCivil);
    if( $ExeQrCadastrarCivil ){
         "<br>Civil <b>$NomeCivil</b> cadastrada";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Civil'>
        ";
    }
}else{
    echo "<br>Civil <b>$NomeCivil</b> já tem cadastro";
    echo "
        <meta http-equiv='refresh' content='0;?Page=Settings&Civil'>
    ";
}