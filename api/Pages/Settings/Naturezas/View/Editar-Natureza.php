<?php
 "<br>Editar Natureza";
 "<br>Id Natureza: " . $IdNatureza = $_POST['id_natureza'];
 "<br>Nome Natureza: " . $NomeNatureza = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarNaturezas = "
    SELECT * FROM 
        tb_natureza_evento 
    WHERE 
        id_natureza = '$IdNatureza'
";
 "</pre>";
$ExeQrBuscarNaturezas = mysqli_query($connection, $QueryBuscarNaturezas);
$RowQrBuscarNaturezas = mysqli_num_rows($ExeQrBuscarNaturezas);

if( $RowQrBuscarNaturezas = 1 ){
     "<br><pre>" . 
    $QueryEditarNatureza = "
        UPDATE tb_natureza_evento
        SET
            descricao_natureza = '$NomeNatureza'
        WHERE
            id_natureza = '$IdNatureza'
    ";
     "</pre>";
    $ExeQrEditarNatureza = mysqli_query($connection, $QueryEditarNatureza);
    if( $ExeQrEditarNatureza ){
         "<br>Natureza de id: <b>$IdNatureza</b> foi editada para o nome <b>$NomeNatureza</b>";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Naturezas'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}