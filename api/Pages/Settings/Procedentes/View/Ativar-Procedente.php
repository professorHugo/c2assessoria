<?php
 "Ativar Procedente";
 "<br>Id Procedente: " . $IdProcedente = $_POST['id_procedente'];
 "<br>Nome: " . $NomeProcedente = $_POST['nome'];

$QueryBuscarProcedente = "SELECT * FROM tb_tipos_procedentes WHERE id_procedente = '$IdProcedente'";
$ExeQrBuscarProcedente = mysqli_query($connection, $QueryBuscarProcedente);
$RowQrBuscarProcedente = mysqli_num_rows($ExeQrBuscarProcedente);

if( $RowQrBuscarProcedente = 1 ){
     "<br><pre>" .
    $UpdateProcedente = "
        UPDATE tb_tipos_procedentes
        SET
            descricao_procedente = '$NomeProcedente',
            ativacao = '1'
        WHERE id_procedente = '$IdProcedente'
    ";
     "</pre>";
    $ExeUpdateProcedente = mysqli_query($connection, $UpdateProcedente);
    if( $ExeUpdateProcedente ){
         "<br>Procedente <b>$NomeProcedente</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Procedentes'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}else{
    echo "Erro: " . mysqli_error($connection);
}