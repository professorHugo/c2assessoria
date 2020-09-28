<?php
echo "<h6>Dados do Passo 14:</h6>";
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " .
$CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

echo "
<br><br>
<h5>Buscar Procedimento legal cadastrado para o protocolo <b>$Protocolo</b></h5>
";
echo "<br><pre>" .
$QueryBuscarProcedimentos = "
    SELECT * FROM tb_pr_legal
    WHERE 
        protocolo_pr_legal = '$Protocolo' &&
        id_pr_legal != ''
";
echo "</pre>";
$ExeQrBuscarProcedimentos = mysqli_query($connection, $QueryBuscarProcedimentos);
$RowQrBuscarProcedimentos = mysqli_num_rows($ExeQrBuscarProcedimentos);

if( $RowQrBuscarProcedimentos >= 1 ){
    echo "<br>Protocolo já cadastrado, fazer atualização";
}else{
    echo "<br>Armazenar protocolo";
    echo "<br><pre>" .
    $QueryCadastrarProcedimento = "
        INSERT INTO tb_pr_legal(
            protocolo_pr_legal
        )VALUES(
            '$Protocolo'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarProcedimento = mysqli_query($connection, $QueryCadastrarProcedimento);

    if( $ExeQrCadastrarProcedimento ){
        echo "<br>Protocolo cadastrado";
    }
}


if( 
    isset($_POST['policia_militar']) || 
    isset($_POST['policia_civil']) || 
    isset($_POST['localizacao_orgaos_publicos']) || 
    isset($_POST['boletim_ocorrencia']) || 
    isset($_POST['registro_sinesp']) 
)
{
    echo "<br>";

    echo "<br>Policia Militar Acionada: ";
    
    $PoliciamentoMilitar = $_POST['policia_militar'];
    // $PoliciamentoMilitar = 2;
    switch($PoliciamentoMilitar){
        case 1: echo $PoliciamentoMilitarR = "Sim"; break;
        case 2: echo $PoliciamentoMilitarR = "Não"; break;
    }
    if( $PoliciamentoMilitar == 1 ){
        echo "<br>Arquivo apresentado: " .
        $FilePoliciamentoMilitar = $_FILES['policia_militar_acionada']['tmp_name'];
    
        include "container/Upload-PM.php";
    
    }else{
        echo "<br>Não foi apresentado Policiamento Militar" . $FilePoliciamentoMilitar = 1;
        echo "<br><pre>" .
        $QueryUpdatePM = "
            UPDATE tb_pr_legal
            SET
                pm_resposta = '$PoliciamentoMilitarR',
                pm_pr_legal = '$FilePoliciamentoMilitar'
            WHERE protocolo_pr_legal = '$Protocolo'
        ";
        echo "</pre>";
    
        $ExeQrUpdatePM = mysqli_query($connection, $QueryUpdatePM);
        if( $ExeQrUpdatePM ){
            echo "<br>Update feito no procedimento com a foto <b>$IdFotoPM</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
    
    echo "<br>";
    
    
    echo "<br>Policia civil Acionada:";
    $PoliciamentoCivil = $_POST['policia_civil'];
    // $PoliciamentoCivil = 2;
    switch( $PoliciamentoCivil ){
        case 1: echo $PoliciamentoCivilR = "Sim"; break;
        case 2: echo $PoliciamentoCivilR = "Não"; break;
    }
    if( $PoliciamentoCivil == 1 ){
        echo "<br>Arquivo Apresentado: ";
        include "container/Upload-PC.php";
    
    }else{
        echo "<br>Não foi apresentado Pocilicamento Civil" . $FilePoliciamentoCivil = 1;
        echo "<br><pre>" .
        $QueryUpdatePC = "
            UPDATE tb_pr_legal
            SET
                pc_resposta = '$PoliciamentoCivilR',
                pc_pr_legal = '$FilePoliciamentoCivil'
            WHERE protocolo_pr_legal = '$Protocolo'
        ";
        echo "</pre>";
    
        $ExeQrUpdatePC = mysqli_query( $connection, $QueryUpdatePC );
        if( $ExeQrUpdatePC ){
            echo "<br>Update feito no procedimento com a foto <b>$IdFotoPM</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
    
    echo "<br>";
    
    echo "<br>Localização em Orgãos Públicos: ";
    $LocalizacaoOrgaosPublicos = $_POST['localizacao_orgaos_publicos'];
    // $LocalizacaoOrgaosPublicos = 2;
    switch( $LocalizacaoOrgaosPublicos ){
        case 1: echo $LocalizacaoR = "Sim"; break;
        case 2: echo $LocalizacaoR = "Não"; break;
    }
    
    if( $LocalizacaoOrgaosPublicos == 1 ){
        echo "<br>Arquivo Apresentado: ";
        include "container/Upload-Localizacao.php";
    
    }else{
        echo "<br>Não foi apresentado Localização em orgãos publicos ";
        $FileLocalizacaoOrgPub = 1;
        echo "<br><pre>" .
        $QueryUpdateLocalizacao = "
            UPDATE tb_pr_legal
            SET
                localizacao_resposta = '$LocalizacaoR',
                localizacao_pr_legal = '$FileLocalizacaoOrgPub'
            WHERE protocolo_pr_legal = '$Protocolo'
        ";
        echo "</pre>";
    
        $ExeQrUpdateLocalizacao = mysqli_query( $connection, $QueryUpdateLocalizacao );
        if( $ExeQrUpdateLocalizacao ){
            echo "<br>Update feito no procedimento com a foto <b>$FileLocalizacaoOrgPub</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
    
    echo "<br>";
    
    
    echo "<br>Boletim de Ocorrência: ";
    $BoletimDeOcorrencia = $_POST['boletim_ocorrencia'];
    // $BoletimDeOcorrencia = 2;
    switch($BoletimDeOcorrencia){
        case 1: echo $BoletimDeOcorrenciaR = "Sim"; break;
        case 2: echo $BoletimDeOcorrenciaR = "Não"; break;
    }
    if( $BoletimDeOcorrenciaR == "Sim" ){
        echo "<br>Arquivo Apresentado: ";
    
        if ( $_POST['boletim_autentico'] == true ){
            echo " - Boletim autêntico: " . $BoletimAutentico = "1";
        }else{
            echo " - Boletim autêntico: " . $BoletimAutentico = "2";
        }
    
        include "container/Upload-BO.php";
    }else{
    
        $FileBoletimOcorrencia = 1;
    
        if( isset($_POST['boletim_autentico']) ){
            echo "<br>BO Autentico? " . $BoletimAutentico = 1;
        }else{
            echo "<br>BO Autentico? " . $BoletimAutentico = 2;
        }
        echo "<br><pre>" .
        $QueryUpdateBO = "
            UPDATE tb_pr_legal
            SET
                boletim_resposta = '$BoletimDeOcorrenciaR',
                boletim_autentico = '$BoletimAutentico',
                boletim_pr_legal = '$FileBoletimOcorrencia'
            WHERE protocolo_pr_legal = '$Protocolo'
        ";
        echo "</pre>";
    
        $ExeQrUpdateBO = mysqli_query( $connection, $QueryUpdateBO );
        if( $ExeQrUpdateBO ){
            echo "<br>Update feito no procedimento com a foto <b>$FileBoletimOcorrencia</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
    
    
    echo "<br>";
    
    echo "<br>Registro no SINESP: ";
    $RegistroSINESP = $_POST['registro_sinesp'];
    // $RegistroSINESP = 2;
    switch( $RegistroSINESP ){
        case 1: echo $RegistroSINESP_R = "Sim"; break;
        case 2: echo $RegistroSINESP_R = "Não"; break;
    }
    $ArquivoApresentado = $_POST['arquivo_sinesp'];
    // $ArquivoApresentado = 2;
    
    if( $RegistroSINESP == 1 ){
        if( $ArquivoApresentado == 1 ) {
            echo "<br>Imagem apresentada: ";
    
            include "container/Upload-SINESP.php";
    
        }else{
    
            echo "<br>Registro Sinesp: " . $RegistroSINESP_R = "Sim";
            echo "<br>Print? " . $PrintSINESP = "Não";
            echo "<br>Imagem: " . $FileSinespN = 1;
    
            echo "<br><pre>" .
            $QueryUpdateSINESP = "
                UPDATE tb_pr_legal
                SET
                    resposta_sinesp = '$RegistroSINESP_R',
                    print_sinesp = '$PrintSINESP',
                    sinesp_pr_legal = '$FileSinespN'
                WHERE protocolo_pr_legal = '$Protocolo'
            ";
            echo "</pre>";
    
            $ExeQrUpdateSINESP = mysqli_query($connection, $QueryUpdateSINESP);
            if( $ExeQrUpdateSINESP ){
                echo "<br>Update feito no procedimento com a foto <b>$IdFotoSINESP</b>";
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
    
        }
    
    }else{
        echo "<br>Registro Sinesp: " . $RegistroSINESP_R = "Não";
        echo "<br>Imagem: " . $FileSinespN = 1;
    
        echo "<br><pre>" .
        $QueryUpdateSINESP = "
            UPDATE tb_pr_legal
            SET
                resposta_sinesp = '$RegistroSINESP_R',
                print_sinesp = '$RegistroSINESP_R',
                sinesp_pr_legal = '$FileSinespN'
            WHERE protocolo_pr_legal = '$Protocolo'
        ";
        echo "</pre>";
    
        $ExeQrUpdateSINESP = mysqli_query($connection, $QueryUpdateSINESP);
        if( $ExeQrUpdateSINESP ){
            echo "<br>Update feito no procedimento com a foto <b>$IdFotoSINESP</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
    echo "<br>";
    echo "<br>";
}
