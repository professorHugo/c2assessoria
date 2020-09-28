<?php
echo "<br><br><p>Upload do arquivo do print</p>";
echo "Arquivo: " . $FileMobilidadeUrbana = $_FILES['comprovante_mobilidade_f']['tmp_name'];
//Tratamento do arquivo
$extensaoArquivo = pathinfo($_FILES['comprovante_mobilidade_f']['name']);
echo "<br>Extensão do arquivo: ";
echo $extensaoArquivo = "." . $extensaoArquivo['extension'];
echo "<br>Nome do arquivo para upload: ";
echo "<b>"; 
echo $FotoMobilidade = "print_mobilidade".$extensaoArquivo;
echo "</b>";
echo "<br>Diretorio de armazenamento: ";
echo "<b>";
echo $target_fileMobilidade = "Docs/" . $CPFAssociado . "/" . $FotoMobilidade;
echo "</b>";

if( move_uploaded_file($FileMobilidadeUrbana, $target_fileMobilidade) ){
    echo "<br>A foto <b>$FotoMobilidade</b> foi carregada, cadastrar no banco de dados";

    include "SQL/Buscar-Foto-Mobilidade.php";

    if( $RowBuscarFotoMobilidade >= 1 ){
        echo "<br>Foto já cadastrada, atualizar o registro de mobilidade urbana";

        //Update Registro de mobilidade urbana
        include "SQL/Update-Mobilidade.php";

        if( $ExeQrUpdateMobilidade ){
            echo "<br>Mobilidade atualizada com a foto <b>$IdFoto</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }

    }else{
        echo "<br>Cadastrar foto de Mobilidade Urbana";

        //Inserir Foto no banco de dados
        include "SQL/Insert-Foto-Mobilidade.php";

        if( $ExeQrCadastrarFotoMobilidade ){
            echo "<br>Foto <b>$FotoMobilidade</b> cadastrada, fazer update";
            include "SQL/Buscar-Foto-Mobilidade.php";
            if( $RowBuscarFotoMobilidade >= 1 ){
                include "SQL/Update-Mobilidade.php";

                if( $ExeQrUpdateMobilidade ){
                    echo "<br>Update feito no Registro de Mobilidade com a foto <b>$IdFoto</b>";
                }
            }else{
                echo "<br>Erro: " . mysqli_error($connection);
            }
        }
        
    }
}