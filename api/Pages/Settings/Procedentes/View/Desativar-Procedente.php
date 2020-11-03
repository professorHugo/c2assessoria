<?php
 "Desativar Procedente";
 "<br>Id Procedente: " . $IdProcedente = $_POST['id_procedente'];
 "<br>Nome: " . $NomeProcedente = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarProcedente = "
    SELECT * FROM 
        tb_tipos_procedentes 
    WHERE id_procedente = '$IdProcedente'
";
 "</pre>";
$ExeQrBuscarProcedentes = mysqli_query($connection, $QueryBuscarProcedente);
$RowQrBuscarProcedentes = mysqli_num_rows($ExeQrBuscarProcedentes);

if( $RowQrBuscarProcedentes >= 1 ){
     "<br><pre>" . 
    $UpdateProcedentes = "
        UPDATE tb_tipos_procedentes 
        SET 
            descricao_procedente = '$NomeProcedente',
            ativacao = '2'
        WHERE id_procedente = '$IdProcedente'
    ";
     "</pre>";
    $ExeUpdateProcedentes = mysqli_query($connection, $UpdateProcedentes);
    if( $ExeUpdateProcedentes ){
         "<br>Procedente <b>$NomeProcedente</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Procedentes'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}