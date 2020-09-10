<?php
$FileBoletimOcorrencia = $_FILES['boletim_ocorrencia']['tmp_name'];
" - " . $BOAutentico = $_POST['boletim_autentico'];
//Extensão do arquivo Policia Militar
$extensaoBO = pathinfo( $_FILES['boletim_ocorrencia']['name'] );
echo "<br>Extensão do arquivo BO: " . $extensaoBO = "." . $extensaoBO['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$FotoAcionadoBO = "Boletim_Ocorrencia".$extensaoBO;
echo "<br>Destino Upload: " . 
$target_fileBO = "Docs/" . $CPFAssociado . "/" . $FotoAcionadoBO;

if( move_uploaded_file($FileBoletimOcorrencia, $target_fileBO) ){
    echo "<br>Arquivo <b>$FotoAcionadoBO</b> armazenada";

    //Verificar o cadastro da foto
    include "SQL/Buscar-Foto-BO.php";

    if( $RowQrBuscarFotoBO >= 1 ){
        echo "<br>Foto Já cadastrada, vincular à tb_pr_legal";
        
        //Update da Foto na tb_pr_legal
        include "SQL/Update-BO-pr_legal.php";

    }else{

        echo "<br>Foto não cadastrada, inicar cadastro";

        include "SQL/Insert-Foto-BO.php";

        if( $ExeQrCadastrarFotoBO ){
            echo "<br>Foto Cadastrada, atualizar a tb_pr_legal";

            //Update da Foto na tb_pr_legal
            include "SQL/Buscar-Foto-BO.php";
            include "SQL/Update-BO-pr_legal.php";
        }

    }
}