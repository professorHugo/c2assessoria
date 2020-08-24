<?php
if( $ProcedenteVeiculo != "Procedente_Nao_Apresentado" ){
    echo "<br>Foto Procedente: " . $_FILES['foto_procedente']['name'];
    //Extensão do arquivo
    $extensao = pathinfo( $_FILES['foto_procedente']['name'] );
    $extensao = "." . $extensao['extension'];
    //Nome do arquivo
    echo "<br>Nome do arquivo: " . 
        $PrintProcedente = $ProcedenteVeiculo.$extensao;
    
        echo "<br>Destino Upload: " . 
        $target_file = $PastaAssociado . "/" . $PrintProcedente;
    if( move_uploaded_file($_FILES['foto_procedente']['tmp_name'], $target_file) ){
        echo "<br>Arquivo <b> $PrintProcedente </b> carregado para a pasta <b>$PastaAssociado</b>";
        
        //Cadastrar No banco de dados
        echo "<br><pre>" . 
        $BuscarFotosPrecedentes = "
            SELECT * FROM tb_fotos 
            WHERE categoria_foto = 'procedentes' AND protocolo_foto = '$Protocolo'
        ";
        $ExeBuscarFotosPrecedentes = mysqli_query($connection, $BuscarFotosPrecedentes);
        $RowBuscarFotosPrecedentes = mysqli_num_rows($ExeBuscarFotosPrecedentes);
        if( $RowBuscarFotosPrecedentes >= 1 ){
            echo "<br>Foto do procedente já cadastrada para o protocolo <b>$Protocolo</b>, atualizar veículo";
            while($ResProcedente = mysqli_fetch_assoc($ExeBuscarFotosPrecedentes)){
                $IdProcedente = $ResProcedente['id_foto'];
            }
            //UpdateVeículo
            echo "<br><pre>" . 
            $QueryUpdateVeiculo = "
                UPDATE tb_veiculos
                SET
                    procedente_veiculo = '$IdProcedente'
                WHERE placa_veiculo = '$PlacaVeiculo'
            ";
            echo "</pre>";
    
            $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
            if( $ExeQrUpdateVeiculo ){
            echo "
                <br>Foto do procedente atualizado para <b>$IdProcedente</b> 
                no veículo de placa <b>$PlacaVeiculo</b>
            ";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }else{
            echo "<br><pre>" . 
            $QueryCadastrarProcedente = "
                INSERT INTO tb_fotos(
                    categoria_foto,
                    protocolo_foto,
                    pasta_foto,
                    nome_foto
                )VALUES(
                    'procedentes',
                    '$Protocolo',
                    '$CPFAssociado',
                    '$PrintProcedente'
                )
            ";
            echo "</pre>";
            $ExeQrCadastrarProcedente = mysqli_query($connection, $QueryCadastrarProcedente);
            if( $ExeQrCadastrarProcedente ){
                echo "<br>Foto do procedente cadastrada";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }

        //Update do procedente do veículo
        echo "<br><pre>" . 
        $BuscarFotosPrecedentes = "
            SELECT * FROM tb_fotos 
            WHERE categoria_foto = 'procedentes' AND protocolo_foto = '$Protocolo'
        ";
        echo "</pre>";
        $ExeBuscarFotosPrecedentes = mysqli_query($connection, $BuscarFotosPrecedentes);
        $RowBuscarFotosPrecedentes = mysqli_num_rows($ExeBuscarFotosPrecedentes);
        while($ResProcedente = mysqli_fetch_assoc($ExeBuscarFotosPrecedentes)){
            $IdProcedente = $ResProcedente['id_foto'];
        }
        //UpdateVeículo
        echo "<br><pre>" . 
        $QueryUpdateVeiculo = "
            UPDATE tb_veiculos
            SET
                procedente_veiculo = '$IdProcedente'
            WHERE placa_veiculo = '$PlacaVeiculo'
        ";
        echo "</pre>";

        $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
        if( $ExeQrUpdateVeiculo ){
        echo "
            <br>Foto do procedente atualizado para <b>$IdProcedente</b> 
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
            procedente_veiculo = 1
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