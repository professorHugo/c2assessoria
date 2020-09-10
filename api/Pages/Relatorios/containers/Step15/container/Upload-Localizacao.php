<?php
echo $FileLocalizacaoOrgPub = $_FILES['file_localizacao_orgaos_publicos']['tmp_name'];
//Extensão do arquivo Policia Militar
$extensaoLocaliza = pathinfo( $_FILES['file_localizacao_orgaos_publicos']['name'] );
echo "<br>Extensão do arquivo Localiza: " . $extensaoLocaliza = "." . $extensaoLocaliza['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$FotoAcionadoLocaliza = "Localiza_Orgaos_Publicos".$extensaoLocaliza;
echo "<br>Destino Upload: " . 
$target_fileLocaliza = "Docs/" . $CPFAssociado . "/" . $FotoAcionadoLocaliza;

if( move_uploaded_file($FileLocalizacaoOrgPub, $target_fileLocaliza) ){
    echo "<br>O arquivo <b>$FotoAcionadoLocaliza</b> foi armazenado";

    //Verificar o cadastro da foto
    include "SQL/Buscar-Foto-Localiza.php";

    if( $RowQrBuscarFotoLocaliza >= 1 ){
        echo "<br>Foto Já cadastrada, vincular à tb_pr_legal";
        
        //Update da Foto na tb_pr_legal
        include "SQL/Update-Localiza-pr_legal.php";

    }else{
        echo "<br>Foto não cadastrada, inicar cadastro";

        include "SQL/Insert-Foto-Localiza.php";

        if( $ExeQrCadastrarFotoLocaliza ){
            echo "<br>Foto Cadastrada, atualizar a tb_pr_legal";

            //Update da Foto na tb_pr_legal
            include "SQL/Buscar-Foto-Localiza.php";
            include "SQL/Update-Localiza-pr_legal.php";
        }
    }
}