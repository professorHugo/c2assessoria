<?php
echo "<br><pre>" . 
$QueryBuscarEntrevistados = "
    SELECT * FROM 
        tb_entrevistados
    WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        tipo_entrevistado = '4'
";
echo "</pre>";
$ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);

if( $ExeQrBuscarEntrevistados ){
    // echo "<br>Achou: " . mysqli_num_rows($ExeQrBuscarEntrevistados) . " Registros";
    while( $ReturnEntrevistados = mysqli_fetch_assoc($ExeQrBuscarEntrevistados) ){
        echo "<br> ID: " . $IdEntrevistado = $ReturnEntrevistados['id_entrevistado'];
        echo "<br>" . $ArquivoDeclaracao = "foto_declaracao_entrevistado_a".$IdEntrevistado;

        echo "<br>Arquivo: " . $FileDeclaracaoEntrevistado = $_FILES[$ArquivoDeclaracao]['tmp_name'];

        //Tratamento do arquivo
        $extensaoArquivo = pathinfo($_FILES[$ArquivoDeclaracao]['name']);
        echo "<br>Extensão do arquivo: ";
        echo $extensaoArquivo = "." . $extensaoArquivo['extension'];

        echo "<br>Nome do arquivo para upload: ";
        echo "<b>" . $FotoDeclaracaoEntevistado = $ArquivoDeclaracao.$extensaoArquivo; echo "</b>";
        
        echo "<br>Diretório de armazenamento: <b>";
        echo $target_fileDeclaracaoEntrevistado = 
            "Docs/" . $CPFAssociado . "/" . $FotoDeclaracaoEntevistado;
        echo "</b>";


        //Fazer upload do arquivo
        if( move_uploaded_file($FileDeclaracaoEntrevistado, $target_fileDeclaracaoEntrevistado) ){
            echo "
                <br>O arquivo <b> $FotoDeclaracaoEntevistado </b> foi carregado.
                Verificar cadastro da foto no banco de dados.
            ";

            //Verificar Cadastro das fotos no banco de dados
            include "container/SQL/Buscar-Fotos-Entrevistados.php";

            if( $RowQrBuscarFotosDeclaracaoEntrevistados >= 1 ){
                echo "<br>Achou, fazer update na tb_entrevistados";

                include "container/SQL/Update-Entrevistado.php";


            }else{
                echo "<br>Cadastro aina não efetuado. Iniciar cadastro.";

                //Cadastrar foto da declaração do entrevistado do condutor
                include "container/SQL/Query-Insert-Foto-Entrevistado.php";

                //Update
                if( $ExeQrCadastrarFotoDeclaracaoAssociado ){
                    echo "
                        <br>Foto cadastrada, fazer update na tb_entrevistados com a foto
                        <b>$FotoDeclaracaoEntevistado</b>
                    ";

                    //Update da tb_entrevistados com a foto
                    include "container/SQL/Buscar-Fotos-Entrevistados.php";

                    if( $RowQrBuscarFotosDeclaracaoEntrevistados >= 1 ){

                        //Update Entrevistado
                        include "container/SQL/Update-Entrevistado.php";

                    }else{
                        echo "<br>Erro: " . mysqli_error($connection);
                    }
                }
            }


        }
        echo "<br>";
    }
}