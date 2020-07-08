<?php
"Civil Condutor: " . $civil_condutor = $_POST['estado_civil_condutor'];
 "<br>";
 "profissao_condutor: ". $profissao_condutor = $_POST['profissao_condutor'];
 "<br>";
 "veiculo_proprio: ".$outro_veiculo  = $_POST['veiculo_proprio'];
 "<br>";
 "veiculos_quantidade: ".$veiculos_quantidade = $_POST['veiculos_quantidade'];
 "<br>";

if($outro_veiculo  == 1){

     $placa_veiculo1 = $_POST['placa_veiculo1_condutor'];
     "<br>";
     $marca_veiculo1 = $_POST['marca_veiculo1_condutor'];
     "<br>";
     $modelo_veiculo1 = $_POST['modelo_veiculo1_condutor'];
     "<br>";
     $seguro_veiculo1 = $_POST['seguro_veiculo1_condutor'];
     "<hr>";
     $placa_veiculo2 = $_POST['placa_veiculo2_condutor'];
     "<br>";
     $marca_veiculo2 = $_POST['marca_veiculo2_condutor'];
     "<br>";
     $modelo_veiculo2 = $_POST['modelo_veiculo2_condutor'];
     "<br>";
     $seguro_veiculo2 = $_POST['seguro_veiculo2_condutor'];
     "<hr>"; $placa_veiculo3 = $_POST['placa_veiculo3_condutor'];
     "<br>";
     $marca_veiculo3 = $_POST['marca_veiculo3_condutor'];
     "<br>";
     $modelo_veiculo3 = $_POST['modelo_veiculo3_condutor'];
     "<br>";
     $seguro_veiculo3 = $_POST['seguro_veiculo3_condutor'];
 "<hr>";
}else{
     $placa_veiculo1 = 'null';
     "<br>";
     $marca_veiculo1 = 'null';
     "<br>";
     $modelo_veiculo1 = 'null';
     "<br>";
     $seguro_veiculo1 = 'null';
     "<hr>"; $placa_veiculo2 = 'null';
     "<br>";
     $marca_veiculo2 = 'null';
     "<br>";
     $modelo_veiculo2 = 'null';
     "<br>";
     $seguro_veiculo2 = 'null';
     "<hr>"; $placa_veiculo3 = 'null';
     "<br>";
     $marca_veiculo3 = 'null';
     "<br>";
     $modelo_veiculo3 = 'null';
     "<br>";
     $seguro_veiculo3 = 'null';
     "<hr>";
}

 "<br>";
 "Nome do Condutor: ". $nome_condutor = $_SESSION['CadastroSindicancia2'][1];
 "<br>";
 "Vínculo: " . $vinculo_associado = $_POST['vinculo_associado'];
 "<br>";

 "midias_sociais_condutor: " . $printMidiasSociais = $_POST['midias_sociais_condutor'];
 "<br>";

if($printMidiasSociais == "Sim"){

    if(!is_dir("files/".$_SESSION['CadastroSindicancia1'][5]."/")){
        // Criar o Diretório do Cliente
        $PastaAssociado = mkdir("files/".$_SESSION['CadastroSindicancia1'][5]."/", 0777);

        if($PastaAssociado == true){
            include_once "./pages/Relatorios/resource/Upload-Midias-Sociais.php";
        }else{
             "erro, não foi criada a pasta do associado";
        }
    }else{
        //Fazer o upload
         "Pasta do Associado: " . $PastaAssociado = "files/".$_SESSION['CadastroSindicancia1'][5]."/";
        include_once "./pages/Relatorios/resource/Upload-Midias-Sociais.php";
    }

}
 "<br>";
 "print_midias_sociais: " . $print_midias_sociais_condutor = $_FILES['print_midias_sociais_condutor']['name'];