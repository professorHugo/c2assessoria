<?php
echo "<br>Registros Anteriores: " . $RegistrosAnteriores = $_POST['registro_mobilidade'];
if( $RegistrosAnteriores == 1 ){
    echo "<br>Registros Convergem: " . $RegistrosConvergem = $_POST['registros_convergem'];
    echo "<br>Motorista de Aplicativos: " . $MotoristaApp = $_POST['motorista_app'];
    echo "<br>Observações: " . $Observacoes = $_POST['observacoes'];
    
    if( $MotoristaApp == 1 ){
        include "container/Cadastrar.php";
    }
}