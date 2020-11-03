<?php
if( isset( $_GET['Naturezas'] ) ){
    include_once "Naturezas/index.php";
}

if( isset( $_GET['Civil'] ) ){
    include_once "Civil/index.php";
}

if( isset( $_GET['Procedentes'] ) ){
    include_once "Procedentes/index.php";
}

if( isset( $_GET['Chaves'] ) ){
    include_once "Chaves/index.php";
}

if( isset( $_GET['SistemasAntiFurto'] ) ){
    include_once "SistemasAntiFurto/index.php";
}

if( isset( $_GET['Detran'] ) ){
    include_once "Detran/index.php";
}