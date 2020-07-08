<?php

 "Solicitante: ". $SolicitanteSindicancia = $_POST['solicitante'];
 "<br>";
 "Protocolo: ". $ProtocoloEvento = $_POST['protocolo_evento'];
 "<br>";
 "Natureza Evento: ".$NaturezaEvento = $_POST['natureza_evento'];
 "<br>";
  "CPF Associado: ".$CPFAssociado = $_POST['cpf_associado'];
 "Protocolo: " . $_SESSION['Protocolo']['pr'] = $ProtocoloEvento;
 "<br> CPF Segurado: " . $_SESSION['Protocolo']['cpf'] = $CPFAssociado;
 "<br>";
 
//Fazer o pré-cadastro do associado caso não tenha


$QueryCadastrarPasso1 = "
    INSERT INTO tb_relatorios(
        solicitante_evento,
        protocolo_evento,
        natureza_evento,
        cpf_associado
    )VALUES(
        '$SolicitanteSindicancia',
        '$ProtocoloEvento',
        '$NaturezaEvento',
        '$CPFAssociado'
    )
";
//Verificar se já existe o protocolo cadastrado
$QueryDadosCadastrados = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$ProtocoloEvento'";
$ExeQrDadosCadastrados = mysqli_query($connection, $QueryDadosCadastrados);
$RowQrDadosCadastrados = mysqli_num_rows($ExeQrDadosCadastrados);

if($RowQrDadosCadastrados >= 1){
    echo "Os dados desse protocolo já foram cadastrados";
}else{
    $ExeQrCadastrarPasso1 = mysqli_query($connection, $QueryCadastrarPasso1);

    if($ExeQrCadastrarPasso1){
        echo "Dados do passo 1 cadastrados";
    }else{
        echo "Erro ao cadastrar: ". mysqli_error($connection);
    }
}