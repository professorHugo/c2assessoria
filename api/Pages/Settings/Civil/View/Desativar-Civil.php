<?php
 "Desativar a civil";
 "<br>Id Civil: " . $IdCivil = $_POST['id_civil'];
 "<br>Nome: " . $NomeCivvil = $_POST['nome'];

$QueryBuscarCivil = "SELECT * FROM tb_tipos_civil WHERE id_civil = '$IdCivil'";
$ExeQrBuscarCivil = mysqli_query($connection, $QueryBuscarCivil);
$RowQrBuscarCivil = mysqli_num_rows($ExeQrBuscarCivil);

if( $RowQrBuscarCivil >= 1 ){
     "<br><pre>" . 
    $UpdateCivil = "
        UPDATE tb_tipos_civil 
        SET 
            descricao_civil = '$NomeCivvil',
            ativacao = '2'
        WHERE id_civil = '$IdCivil'
    ";
     "</pre>";
    $ExeUpdateCivil = mysqli_query($connection, $UpdateCivil);
    if( $ExeUpdateCivil ){
         "<br>Civil <b>$NomeCivvil</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Civil'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}