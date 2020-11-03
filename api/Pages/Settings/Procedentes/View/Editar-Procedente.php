<?php
 "<br>Editar Procedente";
 "<br>Id Procedente: " . $IdProcedente = $_POST['id_procedente'];
 "<br>Nome Procedente: " . $NomeProcedente = $_POST['nome'];

 "<br><pre>" .
$QueryBuscarProcedentes = "
    SELECT * FROM
        tb_tipos_procedentes
    WHERE
        id_procedente = '$IdProcedente'
";
 "</pre>";
$ExeQrBuscarProcedentes = mysqli_query($connection, $QueryBuscarProcedentes);
$RowQrBuscarProcedentes = mysqli_num_rows($ExeQrBuscarProcedentes);

if( $RowQrBuscarProcedentes = 1 ){
     "<br><pre>" .
    $QueryEditarProcedentes = "
        UPDATE tb_tipos_procedentes
        SET
            descricao_procedente = '$NomeProcedente'
        WHERE
            id_procedente = '$IdProcedente'
    ";
     "</pre>";
    $ExeQrEditarProcedentes = mysqli_query($connection, $QueryEditarProcedentes);
    if( $ExeQrEditarProcedentes ){
         "<br>Procedentes de id: <b>$IdProcedente</b> foi editada para o nome <b>$NomeProcedente</b>";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Procedentes'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}