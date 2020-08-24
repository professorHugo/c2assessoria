<?php
if( $FotoChaves != "Chaves_Nao_apresentado" ){
    echo "<br>Foto Chave: " . $_FILES['foto_chaves_apresentadas']['name'];
    //Extensão do arquivo
    $extensao = pathinfo( $_FILES['foto_chaves_apresentadas']['name'] );
    $extensao = "." . $extensao['extension'];
    //Nome do arquivo
    echo "<br>Nome do arquivo: " . 
    $FotoChaveArquivo = $FotoChaves.$extensao;

    echo "<br>Destino Upload: " . 
    $target_file = $PastaAssociado . "/" . $FotoChaveArquivo;
    if( move_uploaded_file($_FILES['foto_chaves_apresentadas']['tmp_name'], $target_file) ){
        echo "<br>Arquivo <b> $FotoChaveArquivo </b> carregado para a pasta <b>$PastaAssociado</b>";
        
        //Cadastrar No banco de dados
        echo "<br><pre>" . 
        $BuscarFotosChaves = "
            SELECT * FROM tb_fotos 
            WHERE categoria_foto = 'foto_chaves' AND protocolo_foto = '$Protocolo'
        ";
        $ExeBuscarFotosChaves = mysqli_query($connection, $BuscarFotosChaves);
        $RowBuscarFotosChaves = mysqli_num_rows($ExeBuscarFotosChaves);
        if( $RowBuscarFotosChaves >= 1 ){
            echo "<br>Foto da chave já cadastrada para o protocolo <b>$Protocolo</b>, atualizar veículo";
            while($ResChave = mysqli_fetch_assoc($ExeBuscarFotosChaves)){
                $IdChave = $ResChave['id_foto'];
            }
            //UpdateVeículo
            echo "<br><pre>" . 
            $QueryUpdateVeiculo = "
                UPDATE tb_veiculos
                SET
                    chaves_apresentadas_veiculo = '$IdChave'
                WHERE placa_veiculo = '$PlacaVeiculo'
            ";
            echo "</pre>";
    
            $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
            if( $ExeQrUpdateVeiculo ){
            echo "
                <br>Foto da chave atualizado para <b>$IdChave</b> 
                no veículo de placa <b>$PlacaVeiculo</b>
            ";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }else{
            echo "<br><pre>" . 
            $QueryCadastrarChave = "
                INSERT INTO tb_fotos(
                    categoria_foto,
                    protocolo_foto,
                    pasta_foto,
                    nome_foto
                )VALUES(
                    'foto_chaves',
                    '$Protocolo',
                    '$CPFAssociado',
                    '$FotoChaveArquivo'
                )
            ";
            echo "</pre>";
            $ExeQrCadastrarProcedente = mysqli_query($connection, $QueryCadastrarChave);
            if( $ExeQrCadastrarProcedente ){
                echo "<br>Foto da chave cadastrada";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }

        //Update das chaves do veículo
        echo "<br><pre>" . 
        $BuscarFotosChaves = "
            SELECT * FROM tb_fotos 
            WHERE categoria_foto = 'foto_chaves' AND protocolo_foto = '$Protocolo'
        ";
        echo "</pre>";
        $ExeBuscarFotosChaves = mysqli_query($connection, $BuscarFotosChaves);
        $RowBuscarFotosChaves = mysqli_num_rows($ExeBuscarFotosChaves);
        while($ResChave = mysqli_fetch_assoc($ExeBuscarFotosChaves)){
            $IdChave = $ResChave['id_foto'];
        }
        //UpdateVeículo
        echo "<br><pre>" . 
        $QueryUpdateVeiculo = "
            UPDATE tb_veiculos
            SET
                chaves_apresentadas_veiculo = '$IdChave'
            WHERE placa_veiculo = '$PlacaVeiculo'
        ";
        echo "</pre>";

        $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
        if( $ExeQrUpdateVeiculo ){
        echo "
            <br>Foto da chave atualizado para <b>$IdChave</b> 
            no veículo de placa <b>$PlacaVeiculo</b>
        ";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }

    }else{
        echo "<br>Erro";
    }
}else{
    //Cadastrar como procedente não apresentado
    //UpdateVeículo
    echo "<br><pre>" . 
    $QueryUpdateVeiculo = "
        UPDATE tb_veiculos
        SET
            chaves_apresentadas_veiculo = 1
        WHERE placa_veiculo = '$PlacaVeiculo'
    ";
    echo "</pre>";

    $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
    if( $ExeQrUpdateVeiculo ){
    echo "
        <br>Foto do procedente atualizado para <b>1</b> 
        no veículo de placa <b>$PlacaVeiculo</b>
    ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}