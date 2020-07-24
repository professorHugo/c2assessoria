<?php
//Cadastrar Associado caso seja novo
if(isset($_POST['novo_associado'])){
    //Ver se já foi cadastrado no refresh
    $QueryVerNovoAssociado = "SELECT * FROM tb_associados WHERE cpf_associado = '$cpfAssociado'";
    $ExeQrVerNovoAssociado = mysqli_query($connection, $QueryVerNovoAssociado);
    $RowQrVerNovoAssociado = mysqli_num_rows($ExeQrVerNovoAssociado);
    if($RowQrVerNovoAssociado < 1){
    echo "<pre>" . 
        $QueryCadastrarNovoAssociado = "
            INSERT INTO tb_associados(
                cpf_associado,seguradora_associado,nome_associado
            )VALUES(
                '$cpfAssociado','$solicitante','$nomeAssociado'
            )";
    echo "</pre>";
        $ExeQrCadastrarNovoAssociado = mysqli_query($connection, $QueryCadastrarNovoAssociado);
        if($ExeQrCadastrarNovoAssociado){
            echo "Associado $nomeAssociado cadastrado com dados básicos";
        }else{
            echo "Erro: ".mysqli_error($connection);
        }
    }else{
        echo "<br>O associado $nomeAssociado já foi cadastrado no banco de dados";
    }
    
}

echo "<br>Solicitante: ". $SolicitanteSindicancia = $_POST['solicitante'];
echo "<br>Protocolo: ". $ProtocoloEvento = $_POST['protocolo_evento'];
echo "<br>Natureza Evento: ".$NaturezaEvento = $_POST['natureza_evento'];
echo "<br>CPF Associado: ".$CPFAssociado = $_POST['cpf_associado'];
echo "<br>Protocolo: " . $_SESSION['Protocolo']['pr'] = $ProtocoloEvento;
echo "<br> CPF Segurado: " . $_SESSION['Protocolo']['cpf'] = $CPFAssociado;
 


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
    echo "<br>Os dados desse protocolo já foram cadastrados";
}else{
    $ExeQrCadastrarPasso1 = mysqli_query($connection, $QueryCadastrarPasso1);

    if($ExeQrCadastrarPasso1){
        echo "Dados do passo 1 cadastrados";
    }else{
        echo "Erro ao cadastrar: ". mysqli_error($connection);
    }
}

//Cadastrar Proprietario Temporário do Veículo Segurado
$QueryBuscarAssociado = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPFAssociado'";
$ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
$RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
if($RowQrBuscarAssociado >= 1){
    //Buscar cadastro do proprietário do veículo
    echo "<br>Buscar Proprietario do protocolo:
        <pre>" .
        $QueryBuscarProprietario = "
            SELECT * FROM tb_proprietarios 
            WHERE protocolo_evento = '$ProtocoloEvento'
        ";
    echo "</pre>";
    $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
    mysqli_num_rows($ExeQrBuscarAssociado);
    if(mysqli_num_rows($ExeQrBuscarProprietario) > 0){
        echo "<br>Proprietário já cadastrado";
    }else{
        while($Associado = mysqli_fetch_assoc($ExeQrBuscarAssociado)){
            $nomeAssociado = $Associado['nome_associado'];
            echo "<pre>".
            $QueryCadastrarProprietario = "
                INSERT INTO tb_proprietarios(
                    protocolo_evento,
                    nome_proprietario
                )VALUES(
                    '$ProtocoloEvento',
                    '$nomeAssociado'
                )
            ";
            echo "</pre><br>";
            $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);
            if($ExeQrCadastrarProprietario){
                echo "Proprietario do veículo segurado cadastrado";
            }else{
                echo "erro: ". mysqli_error($connection);
            }
        }
        
    }
}