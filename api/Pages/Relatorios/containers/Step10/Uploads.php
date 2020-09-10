<?php
if( $StatusCNHCondutor < 5 ){
    ?><h5>Upload da CNH do condutor</h5><?php

    if( is_dir("Docs/".$CPFAssociado."/") ){
        include "container/Condutor/Dados-Arquivo-Upload.php";
        
        if(move_uploaded_file($CNHCondutorFile, $target_file)){
            echo "
                <br>A img da CNH do condutor foi armazenada
            ";
            //Verificar se a foto já está cadastrada no banco de dados
            include "container/Condutor/Query-Buscar-CNH.php";
    
            if( $RowQrBuscarFotosCNH >= 1 ){
                echo "<br>
                A foto <b>$CNHCondutorArquivo</b> já existe, 
                atualizar o arquivo na <b>tb_cnh_registros</b> e 
                atualizar a <b>tb_condutores</b> com o id da cnh
                ";
    
                //Update na tb_cnh_registros
                include "container/Condutor/Query-Update-CNH.php";
    
                //update na tb_condutores
                include "container/Condutor/Update-Condutor.php";
                
    
            }else{
                //Cadastrar o arquivo no banco de dados
                include "container/Condutor/Query-Cadastrar-Foto-CNH.php";
    
                if( $ExeQrCadastrarFotoCNHCondutor ){
                    echo "<br>
                        Foto <b>$CNHCondutorArquivo</b> cadastrada.
                        Atualizar a tb_cnh_regostros
                    ";
    
                    //Update na tb_cnh_registros
                    include "container/Condutor/Query-Update-CNH.php";
        
                    //update na tb_condutores
                    include "container/Condutor/Update-Condutor.php";
                    
                }else{
                    echo "
                    <br>Erro ao cadastrar a foto <b>$CNHCondutorArquivo</b>
                    " . mysqli_error($connection);
                }
            }
        }
        
    }
    
}

//Programar os dados a partir daqui, ainda não existe nada
if( $StatusCNHAssociado < 5 ){
    ?><h5>Upload da CNH do Associado</h5><?php
    
    if( is_dir("Docs/".$CPFAssociado."/") ){
        include "container/Associado/Dados-Arquivo-Upload.php";
        
        if(move_uploaded_file($CNHAssociadoFile, $target_file2)){
            echo "
                <br>A img da CNH do Associado foi armazenada
            ";
            //Verificar se a foto já está cadastrada no banco de dados
            include "container/Associado/Query-Buscar-CNH.php";
    
            if( $RowQrBuscarFotosCNH >= 1 ){
                echo "<br>
                A foto <b>$CNHAssociadoArquivo</b> já existe, 
                atualizar o arquivo na <b>tb_cnh_registros</b> e 
                atualizar a <b>tb_condutores</b> com o id da cnh
                ";
    
                //Update na tb_cnh_registros
                include "container/Associado/Query-Update-CNH.php";
    
                //update na tb_condutores
                include "container/Associado/Update-Associado.php";
                
    
            }else{
                //Cadastrar o arquivo no banco de dados
                include "container/Associado/Query-Cadastrar-Foto-CNH.php";
    
                if( $ExeQrCadastrarFotoCNHAssociado ){
                    echo "<br>
                        Foto <b>$CNHAssociadoArquivo</b> cadastrada.
                        Atualizar a tb_cnh_regostros
                    ";
    
                    //Update na tb_cnh_registros
                    include "container/Associado/Query-Update-CNH.php";
        
                    //update na tb_condutores
                    include "container/Associado/Update-Associado.php";
                    
                }else{
                    echo "
                    <br>Erro ao cadastrar a foto <b>$CNHAssociadoArquivo</b>
                    " . mysqli_error($connection);
                }
            }
        }
        
    }
}