<?php
 "Desativar a natureza do evento";
 "<br>Id Natureza: " . $IdNatureza = $_POST['id_natureza'];
 "<br>Nome: " . $NomeNatureza = $_POST['nome'];

$QueryBuscarNaturezas = "SELECT * FROM tb_natureza_evento WHERE id_natureza = '$IdNatureza'";
$ExeQrBuscarNaturezas = mysqli_query($connection, $QueryBuscarNaturezas);
$RowQrBuscarNaturezas = mysqli_num_rows($ExeQrBuscarNaturezas);

if( $RowQrBuscarNaturezas >= 1 ){
     "<br><pre>" . 
    $UpdateNatureza = "
        UPDATE tb_natureza_evento 
        SET 
            descricao_natureza = '$NomeNatureza',
            ativacao = '2'
        WHERE id_natureza = '$IdNatureza'
    ";
     "</pre>";
    $ExeUpdateNatureza = mysqli_query($connection, $UpdateNatureza);
    if( $ExeUpdateNatureza ){
         "<br>Natureza <b>$NomeNatureza</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Naturezas'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}