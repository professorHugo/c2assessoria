<?php
"Protocolo: " . $Protocolo = $_GET['id'];
$QueryBuscarRelatorio = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
$ExeQrBuscarRelatorio = mysqli_query($connection, $QueryBuscarRelatorio);
$RowQrBuscarRelatorio = mysqli_num_rows($ExeQrBuscarRelatorio);
if($RowQrBuscarRelatorio >= 1){
    while($ResRelatorios = mysqli_fetch_assoc($ExeQrBuscarRelatorio)){
        include_once "Apresentar/Topo.php";

        echo "<br><pre>";
        print_r($ResRelatorios);
        echo "</pre>";
    }
}else{
    echo "<br>Houve um erro ao tentar encontrar o relatório, tente novamente.";
}