<?php
echo "<br>Ativar Estado Detran";
echo "<br>Id Detran: " . $IdDetran = $_POST['id_detran'];
echo "<br>Nome: " . $NomeDetran = $_POST['nome'];

$QueryBuscarDetran = "SELECT * FROM tb_detran_estados WHERE id_detran = '$IdDetran'";
$ExeQrBuscarDetran = mysqli_query($connection, $QueryBuscarDetran);
$RowQrBuscarDetran = mysqli_num_rows($ExeQrBuscarDetran);

if( $RowQrBuscarDetran >= 1 ){
    echo "<br><pre>" . 
    $UpdateDetran = "
        UPDATE tb_detran_estados
        SET 
            estado_detran = '$NomeDetran',
            ativacao = '1'
        WHERE id_detran = '$IdDetran'
    ";
    echo "</pre>";
    $ExeUpdateDetran = mysqli_query($connection, $UpdateDetran);
    if( $ExeUpdateDetran ){
        echo "<br>Detran <b>$NomeDetran</b> atualizado e ativado";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Detran'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}