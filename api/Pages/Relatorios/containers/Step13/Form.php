<form action="?Page=Relatorios&Cadastrar&Step=14" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="row">

        <div class="form-group col-12">
            <label 
                for="apontamento_policiamento"
                class="col-sm-12 col-md-8 col-form-label col-form-label-lg float-left"
            >
                Houve apontamento pelas testemunhas a respeito de policiamento: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select 
                    name="apontamento_policiamento" 
                    id="apontamento_policiamento"
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" selected disabled>Escolha</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="clearfix" style="margin:3% 0"></div>
        <div class="form-group col-12">
        <h5>Descreva como cada uma das testemunhas presenciou o evento: </h5>
        <?php
            echo "<br><pre>" . 
            $QueryBuscarEntrevistados = "
                SELECT * FROM tb_entrevistados
                WHERE protocolo_entrevistados = '$Protocolo'
            ";
            echo "</pre>";
            $ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
            $RowQrBuscarEntrevistados = mysqli_num_rows($ExeQrBuscarEntrevistados);

            if( $RowQrBuscarEntrevistados >= 1 ){
                while( $ResEntrevistados = mysqli_fetch_assoc($ExeQrBuscarEntrevistados) ){
                    $DadosEntrevistado = $ResEntrevistados;
                ?>
                <div 
                    class="col-sm-12 col-md-4 float-left table-bordered" 
                    style="
                        min-height:320px;
                        color:#333;
                        margin-bottom: 15px;
                        background: rgba(0,51,255,0.3);
                        padding: 15px;
                    "
                >
                    <div class="row col-12">
                        <div class="row col-12">
                        <input 
                            type="hidden" 
                            name="entrevistado<?php echo $DadosEntrevistado['id_entrevistado']?>"
                            value="<?php echo $DadosEntrevistado['id_entrevistado']?>"
                        >
                        
                        <?php if( $DadosEntrevistado['sexo_entrevistado'] == 1 )
                            { echo "O Sr. ";} else{ echo "A Sra. ";}
                        echo "<b>" . $DadosEntrevistado['nome_entrevistado'] . ",</b> ";
                        ?>
                        </div>
                        <?php
                        if( $DadosEntrevistado['tipo_entrevistado'] == 1 ){
                            if( $DadosEntrevistado['sexo_entrevistado'] == 1 )
                            { echo "morador"; }else{ echo "moradora"; }
                        }else{
                        ?>testemunha sabedora, 
                        <select required
                            name="tipo_sabedor<?php echo $DadosEntrevistado['id_entrevistado']?>"
                            class="form-control"
                        >
                            <option value="" selected disabled>O que faz na região</option>
                            <?php
                            $QueryBuscarTiposTestemunhas = "
                                SELECT * FROM tb_tipos_testemunhas
                                WHERE nome_tipo != 'NULL'
                            ";
                            $ExeQrBuscarTiposTestemunhas = mysqli_query(
                                $connection, $QueryBuscarTiposTestemunhas
                            );
                            while($TiposT = mysqli_fetch_assoc($ExeQrBuscarTiposTestemunhas)){
                                ?>
                                <option value="<?php echo $TiposT['id_tipo']?>">
                                    <?php echo $TiposT['nome_tipo']?>
                                </option>
                                <?php
                            }
                            ?>
                            
                        </select>
                        <?php
                        }
                            
                        ?> do numeral <?php echo $DadosEntrevistado['numero_end_entrevistado']?>, 
                        informou que no dia dos fatos: 
                    </div>
                    <div class="row col-12">
                        <input 
                            type="text" 
                            name="texto_dia_dos_fatos<?php echo $DadosEntrevistado['id_entrevistado']?>" 
                            id="texto_dia_dos_fatos" 
                            class="form-control"
                            placeholder="O que a testemunha fez"
                        >
                        Ao sair em via pública: 
                        <input 
                            type="text" 
                            name="texto_acontecimento<?php echo $DadosEntrevistado['id_entrevistado']?>" 
                            id="texto_acontecimento" 
                            class="form-control"
                            placeholder="O que viu"
                        >
                    </div>
                    <hr style="
                        width:99%;
                        position: absolute;
                        bottom: 0px;
                        z-index:999
                    ">
                    <div style="margin-bottom:25px"></div>
                </div>
                
                
                <?php
                }
            }else{
            ?>
                <h6>Não houve declarações apresentadas pelas testemunhas<h6>
            <?php
                
            }

        ?>
        </div>

    </div>

    <hr>

    <div class="clearfix" style="margin:3% 0"></div>
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