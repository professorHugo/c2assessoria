<?php
//Dados do passo 1
$nomeSindicante = $_SESSION['Login']['nome_usuario'];
$solicitante = $_POST['solicitante'];
$protocolo = $_POST['protocolo_evento'];
$naturezaEvento = $_POST['natureza_evento'];
if(isset($_POST['novo_associado'])){
    $cpfAssociado = $_POST['cpf_associado_novo'];
    $nomeAssociado = $_POST['nome_associado_return'];
}else{
    $cpfAssociado = $_POST['cpf_associado'];
    $nomeAssociado = $_POST['nome_associado'];
}

$_SESSION['PastaAssociado'] = $cpfAssociado;
($_SESSION['PastaAssociado']);



//Array do Passo 1
$Step1 = array($nomeSindicante, $solicitante, $protocolo, $naturezaEvento,$cpfAssociado,$nomeAssociado);
($_SESSION['CadastroSindicancia1'] = $Step1);

//Criar Diretório do Cliente
if(!is_dir("files/".$cpfAssociado."/")){
    mkdir("files/".$cpfAssociado."/", 0777);
}