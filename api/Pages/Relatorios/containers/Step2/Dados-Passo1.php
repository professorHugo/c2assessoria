<?php
//Dados do passo 1
echo "<br> Sindicante: " . $nomeSindicante = $_SESSION['Login']['nome_usuario'];
echo "<br> Seguradora: " . $solicitante = $_POST['solicitante'];
echo "<br> Protocolo: " . $protocolo = $_POST['protocolo_evento'];
echo "<br> Natureza: " . $naturezaEvento = $_POST['natureza_evento'];
if(isset($_POST['novo_associado'])){
    echo "<br>CPF: " . $cpfAssociado = $_POST['cpf_associado_novo'];
    echo "<br>Nome: " . $nomeAssociado = $_POST['nome_associado_return'];
}else{
    echo "<br>CPF: " . $cpfAssociado = $_POST['cpf_associado'];
    echo "<br>Nome: " . $nomeAssociado = $_POST['nome_associado'];
}

echo "<br>CPF em session: " . $_SESSION['PastaAssociado'] = $cpfAssociado;
echo "<br>Protocolo em session: " . $_SESSION['ProtocoloCondutor'] = $protocolo;

//Criar Diretório do Cliente
if(!is_dir("Docs/".$cpfAssociado."/")){
    mkdir("Docs/".$cpfAssociado."/", 0777);
}