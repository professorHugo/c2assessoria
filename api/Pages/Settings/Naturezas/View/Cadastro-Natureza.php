<?php
echo "Natureza: " . $NomeNatureza = $_POST['nome'];

echo "<br><pre>" . 
$QueryBuscarNaturezas = "
    SELECT * FROM 
        tb_natureza_evento 
    WHERE 
        descricao_natureza = '$NomeNatureza' &&
        ativacao = 1
";
echo "</pre>";
$ExeQrBuscarNaturezas = mysqli_query($connection, $QueryBuscarNaturezas);

if( mysqli_num_rows($ExeQrBuscarNaturezas) < 1 ){
    echo "<br><pre>" . 
    $QueryCadastrarNatureza = "
        INSERT INTO tb_natureza_evento(
            descricao_natureza
        )VALUES(
            '$NomeNatureza'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarNatureza = mysqli_query($connection, $QueryCadastrarNatureza);
    if( $ExeQrCadastrarNatureza ){
        echo "<br>Natureza <b>$NomeNatureza</b> cadastrada";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&Naturezas'>
        ";
    }
}else{
    echo "<br>Natureza <b>$NomeNatureza</b> já tem cadastro";
    echo "
        <meta http-equiv='refresh' content='0;?Page=Settings&Naturezas'>
    ";
}