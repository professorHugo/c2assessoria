<?php
echo "<br><pre>" . 
$QueryBuscarEntrevistados = "
    SELECT * FROM tb_entrevistados
    WHERE protocolo_entrevistados = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
$RowQrBuscarEntrevistados = mysqli_num_rows($ExeQrBuscarEntrevistados);

if( $RowQrBuscarEntrevistados >= 1 ){
    while( $ReturEntrevistados = mysqli_fetch_assoc($ExeQrBuscarEntrevistados) ){
        $IdEntrevistado = $ReturEntrevistados['id_entrevistado'];
        $TipoEntrevistado = $ReturEntrevistados['tipo_entrevistado'];

        "<br>" . $campoEntrevistado = "entrevistado$IdEntrevistado";
        "<br>" . $TextoDiaFatos = "texto_dia_dos_fatos$IdEntrevistado";
        "<br>" . $TextoAcontecimento = "texto_acontecimento$IdEntrevistado";
        echo "<br>Entrevistado $IdEntrevistado: " . $Entrevistado[$IdEntrevistado] = $_POST[$campoEntrevistado] ;
        echo "<br>texto_dia_dos_fatos: " . $Texto[$IdEntrevistado] = $_POST[$TextoDiaFatos];
        echo "<br>Texto Acontecimento: " . $Texto2[$IdEntrevistado] = $_POST[$TextoAcontecimento];
        
        "<br>" . $TipoSabedor = "tipo_sabedor$IdEntrevistado";
        if( isset($_POST[$TipoSabedor]) ){
            echo "<br>O que fazia na região: ";
            "<br>" . $TipoSabedor = "tipo_sabedor$IdEntrevistado";
            $O_Que_Fazia[$IdEntrevistado] = $_POST[$TipoSabedor];
            echo $_POST[$TipoSabedor];
        }else{
            $O_Que_Fazia[$IdEntrevistado] = 1;
        }

        $QueryBuscarDeclaracoes = "
            SELECT * FROM tb_declaracoes
            WHERE protocolo_declaracoes = '$Protocolo' AND entrevistado = '$IdEntrevistado'
        ";
        $ExeQrBuscarDeclaracoes = mysqli_query($connection, $QueryBuscarDeclaracoes);
        $RowQrBuscarDeclaracoes = mysqli_num_rows($ExeQrBuscarDeclaracoes);

        if( $RowQrBuscarDeclaracoes > 0 ){
            echo "
                <br>Declaração já cadastrada para o protocolo <b>$Protocolo</b> 
                com o id: <b>$IdEntrevistado</b>, atualizar a declaração do entrevistado
            ";

            while( $ResDeclaracoes = mysqli_fetch_assoc($ExeQrBuscarDeclaracoes) ){
                $IdDeclaracao = $ResDeclaracoes['id_declaracao'];
                

                echo "<br><pre>" . 
                $QueryUpdateEntrevistado = "
                    UPDATE tb_entrevistados
                    SET
                        declaracao_entrevistado = '$IdDeclaracao'
                    WHERE 
                        protocolo_entrevistados = '$Protocolo' AND
                        id_entrevistado = '$IdEntrevistado'
                ";
                echo "</pre>";
                $ExeQrUpdateEbtrevistado = mysqli_query($connection, $QueryUpdateEntrevistado);
                if( $ExeQrUpdateEbtrevistado ){
                    echo "<br>Entrevistado atualizado com a declaração <b>$IdDeclaracao</b>";
                }else{
                    echo "<br>Erro: " . mysqli_error($connection);
                }
            }
        }else{
            echo "<br>Cadastrar Declaração: ";

            echo "<br><pre>" . 
            $QueryCadastrarDeclaracao = "
                INSERT INTO tb_declaracoes(
                    entrevistado,
                    protocolo_declaracoes,
                    dia_fatos_declaracao,
                    via_publica_declaracao,
                    o_que_fazia_declaracao
                )VALUES(
                    '$IdEntrevistado',
                    '$Protocolo',
                    '$Texto[$IdEntrevistado]',
                    '$Texto2[$IdEntrevistado]',
                    '$O_Que_Fazia[$IdEntrevistado]'
                )
            ";
            echo "</pre>";
            $ExeQrCadastrarDeclaracao = mysqli_query($connection, $QueryCadastrarDeclaracao);
            if( $ExeQrCadastrarDeclaracao ){
                echo "<br>Declaração Cadastrada";

                $QueryBuscarDeclaracoes = "
                    SELECT * FROM tb_declaracoes
                    WHERE protocolo_declaracoes = '$Protocolo' AND entrevistado = '$IdEntrevistado'
                ";
                $ExeQrBuscarDeclaracoes = mysqli_query($connection, $QueryBuscarDeclaracoes);
                $RowQrBuscarDeclaracoes = mysqli_num_rows($ExeQrBuscarDeclaracoes);

                while( $ResDeclaracoes = mysqli_fetch_assoc($ExeQrBuscarDeclaracoes) ){
                    $IdDeclaracao = $ResDeclaracoes['id_declaracao'];
                    
    
                    echo "<br><pre>" . 
                    $QueryUpdateEntrevistado = "
                        UPDATE tb_entrevistados
                        SET
                            declaracao_entrevistado = '$IdDeclaracao'
                        WHERE 
                            protocolo_entrevistados = '$Protocolo' AND
                            id_entrevistado = '$IdEntrevistado'
                    ";
                    echo "</pre>";
                    $ExeQrUpdateEbtrevistado = mysqli_query($connection, $QueryUpdateEntrevistado);
                    if( $ExeQrUpdateEbtrevistado ){
                        echo "<br>Entrevistado atualizado com a declaração <b>$IdDeclaracao</b>";
                    }else{
                        echo "<br>Erro: " . mysqli_error($connection);
                    }
                }

            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }

        }
        echo "<br>";

    }
}