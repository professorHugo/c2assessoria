<div class="container">
    <h2 class="text-center bg-dark text-white">Relatório de Sindicância</h2>
    <hr>
    <div class="row">
        <div class="col-2 text-right">
            Solicitante:
        </div>
        <div class="col-6">
            <?php 
            $Solicitante = $ResRelatorios['solicitante_evento'];
            $QueryBuscarSolicitante = "SELECT * FROM tb_clientes WHERE id_cliente = '$Solicitante'";
            $ExeQrBuscarSolicitante = mysqli_query($connection, $QueryBuscarSolicitante);
            while($Solicitante = mysqli_fetch_assoc($ExeQrBuscarSolicitante)){
                echo $Solicitante['nome_cliente'];
            }
            ?>
        </div>
        <div class="col-1">
            Protocolo:
        </div>
        <div class="col-1">
            <?php echo $ResRelatorios['protocolo_evento']?>
        </div>
        <div class="col-1">
            Natureza:
        </div>
        <div class="col-1">
        <?php
            $Natureza = $ResRelatorios['natureza_evento'];
            $QueryBuscarNatureza = "SELECT * FROM tb_natureza_evento WHERE id_natureza = '$Natureza'";
            $ExeQrBuscarNatureza = mysqli_query($connection, $QueryBuscarNatureza);
            while($ResNatureza = mysqli_fetch_assoc($ExeQrBuscarNatureza)){
                echo $ResNatureza['descricao_natureza'];
            }
        ?>
        </div>
    </div>
    <hr>
    <div class="clearfix" style="margin-top:35px"></div>
    <h2 class="text-center bg-dark text-white">Perfil do Associado</h2>
    <div class="row">
        <div class="col-2 text-right">
            Nome: 
        </div>
        <div class="col-5">
        <?php
            $CPF = $ResRelatorios['cpf_associado'];
            $QueryBuscarAssociados = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";
            $ExeQrBuscarAssociados = mysqli_query($connection,$QueryBuscarAssociados);
            while($ResAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociados)){
                echo $ResAssociado['nome_associado'];
            }
        ?>
        </div>
        <div class="col-1 text-right">
            CPF:
        </div>
        <div class="col-1">
            <?php echo $ResRelatorios['cpf_associado'];?>
        </div>
        <div class="col-1 text-right">
            RG:
        </div>
        <div class="col-2">
        <?php
            $CPF = $ResRelatorios['cpf_associado'];
            $QueryBuscarAssociados = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";
            $ExeQrBuscarAssociados = mysqli_query($connection,$QueryBuscarAssociados);
            while($ResAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociados)){
                if($ResAssociado['rg_associado'] == null){
                    echo "---";
                }else{
                    echo $ResAssociado['rg_associado'];
                }
            }
        ?>
        </div>
    </div>
    <div class="row">
        <div class="col-2 text-right">
            Estado Civil:
        </div>
        <div class="col-3">
            <?php
                $CPF = $ResRelatorios['cpf_associado'];
                $QueryBuscarAssociados = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";
                $ExeQrBuscarAssociados = mysqli_query($connection,$QueryBuscarAssociados);
                while($ResAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociados)){
                    if($ResAssociado['civil_associado'] == null){
                        echo "---";
                    }else{
                        echo $ResAssociado['civil_associado'];
                    }
                }
            ?>
        </div>
        <div class="col-1 text-right">
            Profissão:
        </div>
        <div class="col-2">
            <?php
                $CPF = $ResRelatorios['cpf_associado'];
                $QueryBuscarAssociados = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";
                $ExeQrBuscarAssociados = mysqli_query($connection,$QueryBuscarAssociados);
                while($ResAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociados)){
                    if($ResAssociado['profissao_associado'] == null){
                        echo "---";
                    }else{
                        echo $ResAssociado['profissao_associado'];
                    }
                }
            ?>
        </div>
        <div class="col text-right">
            CNH:
        </div>
        <div class="col">
            <?php
                $CPF = $ResRelatorios['cpf_associado'];
                $QueryBuscarAssociados = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";
                $ExeQrBuscarAssociados = mysqli_query($connection,$QueryBuscarAssociados);
                while($ResAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociados)){
                    if($ResAssociado['status_cnh_associado'] == null){
                        echo "---";
                    }else{
                        echo $ResAssociado['status_cnh_associado'];
                    }
                }
            ?>
        </div>
    </div>
    <hr>
    <h2 class="text-center bg-dark text-white">Perfil do Condutor</h2>
</div>