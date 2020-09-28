<h3>Cadastro dos dados:</h3>
<?php
echo "<br>Nome do condutor: " . $NomeCondutor;
echo "<br>Profissão do condutor: " . $ProfissaoCondutor;
echo "<br>Estado civil do condutor: " . $CivilCondutor;
echo "<br>Vínculo com associado: " . $VinculoAssociado;
echo "<br>CPF Associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br>CEP Condutor: " . $CEPCondutor = $_POST['cep_condutor'];
echo "<br>Endereço: " . $EnderecoCondutor = $_POST['endereco_condutor'];
echo "<br>Número: " . $NumeroEndCondutor = $_POST['numero_condutor'];
$LogadouroCondutor = $EnderecoCondutor."-".$NumeroEndCondutor;
echo "<br>Bairro: " . $BairroCondutor = $_POST['bairro_condutor'];
echo "<br>Cidade: " . $CidadeCondutor = $_POST['cidade_condutor'];
echo "<br>UF: " . $UFCondutor = $_POST['estado_condutor'];


//Update do condutor com os dados e os veículos
echo "<br><pre>" . 
$QueryUpdateCondutorTerceiro = "
    UPDATE tb_condutores
    SET
        civil_condutor = '$CivilCondutor',
        profissao_condutor = '$ProfissaoCondutor',
        vinculo_associado = '$VinculoAssociado',
        civil_condutor = '$CivilCondutor',
        cep_condutor = '$CEPCondutor',
        endereco_condutor = '$LogadouroCondutor',
        bairro_condutor = '$BairroCondutor',
        cidade_condutor = '$CidadeCondutor',
        estado_condutor = '$UFCondutor'
    WHERE nome_condutor = '$NomeCondutor' AND protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateCondutorTerceiro = mysqli_query($connection, $QueryUpdateCondutorTerceiro);
if( $ExeQrUpdateCondutorTerceiro ){
    echo "<br>Dados do condutor $NomeCondutor atualizados";
}


//Verificar se esse condutor já tem cadastro como proprietário
echo "<br><pre>" . 
$QueryBuscarProprietarioTerceiro = "
    SELECT * FROM tb_proprietarios
    WHERE protocolo_evento = '$Protocolo' AND nome_proprietario = '$NomeCondutor'
