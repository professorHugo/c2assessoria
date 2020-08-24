<?php
echo "<br>Cadastro da foto
<pre>" . 
$QueryCadastrarFotoRestricoesFin = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'restricoes_financeiras',
        '$Protocolo',
        '$CPFAssociado',
        '$PrintRestricoesFinanceirasFile'
    )
";
echo "</pre>";
$ExeQrCadastrarFotoRestricoesFin = mysqli_query(
    $connection, $QueryCadastrarFotoRestricoesFin
);
if( $ExeQrCadastrarFotoRestricoesFin ){
    echo "<br>Cadastrado";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}