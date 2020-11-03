<?php
 "<br>Editar Natureza";
 "<br>Id Natureza: " . $IdCivil = $_POST['id_civil'];
 "<br>Nome Natureza: " . $NomeCivil = $_POST['nome'];

 "<br><pre>" .
$QueryBuscarCivil = "
    SELECT * FROM
        tb_tipos_civil
    WHERE
        id_civil = '$IdCivil'
";
 "</pre>";
$ExeQrBuscarCivil = mysqli_query($connection, $QueryBuscarCivil);
$RowQrBuscarCivil = mysqli_num_rows($ExeQrBuscarCivil);

if( $RowQrBuscarCivil = 1 ){
     "<br><pre>" .
    $QueryEditarCivil = "
        UPDATE tb_tipos_civil
        SET
            descricao_civil = '$NomeCivil'
        WHERE
            id_civil = '$IdCivil'
    ";
     "</pre>";
    $ExeQrEditarCivil = mysqli_query($connection, $QueryEditarCivil);
    if( $ExeQrEditarCivil ){
         "<br>Civil de id: <b>$IdCivil</b> foi editada para o nome <b>$NomeCivil</b>";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Civil'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}