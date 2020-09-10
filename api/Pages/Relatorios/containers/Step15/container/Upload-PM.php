<?php
echo $FilePoliciamentoCivil = $_FILES['policia_militar_acionada']['tmp_name'];
//Extensão do arquivo Policia Militar
$extensaoPM = pathinfo( $_FILES['policia_militar_acionada']['name'] );
echo "<br>Extensão do arquivo PM: " . $extensaoPM = "." . $extensaoPM['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$FotoAcionadoPM = "Policia_Militar_Acionada".$extensaoPM;
echo "<br>Destino Upload: " . 
$target_filePM = "Docs/" . $CPFAssociado . "/" . $FotoAcionadoPM;

if( move_uploaded_file($FilePoliciamentoCivil, $target_filePM) ){
    echo "
        <br>Arquivo <b>$FotoAcionadoPM</b> armazenado
    ";

    //Verificar cadastro da foto
    include "SQL/Buscar-Foto-PM.php";

    if( $RowQrBuscarFotoPM >= 1 ){
        echo "<br>Foto Já cadastrada, vincular à tb_pr_legal";
        
        //Update da Foto na tb_pr_legal
        include "SQL/Update-PM-pr_legal.php";

    }else{
        echo "<br>Foto não cadastrada, inicar cadastro";

        include "SQL/Insert-Foto-PM.php";
        
        if( $ExeQrCadastrarFotoPM ){
            echo "<br>Foto Cadastrada, atualizar a tb_pr_legal";

            //Update da Foto na tb_pr_legal
            include "SQL/Buscar-Foto-PM.php";
            include "SQL/Update-PM-pr_legal.php";
        }
    }
}