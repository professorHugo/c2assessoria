<?php
 "<br>Editar AntiFurto";
 "<br>Id AntiFurto: " . $IdAntiFurto = $_POST['id_sistema'];
 "<br>Nome AntiFurto: " . $NomeAntiFurto = $_POST['nome'];

 "<br><pre>" .
$QueryBuscarAntiFurto = "
    SELECT * FROM
        tb_sistemas_anti_furto
    WHERE
        id_sistema = '$IdAntiFurto'
";
 "</pre>";
$ExeQrBuscarAntiFurto = mysqli_query($connection, $QueryBuscarAntiFurto);
$RowQrBuscarAntiFurto = mysqli_num_rows($ExeQrBuscarAntiFurto);

if( $RowQrBuscarAntiFurto = 1 ){
     "<br><pre>" .
    $QueryEditarAntiFurto = "
        UPDATE tb_sistemas_anti_furto
        SET
            tipo_sistema = '$NomeAntiFurto'
        WHERE
            id_sistema = '$IdAntiFurto'
    ";
     "</pre>";
    $ExeQrEditarAntiFurto = mysqli_query($connection, $QueryEditarAntiFurto);
    if( $ExeQrEditarAntiFurto ){
         "<br>AntiFurto de id: <b>$IdAntiFurto</b> foi editada para o nome <b>$NomeAntiFurto</b>";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&SistemasAntiFurto'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}