<?php
echo "<br><br><b>Prints</b>";
echo "<br>Mídias Sociais? " . $midiasSociais = $_POST['midias_sociais_associado'];
echo "<br>Pasta do associado: " . $PastaAssociadoDB = $_SESSION['PastaAssociado'];
//Nome do arquivo de upload
// echo "<br>Arquivo Print Associado: " . $_FILES['print_midias_sociais']['name'];

//Se o Associado Fez post nas redes sociais
if($midiasSociais == "Sim"){
    if(is_dir("Docs/".$_SESSION['PastaAssociado']."/")){

        //Se o diretório já existir,
        //Fazer upload-Midias-Sociais para a pasta do cliente
        echo "<br>Já existe o diretório do cliente<br>";
        echo "<br>Diretorio Cliente: " . $PastaAssociado = "Docs/".$_SESSION['PastaAssociado']."/";

        //Definição da $extensao
        if( $_GET['Step'] == 5 ){
            // Guardar a extensão do arquivo na variável
            $extensao = pathinfo( $_FILES['print_midias_sociais']['name'] );
            echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];
            echo "<br>Pasta Upload: " . $target_dir = $PastaAssociado;
            echo "<br>Nome do arquivo para armazenamento: " . 
            $PrintMidiasSociais = "print_midias_sociais_associado".$extensao;

            echo "<br>Arquivo de Destino: " . 
            $target_file = $target_dir . $PrintMidiasSociais;
            if( move_uploaded_file( $_FILES['print_midias_sociais']['tmp_name'], $target_file ) ) {
                echo "
                    <br>O Arquivo <b>$PrintMidiasSociais</b> 
                    foi carregado com sucesso para a pasta <b>$target_dir</b>
                ";
                //Cadastrar a foto no DB
                //Verificar a existência da foto
                echo "<br><pre>" . 
                    $QueryBuscarFotoMidiaSocial = "
                    SELECT * FROM tb_fotos
                    WHERE protocolo_foto = '$Protocolo' AND
                    categoria_foto = 'print_midia_social' AND nome_foto = '$PrintMidiasSociais'
                ";
                echo "</pre>";
                //Verificar a existência da foto
                $ExeQrBuscarFotoMidiaSocial = mysqli_query($connection, $QueryBuscarFotoMidiaSocial);
                $RowQrBuscarFotoMidiaSocial = mysqli_num_rows($ExeQrBuscarFotoMidiaSocial);

                if($RowQrBuscarFotoMidiaSocial < 1){
                    echo "<br><pre>".
                    $QueryCadastrarFotoPrintMidiaSocial = "
                        INSERT INTO tb_fotos(
                            categoria_foto,
                            protocolo_foto,
                            pasta_foto,
                            nome_foto
                        )VALUES(
                            'print_midia_social',
                            '$Protocolo',
                            '$PastaAssociadoDB',
                            '$PrintMidiasSociais'
                        )
                    ";
                    echo "</pre><br>";
                    $ExeQrCadastrarFotoPrintMidiaSocial = mysqli_query($connection, $QueryCadastrarFotoPrintMidiaSocial);
                    if($ExeQrCadastrarFotoPrintMidiaSocial){
                        echo "<br>Foto cadastrada no Banco de dados";
                        while( $ReturnFoto = mysqli_fetch_assoc($ExeQrBuscarFotoMidiaSocial) ){
                            echo "<br>Id da foto: " . $IdFoto = $ReturnFoto['id_foto'];
                            echo "<br><pre>".
                            $QueryUpdateRelatorio = "
                                UPDATE tb_relatorios
                                SET 
                                    midias_sociais_associado = '$IdFoto',
                                    status_relatorio = '$_GET[Step]'
                                WHERE protocolo_evento = '$Protocolo'
                            ";
                            echo "</pre>";
                            $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
                            if( $ExeQrUpdateRelatorio ){
                                echo "<br>Foto de mídia do associado atualizado";
                            }else{
                                echo "<br>Erro: " . mysqli_error($connection);
                            }
                        }

                    }else{
                        echo "Erro: ".mysqli_error($connection);
                    }
                }
                    // else{
                    //     echo "<br>Foto Já cadastrada no banco de dados";
                    //     //Atualizar o Relatório com a foto
                    //     while( $ReturnFoto = mysqli_fetch_assoc($ExeQrBuscarFotoMidiaSocial) ){
                    //         echo "<br>Id da foto: " . $IdFoto = $ReturnFoto['id_foto'];
                    //         echo "<br><pre>".
                    //         $QueryUpdateRelatorio = "
                    //             UPDATE tb_relatorios
                    //                 SET midias_sociais_associado = '$IdFoto'
                    //             WHERE protocolo_evento = '$Protocolo'
                    //         ";
                    //         echo "</pre>";
                    //         $ExeQrUpdateRelatorio = mysqli_query($connection, $QueryUpdateRelatorio);
                    //         if( $ExeQrUpdateRelatorio ){
                    //             echo "<br>Foto de mídia do associado atualizado";
                    //         }else{
                    //             echo "<br>Erro: " . mysqli_error($connection);
                    //         }
                    //     }
                    // }
            }else{
                echo "<br>Ocorreu um problema ao carregar o arquivo";
            }
            
        }



    }else{

        //Criar Pasta do Associado caso não exista
        echo "<br>Criar Pasta Associado: ".
        $PastaAssociado = mkdir("Docs/".$_SESSION['PastaAssociado']."/", 777);

        //Fazer Upload-Midias-Sociais para a pasta do associado após a criação
        if($PastaAssociado = true){

        }else{
                 "<br>Erro, diretório não criado!";
        }

    }
}