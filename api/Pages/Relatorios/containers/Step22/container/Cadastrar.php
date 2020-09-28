<?php
$app1 = $_POST['app_1'];
$app2 = $_POST['app_2'];
$app3 = $_POST['app_3'];
$app4 = $_POST['app_4'];
$app5 = $_POST['app_5'];
$app6 = $_POST['app_6'];

include "SQL/Buscar-Mobilidade.php";

if( $RowQrBuscarMobilidade >= 1 ){
    echo "
        <br>O Registro de mobilidade para o protocolo <b>$Protocolo</b> já está cadastrado, 
        atualizar o registro_mobilidade
    ";
    
    
    include "SQL/Buscar-Registro-Mobilidade.php";

    if( $RowQrBuscaRegistroMobilidade >= 1 ){
        //Update Mobilidade
        include "SQL/Update-Mobilidade.php";
    }
}else{
    //Cadastrar Mobilidade
    include "SQL/Insert-Mobilidade.php";

    if( $ExeQrInsertMobilidade ){
        echo "<br>O registro foi inserido, atualizar o registro";

        include "SQL/Buscar-Registro-Mobilidade.php";
        if( $RowQrBuscaRegistroMobilidade >= 1 ){
            //Update Mobilidade
            include "SQL/Update-Mobilidade.php";
        }
        
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}