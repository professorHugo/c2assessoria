<?php
 "Desativar Chave";
 "<br>Id Chave: " . $IdChave = $_POST['id_chave'];
 "<br>Nome: " . $NomeChave = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarChave = "
    SELECT * FROM 
        tb_tipos_chaves
    WHERE id_chave = '$IdChave'
";
 "</pre>";
$ExeQrBuscarChaves = mysqli_query($connection, $QueryBuscarChave);
$RowQrBuscarChaves = mysqli_num_rows($ExeQrBuscarChaves);

if( $RowQrBuscarChaves >= 1 ){
     "<br><pre>" . 
    $UpdateChaves = "
        UPDATE tb_tipos_chaves
        SET 
            descricao_Chave = '$NomeChave',
            ativacao = '2'
        WHERE id_chave = '$IdChave'
    ";
     "</pre>";
    $ExeUpdateChaves = mysqli_query($connection, $UpdateChaves);
    if( $ExeUpdateChaves ){
         "<br>Chave <b>$NomeChave</b> atualizado e desativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Chaves'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}