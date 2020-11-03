<?php
 "Tipo Procedente: " . $NomeProcedente = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarProcedente = "
    SELECT * FROM 
        tb_tipos_procedentes 
    WHERE 
        descricao_procedente = '$NomeProcedente' &&
        ativacao = 1
";
 "</pre>";
$ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);

if( mysqli_num_rows($ExeQrBuscarProcedente) < 1 ){
     "<br><pre>" . 
    $QueryCadastrarProcedentes = "
        INSERT INTO tb_tipos_procedentes(
            descricao_procedente
        )VALUES(
            '$NomeProcedente'
        )
    ";
     "</pre>";
    $ExeQrCadastrarProcedente = mysqli_query($connection, $QueryCadastrarProcedentes);
    if( $ExeQrCadastrarProcedente ){
         "<br>Procedente <b>$NomeProcedente</b> cadastrada";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Procedentes'>
        ";
    }
}else{
    echo "<br>Procedente <b>$NomeProcedente</b> já tem cadastro";
    echo "
        <meta http-equiv='refresh' content='0;?Page=Settings&Procedentes'>
    ";
}