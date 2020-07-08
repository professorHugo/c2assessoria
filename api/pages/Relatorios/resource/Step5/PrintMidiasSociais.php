<?php

 "<br>";
 "Mídias Sociais? " . $midiasSociais = $_POST['midias_sociais_associado'];
 "<br>";
if($midiasSociais == "Sim"){
    if(!is_dir("files/".$_SESSION['CadastroSindicancia1'][5]."/")){
        //Criar Pasta do Associado
        "Pasta do Cliente: ".$PastaAssociado = mkdir("files/".$_SESSION['CadastroSindicancia1'][5]."/", 777);
        "<br>";
        "<br>";
        //Fazer Upload-Midias-Sociais para a pasta do associado
        if($PastaAssociado = true){
            include_once "./pages/Relatorios/resource/Upload-Midias-Sociais.php";
        }else{
                 "erro";
        }
    }else{
        //Fazer upload-Midias-Sociais para a pasta do cliente]
        "Já existe o diretório do cliente<br>";
        "Diretorio Cliente: " . $PastaAssociado = "files/".$_SESSION['CadastroSindicancia1'][5]."/";
        "<br>";
        include_once "./pages/Relatorios/resource/Upload-Midias-Sociais.php";
    }
}