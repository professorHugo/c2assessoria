<?php
echo "<br>Midias sociais condutor: " . $PrintMidiasSociais = $_POST['midias_sociais_condutor'];

if( $PrintMidiasSociais == "Sim" ){
    "<br>CPF do associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
    if( is_dir("Docs/".$_SESSION['PastaAssociado']."/") ){
        echo "<br>Pasta de arquivos do associado: " . $PastaAssociado = "Docs/" . $CPFAssociado;
        echo "<br>Sessao Condutor: " . $_SESSION['CondutorVeiculo'];
        if( $_SESSION['CondutorVeiculo'] == 2 ){
            //Extensão do arquivo
            $extensao = pathinfo( $_FILES['print_midias_sociais_condutor']['name'] );
            $extensao = "." . $extensao['extension'];
            //Nome do arquivo
            echo "<br>Nome do arquivo: " . 
                $PrintMidiasSociaisFile = "print_midias_sociais_condutor".$extensao;
                $target_file = $PastaAssociado . "/" . $PrintMidiasSociaisFile;
            if( move_uploaded_file($_FILES['print_midias_sociais_condutor']['tmp_name'], $target_file) ){
                echo "<br>Arquivo $PrintMidiasSociaisFile carregado para a pasta $PastaAssociado";                
            }else{
                echo "<br>Erro";
            }
        }

    }
}