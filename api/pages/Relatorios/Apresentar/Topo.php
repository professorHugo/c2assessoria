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
        <div style="margin-top:35px"></div>
        <div class="col-2 text-right">
            Status:
        </div>
        <div class="col-3">
            <?php echo $ResRelatorios['status_relatorio']?>
        </div>
        
        <div class="col"></div>
        <div class="col-3 text-right">
            Data/Hora do evento:
        </div>
        <div class="col-2">
            <b>
            <?php 
                $data = str_replace("-", "/", $ResRelatorios['data_evento']);
                echo date('d/m/Y', strtotime($data));?> | 
            <?php echo $ResRelatorios['horario_evento']?>
            </b>
        </div>
        <div class="col-2 text-right">
            Endereço:
        </div>
        <div class="col-7">
            <?php 
                echo 
                $ResRelatorios['endereco_evento'] . ", ".
                $ResRelatorios['numero_evento'] . " - ".
                $ResRelatorios['bairro_evento'] . " - ".
                $ResRelatorios['cidade_evento'] . " | ".
                $ResRelatorios['uf_evento']
            ?>
        </div>
        <div class="col-1 text-right">
            CEP:
        </div>
        <div class="col-2">
            <b>
            <?php 
                $CEPBuscado = $ResRelatorios['cep_evento'];
                echo $MostrarCEP = substr_replace($CEPBuscado, "-", 5,0);
            ?>
            </b>
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
    <div class="row">
    
    </div>
    <h2 class="text-center bg-dark text-white">Veículo</h2>
    <div class="row">
        <div class="col-2 text-right">
            Marca:
        </div>
        <div class="col-1">
            Marca
        </div>
        <div class="col-1 text-right">
            Modelo
        </div>
        <div class="col-1 text-right">
            Placa
        </div>
        <div class="col">
            AAA9999
        </div>
    </div>
</div>