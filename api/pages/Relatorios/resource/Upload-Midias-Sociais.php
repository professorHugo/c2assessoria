<?php
 "<br>";
// pasta que vai ser feito o upload do arquivo
 "Pasta: " . $target_dir = $PastaAssociado ;
 "<br>";
if($_GET['Step'] == 5){
    $extensao = pathinfo($_FILES['print_midias_sociais']['name']);
    $extensao = "." . $extensao['extension'];
}elseif($_GET['Step'] == 6){
    if($_SESSION['CadastroSindicancia2'][0] == 1){
        $extensao = pathinfo($_FILES['print_midias_sociais']['name']);
        $extensao = "." . $extensao['extension'];
    }else{
        $extensao = pathinfo($_FILES['print_midias_sociais_condutor']['name']);
        $extensao = "." . $extensao['extension'];
    } 
}


if($_GET['Step'] == 5){
    $printMidiasSociais = "print_midias_sociais_associado".$extensao;
}elseif($_GET['Step'] == 6){
    if($_SESSION['CadastroSindicancia2'][0] == 1){
    $printMidiasSociais = "print_midias_sociais_associado".$extensao;
    }else{
        $printMidiasSociaisCondutor = "print_midias_sociais_condutor" . $extensao;
    }
}


"<br>";

if($_GET['Step'] == 5){
     "Arquivo a ser guardado: " . $target_file = $target_dir . $printMidiasSociais;
     "<br>";
}elseif($_GET['Step'] == 6){
    if($_SESSION['CadastroSindicancia2'][0] == 1){
         "Arquivo a ser guardado: " . $target_file = $target_dir . $printMidiasSociais;
         "<br>";
    }else{
         "Arquivo a ser guardado: " . $target_file = $target_dir . $printMidiasSociaisCondutor;
         "<br>";
    }
}
// nome e local do arquivo que vai ser guardado

"<br>";
if(!file_exists($target_file)){
    if($_GET['Step'] == 5){
        move_uploaded_file($_FILES['print_midias_sociais']['tmp_name'], $target_file);
    }else if($_GET['Step'] == 6){
        if($_SESSION['CadastroSindicancia2'][0] == 1){
            move_uploaded_file($_FILES['print_midias_sociais']['tmp_name'], $target_file);
        }else{
            move_uploaded_file($_FILES['print_midias_sociais_condutor']['tmp_name'], $target_file);
        }
    }
}
