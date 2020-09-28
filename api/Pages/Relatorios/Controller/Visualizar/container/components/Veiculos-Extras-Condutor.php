<div class="col-12" style="margin-top: 2rem"></div>
<h5 class="col-12">Outros Veículos: </h5>

<?php
 "<br><pre>".
$QueryBuscarVeiculosExtras = "
    SELECT * FROM tb_veiculos
    WHERE
        protocolo_evento = '$Protocolo' &&
        placa_veiculo != '$PlacaVeiculo' &&
        proprietario_veiculo != '$IdAssociado'
";
 "</pre><br><br>";
$ExeQrBuscarVeiculosExtras = mysqli_query($connection, $QueryBuscarVeiculosExtras);
$RowQrBuscarVeiculosExtras = mysqli_num_rows($ExeQrBuscarVeiculosExtras);

if( $RowQrBuscarVeiculosExtras >= 1 ){
    while( $ReturVeiculosExtras = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtras) ){
        $Marca = $ReturVeiculosExtras['marca_veiculo'];
        $Modelo = $ReturVeiculosExtras['modelo_veiculo'];
        $Placa = $ReturVeiculosExtras['placa_veiculo'];
        $Seguro = $ReturVeiculosExtras['seguro_veiculo'];
        ?>
            <div class="col-sm-12 col-md-4 float-left table-bordered">
                Marca: <?php echo $Marca ?><br>
                Modelo: <?php echo $Modelo ?><br>
                Placa: <?php echo $Placa ?><br>
                Seguro: <?php echo $Seguro ?>
            </div>
        <?php
    }
}