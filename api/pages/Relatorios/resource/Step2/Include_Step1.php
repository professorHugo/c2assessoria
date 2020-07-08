<?php
//Dados do passo 1
$nomeSindicante = $_SESSION['Login']['nome_usuario'];
$solicitante = $_POST['solicitante'];
$protocolo = $_POST['protocolo_evento'];
$naturezaEvento = $_POST['natureza_evento'];
$cpfAssociado = $_POST['cpf_associado'];
$nomeAssociado = $_POST['nome_associado'];

//Array do Passo 1
$Step1 = array($nomeSindicante, $solicitante, $protocolo, $naturezaEvento,$cpfAssociado,$nomeAssociado);
($_SESSION['CadastroSindicancia1'] = $Step1);

//Criar Diretório do Cliente
if(!is_dir("files/".$_POST['nome_associado']."/")){
    mkdir("files/".$_POST['nome_associado']."/", 0777);
}