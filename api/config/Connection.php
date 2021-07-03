<?php
/* Off Line 1 */
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
/* Off Line 2 
$HOST   = 'localhost';
$USER   = 'root';
$PASS   = '';
$DBA    = 'c2assessoria2';

$connection = mysqli_connect($HOST, $USER, $PASS, $DBA);

if($connection){
    return $connection;
    echo "Conectado";
}else{
    echo "Erro";
}

/* Deployed 
$HOST   = 'localhost';
$USER   = 'n2yco435_c2admin';
$PASS   = 'ixJ{;%6cnMcC';
$DBA    = 'n2yco435_c2assessoria';

$connection = mysqli_connect($HOST, $USER, $PASS, $DBA);

if($connection){
    return $connection;
    echo "Conectado";
}else{
    echo "Erro";
}
/**/