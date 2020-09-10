<?php
echo "<br>Buscar Entrevistados: <pre>" . 
$QueryBuscarEntrevistados = "
    SELECT * FROM tb_entrevistados 
    WHERE protocolo_entrevistados = '$Protocolo'
";
echo "</pre>";
$ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
$RowQrBuscarEntrevistados = mysqli_num_rows($ExeQrBuscarEntrevistados);

if( $RowQrBuscarEntrevistados >= 1 ){
    while($ReturnEntrevistado = mysqli_fetch_assoc($ExeQrBuscarEntrevistados)){
        $IdEntrevistado = $ReturnEntrevistado['id_entrevistado'];
        echo "<br>" . $ArquivoEntrevistado = "foto_declaracao_entrevistado".$IdEntrevistado;

        //Fazer upload do arquivo
        echo "
        <br>Arquivo do Entrevistado $IdEntrevistado: " . 
        $FileEntrevistado = $_FILES[$ArquivoEntrevistado]['tmp_name'];

        //Extensão do arquivo
        $extensao = pathinfo( $_FILES[$ArquivoEntrevistado]['name'] );
        echo "<br>Extensão do arquivo: " . $extensao = "." . $extensao['extension'];

        //Nome do arquivo
        echo "<br>Nome do arquivo: " . 
        $DeclaracaoEntrevistado = $ArquivoEntrevistado.$extensao;
        echo "<br>Destino Upload: " . 
        $target_file = "Docs/" . $CPFAssociado . "/" . $DeclaracaoEntrevistado;
        
        if( move_uploaded_file($FileEntrevistado, $target_file) ){
            echo "<br>Arquivo Armazenado";

            //Verificar cadastro da Foto no banco de dados
            include "container/Query-Buscar-Foto.php";

            if( $RowQrBuscarFotoDeclaracao >= 1 ){
                while ($ReturnFoto = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao)) {
                    $IdFoto = $ReturnFoto['id_foto'];
                }
                //Update da declaração com a foto
                include "container/Update-Declaracao.php";
            }else{

                //Cadastrar a foto da declaração
                include "container/Query-Cadastrar-Foto.php";

                if( $ExeQrCadastrarFotoDeclaracao ){
                    echo "<br>Foto Cadastrada";
                    
                    //Buscar foto para update
                    include "container/Query-Buscar-Foto.php";
                    
                    if( $RowQrBuscarFotoDeclaracao >= 1 ){
                        while ($ReturnFoto = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao)) {
                            $IdFoto = $ReturnFoto['id_foto'];
                        }
                        //Update da declaração com a foto
                        include "container/Update-Declaracao.php";
                    }


                }else{
                    echo "<br>Foto não cadastrada. Erro: " . mysqli_error($connection);
                }
            }
        }
        
    }

}