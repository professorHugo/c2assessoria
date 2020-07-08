<?php
/* Off Line */
$HOST   = 'localhost';
$USER   = 'root';
$PASS   = '';
$DBA    = 'c2assessoria';

$connection = mysqli_connect($HOST, $USER, $PASS, $DBA);

if($connection){
    return $connection;
    echo "Conectado";
}else{
    echo "Erro";
}

/* Deployed 
$HOST   = 'localhost';
$USER   = 'root';
$PASS   = '';
$DBA    = 'c2assessoria';

$connection = mysqli_connect($HOST, $USER, $PASS, $DBA);

if($connection){
    return $connection;
    echo "Conectado";
}else{
    echo "Erro";
}
*/