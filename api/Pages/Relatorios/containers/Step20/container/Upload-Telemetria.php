<?php
echo "<br>Print Telemetria: ";
echo $FileTelemetria = $_FILES['print_telemetria']['tmp_name'];

//Tratamento do arquivo
$extensaoArquivo = pathinfo($_FILES['print_telemetria']['name']);
echo "<br>Extensão do arquivo: ";
echo $extensaoArquivo = "." . $extensaoArquivo['extension'];

echo "<br>Nome do arquivo para upload: ";
echo "<b>" . $FotoTelemetria = "print_telemetria".$extensaoArquivo; echo "</b>";

echo "<br>Diretório de armazenamento: <b>";
echo $target_fileTelemetria = 
    "Docs/" . $CPFAssociado . "/" . $FotoTelemetria;
echo "</b>";

if( move_uploaded_file($FileTelemetria, $target_fileTelemetria ) ){
    echo "<br>A foto <b>$FotoTelemetria</b> foi carregada, cadastrar no banco de dados";

    include "SQL/Buscar-Foto-Telemetria.php";

    if( $RowQrBuscarFotoTelemetria >= 1 ){
        echo "<br>Foto já cadastrada, atualizar o registro da Telemetria";

        //Update Telemetria
        include "SQL/Update-Telemetria.php";

        if( $ExeQrUpdateTelemetria ){
            echo "<br>Telemetria atualizada com a foto <b>$IdFoto</b>";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }

    }else{
        echo "<br>Cadastrar a foto da telemetria";

        //Cadastrar Telemetria
        include "SQL/Insert-Foto-Telemetria.php";

        if( $ExeQrCadastrarFotoTelemetria ){
            echo "
                <br>Foto cadastrada para o protocolo <b>$Protocolo</b> 
                fazer update na tb_registro_telemetria
            ";

            //Buscar foto para update
            include "SQL/Buscar-Foto-Telemetria.php";
            
            //Update
            if( $RowQrBuscarFotoTelemetria >= 1 ){
                include "SQL/Update-Telemetria.php";

                if( $ExeQrUpdateTelemetria ){
                    echo "<br>Telemetria atualizada com a foto <b>$IdFoto</b>";
                }
            }

            
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
}