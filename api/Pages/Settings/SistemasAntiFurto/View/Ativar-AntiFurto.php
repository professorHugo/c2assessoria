<?php
 "Ativar Sistema Anti Furto";
 "<br>Id AntiFurto: " . $IdAntiFurto = $_POST['id_sistema'];
 "<br>Nome: " . $NomeAntiFurto = $_POST['nome'];

$QueryBuscarAntiFurto = "SELECT * FROM tb_sistemas_anti_furto WHERE id_sistema = '$IdAntiFurto'";
$ExeQrBuscarAntiFurto = mysqli_query($connection, $QueryBuscarAntiFurto);
$RowQrBuscarAntiFurto = mysqli_num_rows($ExeQrBuscarAntiFurto);

if( $RowQrBuscarAntiFurto = 1 ){
     "<br><pre>" .
    $UpdateAntiFurto = "
        UPDATE tb_sistemas_anti_furto
        SET
            tipo_sistema = '$NomeAntiFurto',
            ativacao = '1'
        WHERE id_sistema = '$IdAntiFurto'
    ";
     "</pre>";
    $ExeUpdateAntiFurto = mysqli_query($connection, $UpdateAntiFurto);
    if( $ExeUpdateAntiFurto ){
         "<br>AntiFurto <b>$NomeAntiFurto</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&SistemasAntiFurto'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}else{
    echo "Erro: " . mysqli_error($connection);
}