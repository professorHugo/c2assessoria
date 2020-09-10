<?php
echo $FileSinesp = $_FILES['file_sinesp']['tmp_name'];

//Extensão do arquivo Policia Militar
$extensaoSINESP = pathinfo( $_FILES['file_sinesp']['name'] );
echo "<br>Extensão do arquivo SINESP: " . $extensaoSINESP = "." . $extensaoSINESP['extension'];

//Nome do arquivo
echo "<br>Nome do arquivo: " . 
$FotoAcionadoSINESP = "Registro_SINESP".$extensaoSINESP;
echo "<br>Destino Upload: " . 
$target_fileSINESP = "Docs/" . $CPFAssociado . "/" . $FotoAcionadoSINESP;

if( move_uploaded_file( $FileSinesp, $target_fileSINESP ) ){
    echo "<br>Arquivo <b>$FotoAcionadoSINESP</b> armazenada";

    //Verificar o cadastro da foto
    include "SQL/Buscar-Foto-SINESP.php";

    if( $RowQrBuscarFotoSINESP >= 1 ){
        echo "<br>Foto Já cadastrada, vincular à tb_pr_legal";
        
        //Update da Foto na tb_pr_legal
        include "SQL/Update-SINESP-pr_legal.php";

    }else{

        echo "<br>Foto não cadastrada, inicar cadastro";

        include "SQL/Insert-Foto-SINESP.php";

        if( $ExeQrCadastrarFotoSINESP ){
            echo "<br>Foto Cadastrada, atualizar a tb_pr_legal";

            //Update da Foto na tb_pr_legal
            include "SQL/Buscar-Foto-SINESP.php";
            include "SQL/Update-SINESP-pr_legal.php";
        }

    }
}