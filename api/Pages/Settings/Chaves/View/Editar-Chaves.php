<?php
 "<br>Editar Chave";
 "<br>Id Chave: " . $IdChave = $_POST['id_chave'];
 "<br>Nome Chave: " . $NomeChave = $_POST['nome'];

 "<br><pre>" .
$QueryBuscarChaves = "
    SELECT * FROM
        tb_tipos_chaves
    WHERE
        id_chave = '$IdChave'
";
 "</pre>";
$ExeQrBuscarChaves = mysqli_query($connection, $QueryBuscarChaves);
$RowQrBuscarChaves = mysqli_num_rows($ExeQrBuscarChaves);

if( $RowQrBuscarChaves = 1 ){
     "<br><pre>" .
    $QueryEditarChaves = "
        UPDATE tb_tipos_chaves
        SET
            descricao_Chave = '$NomeChave'
        WHERE
            id_chave = '$IdChave'
    ";
     "</pre>";
    $ExeQrEditarChaves = mysqli_query($connection, $QueryEditarChaves);
    if( $ExeQrEditarChaves ){
         "<br>Chaves de id: <b>$IdChave</b> foi editada para o nome <b>$NomeChave</b>";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Chaves'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}