<?php
if($_SESSION['CadastroSindicancia2'][0] == 1){
     "<br>";
     "Mídias Sociais Associado? " . $midiasSociais = $_POST['midias_sociais_associado'];
     "<br>";
}else{
     "<br>";
     "Mídias Sociais Condutor? " . $midiasSociais = $_POST['midias_sociais_condutor'];
     "<br>";
}

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