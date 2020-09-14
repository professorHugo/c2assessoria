<form action="?Page=Relatorios&Cadastrar&Step=19" method="post" enctype="multipart/form-data" id="Entrevistados">
    <h5 class="text-center">
        <span class="text-danger">Atenção: </span>
        Nessa sessão, você deve apontar o que diz a respeito das declarações dos entrevistados. 
        <br>
        Basta escolher entre <b>Sim</b> e <b>Não</b>. <br><br>
        <span class="text-danger">OBS:</span>
        Verifique o <b>Nome</b> do entrevistado e o <b>Vínculo</b> 
        para ter certeza da resposta para cada testemunha. <br><br>
    </h5>

    <?php
    echo "<pre>" . 
    $QueryBuscarEntrevistados = "
        SELECT * FROM 
            tb_entrevistados AS entrevistados
        INNER JOIN 
            tb_relacionamento_entrevistado AS relacionamento
            ON
                entrevistados.relacionamento_entrevistado = relacionamento.id_relacionamento
        WHERE 
            relacionamento.protocolo_relacionamento = '$Protocolo' AND
            entrevistados.tipo_entrevistado = 4
    ";
    echo "</pre>";
    $ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
    if( mysqli_num_rows($ExeQrBuscarEntrevistados) >= 1 ){
        while( $ReturnEntrevistado = mysqli_fetch_assoc($ExeQrBuscarEntrevistados) ){
            $IdRelacionamento = $ReturnEntrevistado['id_relacionamento'];
            $Vinculo = $ReturnEntrevistado['vinculo_entrevistado'];

            switch($Vinculo){
                case 1: $Vinculo = "Familiar";break;
                case 2: $Vinculo = "Amigo/Conhecido";break;
                case 3: $Vinculo = "Colega de Trabalho";break;
            }
            ?>
                
                <div 
                    class="col-sm-12 col-md-4 float-left table-bordered" 
                    style="
                        background: var(--background-transparent);
                        color: #333;
                        padding: 15px;
                        margin-bottom: 15px
                    "
                    class="nav-item"
                >
                    <h4>
                        <a 
                            class="collapsed entrevistados" 
                            id="caret<?php echo $IdRelacionamento?>"
                            data-toggle="collapse"
                            data-target="#Entrevistado<?php echo $IdRelacionamento?>"
                            aria-expanded="false"
                            aria-controls="Entrevistado<?php echo $IdRelacionamento?>"
                            style="cursor: pointer"
                        >
                            <span class="col-11 float-left">
                                <b><?php echo $ReturnEntrevistado['nome_entrevistado']?></b><br>
                                <input 
                                    type="hidden" 
                                    name="nome_entrevistado<?php echo $IdRelacionamento?>" 
                                    value="<?php echo $ReturnEntrevistado['nome_entrevistado']?>"
                                >
                            </span>
                        
                            
                        </a>
                    </h4>
                    <div class="clearfix"></div>
                    <hr style="border-color: #fff">

                    <!-- Verificar ajustes para o acordion -->
                    <div id="Entrevistado<?php echo $IdRelacionamento?>"
                        class="collapse"
                        aria-labeledby="Entrevistado<?php echo $IdRelacionamento?>"
                        data-parent="#Entrevistados"
                    >
                        <!-- Vínculo -->
                        <div class="row">
                            <span class="col-12">
                                <b>Vínculo:</b> <?php echo $Vinculo ?>
                            </span>
                        </div>

                        <!-- Bom estado do veículo -->
                        <div class="row">
                            <label 
                                for="bom_estado_veiculo" 
                                class="col-form-label float-left col-12"
                            >
                                Veículo em bom estado: 
                            </label>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="bom_estado_veiculo<?php echo $IdRelacionamento?>"
                                    id="bom_estado_veiculo_s<?php echo $IdRelacionamento?>"
                                    value="Sim"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="bom_estado_veiculo_s<?php echo $IdRelacionamento?>" class="col-2 float-left">Sim</label>
                            </div>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="bom_estado_veiculo<?php echo $IdRelacionamento?>"
                                    id="bom_estado_veiculo_n<?php echo $IdRelacionamento?>"
                                    value="Não"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="bom_estado_veiculo_n<?php echo $IdRelacionamento?>" class="col-2 float-left">Não</label>
                            </div>
                        </div>
                        <hr>

                        <!-- Conhecimento sobre o evento -->
                        <div class="row">
                            <label 
                                for="conhecimento_evento" 
                                class="col-form-label col-form-label-lg float-left col-12"
                            >
                                Conhecimento sobre o evento: 
                            </label>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="conhecimento_evento<?php echo $IdRelacionamento?>"
                                    id="conhecimento_evento_s<?php echo $IdRelacionamento?>"
                                    value="Sim"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="conhecimento_evento_s<?php echo $IdRelacionamento?>" class="col-2 float-left">Sim</label>
                            </div>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="conhecimento_evento<?php echo $IdRelacionamento?>"
                                    id="conhecimento_evento<?php echo $IdRelacionamento?>"
                                    value="Não"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="conhecimento_evento<?php echo $IdRelacionamento?>" class="col-2 float-left">Não</label>
                            </div>
                        </div>
                        <hr>

                        <!-- Informações Divergentes -->
                        <div class="row">
                            <label 
                                for="informacoes_divergentes" 
                                class="col-form-label col-form-label-lg float-left col-12"
                            >
                                Informações Divergentes: 
                            </label>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="informacoes_divergentes<?php echo $IdRelacionamento?>"
                                    id="informacoes_divergentes_s<?php echo $IdRelacionamento?>"
                                    value="Sim"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="informacoes_divergentes_s<?php echo $IdRelacionamento?>" class="col-2 float-left">Sim</label>
                            </div>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="informacoes_divergentes<?php echo $IdRelacionamento?>"
                                    id="informacoes_divergentes<?php echo $IdRelacionamento?>"
                                    value="Não"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="informacoes_divergentes<?php echo $IdRelacionamento?>" class="col-2 float-left">Não</label>
                            </div>
                        </div>
                        <hr>

                        <!-- Pertnoite na Garagem -->
                        <div class="row">
                            <label 
                                for="pernoite_garagem" 
                                class="col-form-label col-form-label-lg float-left col-12"
                            >
                                Pernoita na garagem: 
                            </label>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="pernoite_garagem<?php echo $IdRelacionamento?>"
                                    id="pernoite_garagem_s<?php echo $IdRelacionamento?>"
                                    value="Sim"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="pernoite_garagem_s<?php echo $IdRelacionamento?>" class="col-2 float-left">Sim</label>
                            </div>
                            <div class="col-sm-6 float-left" style="margin-top: 10px">
                                <input type="radio" 
                                    name="pernoite_garagem<?php echo $IdRelacionamento?>"
                                    id="pernoite_garagem<?php echo $IdRelacionamento?>"
                                    value="Não"
                                    class="float-left"
                                    style="
                                        height: calc(.5rem + 1rem + 2px);
                                        padding: .2rem;
                                        line-height: 1.5rem;
                                        display: block;
                                        width: 25%;
                                        font-weight: 400;
                                        background-color: #fff;
                                        text-align: center
                                    "
                                >
                                <label for="pernoite_garagem<?php echo $IdRelacionamento?>" class="col-2 float-left">Não</label>
                            </div>
                        </div>

                    </div>
                </div>

            <?php
        }
    }
    ?>
    

    <div class="clearfix" style="margin:3% 0"></div>
    <hr>
    <div class="form-group row">
        <div class="col-xs-12 col-md-4">
            <a href="?url=Relatorios" class="btn btn-outline-danger btn-lg btn-block">Cancelar</a>
        </div>
        <div class="col-xs-12 col-md-4"></div>
        <div class="col-xs-12 col-md-4">
            <button class="btn btn-outline-success btn-lg btn-block">Próximo</button>
        </div>
    </div>
</form>