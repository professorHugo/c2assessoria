<?php
echo "<br>Condutor do veículo: " . $CondutorVeiculo = $_POST['condutor_select'];
 "<br>Nome do contudor: " . $NomeCondutor = $_POST['nome_condutor'];
 "<br>Placa do Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
 "<br>Marca do Veículo: " . $MarcaVeiculo = $_POST['marca_veiculo'];
 "<br>Modelo do Veículo: " . $ModeloVeiculo = $_POST['modelo_veiculo'];
 "<br>";
//Dados para reutilização
$Protocolo = $_SESSION['Protocolo']['pr'];
$CPFAssociado = $_SESSION['Protocolo']['cpf'];

//Verificar se o veículo já está cadastrado no sistema
$QueryVerificarPlaca = "SELECT * FROM tb_veiculos WHERE placa_veiculo = '$PlacaVeiculo'";
$ExeQrVerificarPlaca = mysqli_query($connection, $QueryVerificarPlaca);
$RowQrVerificarPlaca = mysqli_num_rows($ExeQrVerificarPlaca);
if($RowQrVerificarPlaca < 1){
    echo "<pre>";
    echo $QueryCadastrarVeiculo = "
        INSERT INTO tb_veiculos
        (
            segurado_veiculo,
            protocolo_evento,
            condutor_veiculo,
            marca_veiculo,
            modelo_veiculo,
            placa_veiculo
        )
        VALUES(
            '$CPFAssociado','$Protocolo',$CondutorVeiculo,'$MarcaVeiculo','$ModeloVeiculo','$PlacaVeiculo'
        )
    ";
    echo "</pre>";

    $ExeQrCadastrarVeiculo = mysqli_query($connection, $QueryCadastrarVeiculo);
    if($ExeQrCadastrarVeiculo){
        echo "Veículo Adicionado ao banco de dados <br>";
    }else{
        echo "Erro ao inserir veículo: ".mysqli_error($connection);
    }
}else{
    echo "Veículo já cadastrado";
}

 "<br>";
 "Horário de Cadastro: ". $Update = date("Y/m/d H:i:s") ;
echo "<br>";

//Validação de condutor já cadastrado
$QueryBuscarCondutorCadastrado = "SELECT * FROM tb_condutores WHERE protocolo_evento = '$Protocolo'";
$ExeQrBuscarCondutorCadastrado = mysqli_query($connection, $QueryBuscarCondutorCadastrado);
$RowQrBuscarCondutorCadastrado = mysqli_num_rows($ExeQrBuscarCondutorCadastrado);
if($RowQrBuscarCondutorCadastrado >= 1){
    echo "Condutor Já cadastrado para esse protocolo";
    while($ResCondutorCadastrado = mysqli_fetch_assoc($ExeQrBuscarCondutorCadastrado)){
        echo "<pre>".
        $QueryInserirPasso2 = "
            UPDATE tb_relatorios SET
                horario_update = '$Update',
                condutor_veiculo = '$CondutorVeiculo', 
                condutor_evento = '$ResCondutorCadastrado[id_condutor]',
                placa_veiculo_evento = '$PlacaVeiculo'
            WHERE protocolo_evento = '$Protocolo'
        ";
        echo "</pre> <br>";
    }

}else{
    echo "<pre>".
    $QueryCadastrarCondutores = "
        INSERT INTO tb_condutores(
            protocolo_evento,
            nome_condutor
        )VALUES(
            '$Protocolo',
            '$NomeCondutor'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarCondutores = mysqli_query($connection, $QueryCadastrarCondutores);
    if($ExeQrCadastrarCondutores >= 1){
        echo "Condutor Cadastrado<br>";
    }else{
        echo "erro: ".mysqli_error($connection);
    }
    $QueryBuscarCondutorCadastrado = "SELECT * FROM tb_condutores WHERE protocolo_evento = '$Protocolo'";
    $ExeQrBuscarCondutorCadastrado = mysqli_query($connection, $QueryBuscarCondutorCadastrado);
    $RowQrBuscarCondutorCadastrado = mysqli_num_rows($ExeQrBuscarCondutorCadastrado);
    while($ResCondutorCadastrado = mysqli_fetch_assoc($ExeQrBuscarCondutorCadastrado)){
        echo "<pre>".
        $QueryInserirPasso2 = "
            UPDATE tb_relatorios SET
                horario_update = '$Update',
                condutor_veiculo = '$CondutorVeiculo', 
                condutor_evento = '$ResCondutorCadastrado[id_condutor]',
                placa_veiculo_evento = '$PlacaVeiculo'
            WHERE protocolo_evento = '$Protocolo'
        ";
        echo "<br>";
    }
    
}


//Verificar se já existe o protocolo cadastrado
$QueryDadosCadastrados = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
$ExeQrDadosCadastrados = mysqli_query($connection, $QueryDadosCadastrados);
$RowQrDadosCadastrados = mysqli_num_rows($ExeQrDadosCadastrados);

if($RowQrDadosCadastrados >= 1){
    $ExeQrInserirPasso2 = mysqli_query($connection, $QueryInserirPasso2);
    if($ExeQrInserirPasso2){
        echo "Passo 3 Inserido no Banco de dados";
    }else{
        echo "Erro: " . mysqli_error($connection);
    }
}
echo "<br>";

//Buscar os veículos que tem o cpf do associado
$QueryBuscarVeiculosAssociado = "SELECT * FROM tb_veiculos WHERE segurado_veiculo = '$CPFAssociado'";
$ExeQrBuscarVeiculosAssociado = mysqli_query($connection, $QueryBuscarVeiculosAssociado);
$RowQrBuscarVeiculosAssociado = mysqli_num_rows($ExeQrBuscarVeiculosAssociado);
if($RowQrBuscarVeiculosAssociado >= 1){
    //Guardar veículos encontrados
    while($RetVeiculosAssociado = mysqli_fetch_assoc($ExeQrBuscarVeiculosAssociado)){
        $id_veiculo_segurado = $RetVeiculosAssociado['id_veiculo'];
        //Atualizar dados do associado
         "<br>
        <pre>";
         $QueryAssociadoAtualizar = "
            UPDATE tb_associados SET
                veiculo_segurado = '$id_veiculo_segurado'                
            WHERE cpf_associado = '$CPFAssociado'
        ";
         "</pre>";
        $ExeQrAssociadoAtualizar = mysqli_query($connection, $QueryAssociadoAtualizar);
        if($ExeQrAssociadoAtualizar){
             "Associado atualizado com o veículo $id_veiculo_segurado";
        }
    }
}