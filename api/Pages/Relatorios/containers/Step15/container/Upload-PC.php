<?php
echo $FilePoliciamentoCivil = $_FILES['policia_civil_acionada']['tmp_name'];

//Extensão do arquivo Policia Militar
$extensaoPC = pathinfo( $_FILES['policia_civil_acionada']['name'] );
echo "<br>Extensão do arquivo PC: " . $extensaoPC = "." . $extensaoPC['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$FotoAcionadoPC = "Policia_Civil_Acionada".$extensaoPC;
echo "<br>Destino Upload: " . 
$target_filePC = "Docs/" . $CPFAssociado . "/" . $FotoAcionadoPC;

if( move_uploaded_file($FilePoliciamentoCivil, $target_filePC) ){
    echo "<br>Arquivo <b>$FotoAcionadoPC</b> armazenada";

    //Verificar o cadastro da foto
    include "SQL/Buscar-Foto-PC.php";

    if( $RowQrBuscarFotoPC >= 1 ){
        echo "<br>Foto Já cadastrada, vincular à tb_pr_legal";
        
        //Update da Foto na tb_pr_legal
        include "SQL/Update-PC-pr_legal.php";

    }else{

        echo "<br>Foto não cadastrada, inicar cadastro";

        include "SQL/Insert-Foto-PC.php";

        if( $ExeQrCadastrarFotoPC ){
            echo "<br>Foto Cadastrada, atualizar a tb_pr_legal";

            //Update da Foto na tb_pr_legal
            include "SQL/Buscar-Foto-PC.php";
            include "SQL/Update-PC-pr_legal.php";
        }

    }
}