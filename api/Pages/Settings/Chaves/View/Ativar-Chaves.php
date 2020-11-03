<?php
 "Ativar Chave";
 "<br>Id Chave: " . $IdChave = $_POST['id_chave'];
 "<br>Nome: " . $NomeChave = $_POST['nome'];

$QueryBuscarChave = "SELECT * FROM tb_tipos_chaves WHERE id_chave = '$IdChave'";
$ExeQrBuscarChave = mysqli_query($connection, $QueryBuscarChave);
$RowQrBuscarChave = mysqli_num_rows($ExeQrBuscarChave);

if( $RowQrBuscarChave = 1 ){
     "<br><pre>" .
    $UpdateChave = "
        UPDATE tb_tipos_chaves
        SET
            descricao_Chave = '$NomeChave',
            ativacao = '1'
        WHERE id_chave = '$IdChave'
    ";
     "</pre>";
    $ExeUpdateChave = mysqli_query($connection, $UpdateChave);
    if( $ExeUpdateChave ){
         "<br>Chave <b>$NomeChave</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Chaves'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}else{
    echo "Erro: " . mysqli_error($connection);
}