";
echo "</pre>";
$ExeQrBuscarProprietarioTerceiro = mysqli_query($connection, $QueryBuscarProprietarioTerceiro);
$RowQrBuscarProprietarioTerceiro = mysqli_num_rows($ExeQrBuscarProprietarioTerceiro);
if( $RowQrBuscarProprietarioTerceiro < 1 ){
    //Cadastrar o condutor terceiro como proprietário de veículos
    echo "<br><pre>".
    $QueryCadastrarProprietarioTerceiro = "
        INSERT INTO tb_proprietarios (
            protocolo_evento,
            nome_proprietario
        )VALUES(
            '$Protocolo',
            '$NomeCondutor'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarProprietarioTerceiro = mysqli_query($connection, $QueryCadastrarProprietarioTerceiro);
    if($ExeQrCadastrarProprietarioTerceiro){
        echo "<br>Proprietário $NomeCondutor cadastrado";
    }else{
        echo "<br>Proprietário não cadastrado, erro: " . mysqli_error($connection);
    }
}else{
    echo "O Proprietário $NomeCondutor já está cadastrado";
}


echo "<br>Condutor tem veículo próprio? ";
if( $VeiculoProprio == 1 ){
    echo "Sim";
}else{
    echo "Não";
}

if( $VeiculoProprio == 1 ){
    echo "<br>Quantidade: " . $VeiculosQuantidade;
    for( $count = 1 ; $count <= $VeiculosQuantidade; $count++ ){
        //Contador dos veículos
        "<br>Placa: " . $Placa = "placa_veiculo" . $count . "_condutor";
        "<br>Marca: " . $Marca = "marca_veiculo" . $count . "_condutor";
        "<br>Modelo: " . $Modelo = "modelo_veiculo" . $count . "_condutor";
        "<br>Seguro: " . $Seguro = "seguro_veiculo" . $count . "_condutor";

        switch( $count ){
            case $count :
                echo "<br><b>Veículo $count</b>:";
                echo "<br>Placa: " . $PlacaVeiculo.$Placa = $_POST[$Placa];
                echo "<br>Marca: " . $MarcaVeiculo.$Marca = $_POST[$Marca];
                echo "<br>Modelo: " . $ModeloVeiculo.$Modelo = $_POST[$Modelo];
                echo "<br>Seguro: " . $SeguroVeiculo.$Seguro = $_POST[$Seguro];
                echo "<hr>";
            break;
        }

        //Buscar o proprietário para vincular ao veículo cadastrado
        echo "<br><pre>" . 
        $QueryBuscarProprietarioTerceiro2 = "
            SELECT * FROM tb_proprietarios
            WHERE protocolo_evento = '$Protocolo' AND nome_proprietario = '$NomeCondutor'
        ";
        echo "</pre>";
        $ExeQrBuscarProprietarioTerceiro2 = mysqli_query($connection, $QueryBuscarProprietarioTerceiro2);
        $RowQrBuscarProprietarioTerceiro2 = mysqli_num_rows($ExeQrBuscarProprietarioTerceiro2);

        if( $RowQrBuscarProprietarioTerceiro2 > 0 ){
            while($ReturnProprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarioTerceiro2)){
                echo "<br>Id: " . $IdProprietario = $ReturnProprietario['id_proprietario'];
            }
        }
        //Cadastrar os veículos do condutor terceiro
        echo "<br><pre>" . 
        $QueryCadastrarVeiculosTerceiro = "
            INSERT INTO tb_veiculos(
                segurado_veiculo,
                proprietario_veiculo,
                protocolo_evento,
                marca_veiculo,
                modelo_veiculo,
                placa_veiculo,
                seguro_veiculo
            )VALUES(
                '$CPFAssociado',
                '$IdProprietario',
                '$Protocolo',
                '$Marca',
                '$Modelo',
                '$Placa',
                '$Seguro'

            )
        ";
        echo "</pre>";
        $ExeQrBuscarProprietarioTerceiro = mysqli_query(
            $connection, $QueryCadastrarVeiculosTerceiro
        );

        if( $ExeQrBuscarProprietarioTerceiro ){
            echo "<br>Veículo $count cadastrado";
        }else{
            echo "<br>Erro ao cadastrar o veículo $count : " . mysqli_error($connection);
        }

        //Update dos veículos do condutor
        echo "<br><pre>" . 
        $QueryBuscarCodutorTerceiro = "
            SELECT * FROM tb_condutores
            WHERE nome_condutor = '$NomeCondutor' AND protocolo_evento = '$Protocolo'
        ";
        echo "</pre>";
        $ExeQrBuscarCodutorTerceiro = mysqli_query($connection, $QueryBuscarCodutorTerceiro);
        $RowQrBuscarCodutorTerceiro = mysqli_num_rows($ExeQrBuscarCodutorTerceiro);
        if( $RowQrBuscarCodutorTerceiro >= 1 ){
            while($ReturnCondutor = mysqli_fetch_assoc($ExeQrBuscarCodutorTerceiro)){
                echo "<br>ID Condutor: " . $IdCondutor = $ReturnCondutor['id_condutor'];
                
                //Buscar os veículos do evento
                echo "<br><pre>" . 
                $QueryBuscarVeiculosCondutor = "
                    SELECT * FROM tb_veiculos
                    WHERE protocolo_evento = '$Protocolo' AND proprietario_veiculo = '$IdProprietario'
                ";
                echo "</pre>";
                $ExeQrBuscarVeiculosCondutor = mysqli_query($connection, $QueryBuscarVeiculosCondutor);
                if( mysqli_num_rows($ExeQrBuscarVeiculosCondutor) >= 1 ){
                    while( $ReturnVeiculo = mysqli_fetch_assoc($ExeQrBuscarVeiculosCondutor) ){
                        echo "<br>" . $IdVeiculo = $ReturnVeiculo['id_veiculo'];
                    }
                }
                echo "<br>" . $Veiculo_Update = "veiculo".$count."_condutor";
                echo "<br><pre>" . 
                $QueryUpdateVeiculoCondutor = "
                    UPDATE tb_condutores 
                    SET
                        $Veiculo_Update = '$IdVeiculo'
                    WHERE nome_condutor = '$NomeCondutor' AND protocolo_evento = '$Protocolo'
                ";
                echo "</pre>";

                $ExeQrUpdateVeiculoCondutor = mysqli_query($connection, $QueryUpdateVeiculoCondutor);
                if( $ExeQrUpdateVeiculoCondutor ){
                    echo "<br>$Veiculo_Update atualizado com a id: $IdVeiculo";
                }else{
                    echo "<br>Erro ao atualizar o $Veiculo_Update : " . mysqli_error($connection);
                }
            }
        }
        
    }
}else{
    $VeiculosQuantidade = 3;

    for( $count = 1 ; $count <= $VeiculosQuantidade; $count++ ){
        //Contador dos veículos
        "<br>Placa: " . $Placa = "placa_veiculo" . $count . "_condutor";
        "<br>Marca: " . $Marca = "marca_veiculo" . $count . "_condutor";
        "<br>Modelo: " . $Modelo = "modelo_veiculo" . $count . "_condutor";
        "<br>Seguro: " . $Seguro = "seguro_veiculo" . $count . "_condutor";

        switch( $count ){
            case $count :
                echo "<br><b>Veículo $count</b>:";
                echo "<br>Placa: " . $PlacaVeiculo.$Placa = "NULL";
                echo "<br>Marca: " . $MarcaVeiculo1.$Marca = "NULL";
                echo "<br>Modelo: " . $ModeloVeiculo1.$Modelo = "NULL";
                echo "<br>Seguro: " . $SeguroVeiculo1.$Seguro = "NULL";
                echo "<hr>";
            break;
        }
    }
}

//Cadastrar a foto no banco de dados
echo "<br><pre>" . 
$QueryCadastrarPrintCondutor = "
    INSERT INTO tb_fotos(
        categoria_foto,
        protocolo_foto,
        pasta_foto,
        nome_foto
    )VALUES(
        'print_midia_social_condutor',
        '$Protocolo',
        '$CPFAssociado',
        '$PrintMidiasSociaisFile'
    )
";
$ExeQrCadastrarPrintCondutor = mysqli_query($connection, $QueryCadastrarPrintCondutor);
if( $ExeQrCadastrarPrintCondutor ){
    echo "<br>Print do condutor cadastrado.";
}else{
    echo "<br>Erro ao cadastrar o Print: " . mysqli_error($connection);
}