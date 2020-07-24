<?php
if($_GET['url'] == "Clientes" && isset($_GET['Cadastrar'])){
    include_once 'Clientes/Cadastrar-Novo.php';
}

if($_GET['url'] == "Clientes" && isset($_GET['Editar'])){
    include_once 'Clientes/Editar-Cadastro.php';
}

if($_GET['url'] == "Clientes" && isset($_GET['Save'])){
    include_once 'Clientes/Modals/Modal-Update.php';
}

if($_GET['url'] == "Clientes" && isset($_GET['Delete'])){
    include_once 'Clientes/Excluir-Cadastro.php';
}

if(!isset($_GET['Delete']) && !isset($_GET['Editar']) && !isset($_GET['Cadastrar']) && !isset($_GET['Save'])){
    include_once 'Clientes/Exibir-Clientes.php';
}