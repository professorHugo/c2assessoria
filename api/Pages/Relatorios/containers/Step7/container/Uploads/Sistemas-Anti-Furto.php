<?php
if( $SistemaAntiFurto != "Sistema_Anti_Furto_N_Disponivel" ){
    echo "<br>Foto Chave: " . $_FILES['sistema_anti_furto']['name'];
    //Extensão do arquivo
    $extensao = pathinfo( $_FILES['foto_sistema']['name'] );
    $extensao = "." . $extensao['extension'];
    //Nome do arquivo
    echo "<br>Nome do arquivo: " . 
        $FotoSistemaAFArquivo = $SistemaAntiFurto.$extensao;
    
        echo "<br>Destino Upload: " . 
        $target_file = $PastaAssociado . "/" . $FotoSistemaAFArquivo;
    if( move_uploaded_file($_FILES['foto_sistema']['tmp_name'], $target_file) ){
        echo "<br>Arquivo <b> $FotoSistemaAFArquivo </b> carregado para a pasta <b>$PastaAssociado</b>";
        
        //Cadastrar No banco de dados
        echo "<br><pre>" . 
        $BuscarFotoSisAF = "
            SELECT * FROM tb_fotos 
            WHERE categoria_foto = 'foto_sis_af' AND protocolo_foto = '$Protocolo'
        ";
        echo "</pre>";
        $ExeBuscarFotoSisAF = mysqli_query($connection, $BuscarFotoSisAF);
        $RowBuscarFotoSisAF = mysqli_num_rows($ExeBuscarFotoSisAF);
        if( $RowBuscarFotoSisAF >= 1 ){
            echo "<br>Foto do Sistema Anti-Furto já cadastrada para o protocolo <b>$Protocolo</b>, atualizar veículo";
            while($ReSisAf = mysqli_fetch_assoc($ExeBuscarFotoSisAF)){
                $IdSisAf = $ReSisAf['id_foto'];
            }
            //UpdateVeículo
            echo "<br><pre>" . 
            $QueryUpdateVeiculo = "
                UPDATE tb_veiculos
                SET
                    sistema_anti_furto = '$IdSisAf'
                WHERE placa_veiculo = '$PlacaVeiculo'
            ";
            echo "</pre>";
    
            $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
            if( $ExeQrUpdateVeiculo ){
            echo "
                <br>Foto do Sistema Anti-Furto atualizado para <b>$IdSisAf</b> 
                no veículo de placa <b>$PlacaVeiculo</b>
            ";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }else{
            echo "<br><pre>" . 
            $QueryCadastrarSysAf = "
                INSERT INTO tb_fotos(
                    categoria_foto,
                    protocolo_foto,
                    pasta_foto,
                    nome_foto
                )VALUES(
                    'foto_sis_af',
                    '$Protocolo',
                    '$CPFAssociado',
                    '$FotoSistemaAFArquivo'
                )
            ";
            echo "</pre>";
            $ExeQrCadastrarSysAf = mysqli_query($connection, $QueryCadastrarSysAf);
            if( $ExeQrCadastrarSysAf ){
                echo "<br>Foto do Sistema Anti-Furto cadastrada";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }

        //Update das chaves do veículo
        echo "<br><pre>" . 
        $BuscarFotoSisAF = "
            SELECT * FROM tb_fotos 
            WHERE categoria_foto = 'foto_sis_af' AND protocolo_foto = '$Protocolo'
        ";
        echo "</pre>";
        $ExeBuscarFotoSisAF = mysqli_query($connection, $BuscarFotoSisAF);
        $RowBuscarFotoSisAF = mysqli_num_rows($ExeBuscarFotoSisAF);
        while($ReSisAf = mysqli_fetch_assoc($ExeBuscarFotoSisAF)){
            $IdSisAf = $ReSisAf['id_foto'];
        }
        //UpdateVeículo
        echo "<br><pre>" . 
        $QueryUpdateVeiculo = "
            UPDATE tb_veiculos
            SET
                sistema_anti_furto = '$IdSisAf'
            WHERE placa_veiculo = '$PlacaVeiculo'
        ";
        echo "</pre>";

        $ExeQrUpdateVeiculo = mysqli_query($connection, $QueryUpdateVeiculo);
        if( $ExeQrUpdateVeiculo ){
        echo "
            <br>Foto do Sistema Anti-Furto atualizado para <b>$IdSisAf</b> 
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
            sistema_anti_furto = 1
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