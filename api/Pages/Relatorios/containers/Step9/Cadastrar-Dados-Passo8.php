<?php
//Buscar Vistoria
echo "<br><pre>" . 
$QueryBuscarVistoria = "
    SELECT * FROM tb_vistorias_realizadas
    WHERE protocolo_vistoria = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarVistoria = mysqli_query($connection, $QueryBuscarVistoria);
$RowQrBuscarVistoria = mysqli_num_rows($ExeQrBuscarVistoria);
if( $RowQrBuscarVistoria >=1 ){
    echo "<br>Vistoria Já Cadastrada para o protocolo <b>$Protocolo</b>";
}else{
    echo "<br><pre>" . 
    $QueryCadastrarVistoria = "
        INSERT INTO tb_vistorias_realizadas(
            protocolo_vistoria,
            situacao_vistoria,
            data_vistoria
        )VALUES(
            '$Protocolo',
            '$SituacaoVistoria',
            '$DataVistoria '
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarVistoria = mysqli_query($connection, $QueryCadastrarVistoria);
    if( $ExeQrCadastrarVistoria ){
        echo "<br>Vistoria cadastrada para o protocolo <b>$Protocolo</b>";
    }else{
        echo "<br>Erro ao cadastrar vistoria para o protocolo <b>$Protocolo</b>";
    }
}
