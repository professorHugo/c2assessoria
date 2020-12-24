<?php
require_once "../../config/Config.php";
if( $SysMode == 1 ){
    //DEV
    echo "<br>Protocolo: " . $Protocolo = $_GET['protocolo'];
    echo "<br>Nome: " . $nome = $_GET['nome'];
    echo "<br>Tipo de testemunha: " . $tipo = $_GET['tipo'];
    echo "<br>Cep da testemunha: " . $cep = $_GET['cep'];
    echo "<br>Endereço da testemunha: " . $end = $_GET['end'];
    echo "<br>Número da residência: " . $num = $_GET['num'];
    echo "<br>Bairro: " . $bairro = $_GET['bairro'];
    echo "<br>Cidade: " . $cidade = $_GET['cidade'];
    echo "<br>estado: " . $estado = $_GET['estado'];
    echo "<br>telefone: " . $telefone = $_GET['telefone'];
    echo "<br>observacao: " . $observacao = $_GET['observacao'];

    echo "<br><pre>" . 
    $QueryCadastrarTestemunha = "
        INSERT INTO tb_entrevistados(
            protocolo_entrevistados,
            tipo_entrevistado,
            testemunha_entrevistado,
            nome_entrevistado,
            telefone_entrevistado,
            cep_entrevistado,
            endereco_entrevistado,
            numero_end_entrevistado,
            bairro_entrevistado,
            cidade_entrevistado,
            estado_entrevistado,
            observacao_entrevistado
        )VALUES(
            '$Protocolo',
            '$tipo',
            '0',
            '$nome',
            '$telefone',
            '$cep',
            '$end',
            '$num',
            '$bairro',
            '$cidade',
            '$estado',
            '$observacao'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarTestemunha = mysqli_query($connection, $QueryCadastrarTestemunha);
    if( $ExeQrCadastrarTestemunha ){
    ?>
        <script type="text/javascript">
        $(function(){
            $("body").addClass('modal-open');
        });
        </script>

        <!-- Modal cadastrar testemunha -->

        <div 
        class="modal fade show" 
        id="modalLoggedIn" 
        data-keyboard="false" 
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
            display: block;
            padding-top:10%;
            background: var(--background-transparent)
        "
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Testemunha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 text-center">
                        <img src="img/ajax-loader.gif">
                        </div>
                        <div class="col-md-12 text-center">
                        <p>Cadastrando a testemunha...</p>
                        <p>
                            Você poderá adicionar a foto das testemunhas em seguida
                        </p>
                        </div>
                    </div>
                <div class="modal-footer">
                    <a 
                        href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo ?>&Content=Pesquisas-No-Local" 
                        class="btn btn-form btn-form" 
                        style="background: var(--blue);color: #fff"
                    >
                        Entendi
                    </a>
                </div>
                </div>
            </div>
        </div>
        
    <?php
    }else{
    echo "<br>Erro ao cadastrar a testemunha: " . mysqli_error($connection);
    }
}else{
    //PROD


    "<br>Protocolo: " . $Protocolo = $_GET['protocolo'];
    "<br>Nome: " . $nome = $_GET['nome'];
    "<br>Tipo de testemunha: " . $tipo = $_GET['tipo'];
    "<br>Cep da testemunha: " . $cep = $_GET['cep'];
    "<br>Endereço da testemunha: " . $end = $_GET['end'];
    "<br>Número da residência: " . $num = $_GET['num'];
    "<br>Bairro: " . $bairro = $_GET['bairro'];
    "<br>Cidade: " . $cidade = $_GET['cidade'];
    "<br>estado: " . $estado = $_GET['estado'];
    "<br>telefone: " . $telefone = $_GET['telefone'];
    "<br>observacao: " . $observacao = $_GET['observacao'];

    "<br><pre>" . 
    $QueryCadastrarTestemunha = "
        INSERT INTO tb_entrevistados(
            protocolo_entrevistados,
            tipo_entrevistado,
            testemunha_entrevistado,
            nome_entrevistado,
            telefone_entrevistado,
            cep_entrevistado,
            endereco_entrevistado,
            numero_end_entrevistado,
            bairro_entrevistado,
            cidade_entrevistado,
            estado_entrevistado,
            observacao_entrevistado
        )VALUES(
            '$Protocolo',
            '$tipo',
            '0',
            '$nome',
            '$telefone',
            '$cep',
            '$end',
            '$num',
            '$bairro',
            '$cidade',
            '$estado',
            '$observacao'
        )
    ";
    "</pre>";
    $ExeQrCadastrarTestemunha = mysqli_query($connection, $QueryCadastrarTestemunha);
    if( $ExeQrCadastrarTestemunha ){
    ?>
        <script type="text/javascript">
        $(function(){
            $("body").addClass('modal-open');
        });
        </script>

        <!-- Modal cadastrar testemunha -->

        <div 
        class="modal fade show" 
        id="modalLoggedIn" 
        data-keyboard="false" 
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
            display: block;
            padding-top:10%;
            background: var(--background-transparent)
        "
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Testemunha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 text-center">
                        <img src="img/ajax-loader.gif">
                        </div>
                        <div class="col-md-12 text-center">
                        <p>Cadastrando a testemunha...</p>
                        <p>
                            Você poderá adicionar a foto das testemunhas em seguida
                        </p>
                        </div>
                    </div>
                <div class="modal-footer">
                    <a 
                        href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo ?>&Content=Pesquisas-No-Local" 
                        class="btn btn-form btn-form" 
                        style="background: var(--blue);color: #fff"
                    >
                        Entendi
                    </a>
                </div>
                </div>
            </div>
        </div>
        
    <?php
    }else{
        echo "<br>Erro ao cadastrar a testemunha: " . mysqli_error($connection);
    }
}