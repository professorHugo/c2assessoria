<form action="?Page=Relatorios&Cadastrar&Step=13" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Testemunhas</h5>
        </div>
        <div class="col-12">
            <input type="hidden" id="protocolo" value="<?php echo $Protocolo?>">
            <label for="testemunhas_local" class="col-sm-12 col-md-4 col-form-label col-form-label-lg float-left">
                Houve testemunhas no local:
            </label>

            <?php
             "<br><pre>" .
            $QueryBuscarTestemunhas = "
                SELECT * FROM tb_entrevistados
                WHERE
                    protocolo_entrevistados = '$Protocolo' AND
                    tipo_entrevistado = '1'
            ";
             "</pre>";
            $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
            $RowQrBuscarTestemunhas = mysqli_num_rows($ExeQrBuscarTestemunhas);
            if( $RowQrBuscarTestemunhas >= 1 ){
                ?>

                <div class="col-sm-12 col-md-4 float-left">
                    <select
                        class="form-control form-control-lg disabled"
                        id="testemunhas_local"
                        name="testemunhas_local"
                    >

                        <option value="1" selected >Sim</option>

                    </select>
                </div>
                <div id="return_testemunhas_local" class="col-sm-12 col-md-4 float-left">

                    <div id="Return-Testemunhas">
                        <label
                            for="quantidade_testemunhas"
                            class="col-sm-9 col-md-9 col-form-label col-form-label-lg float-left"
                            style="margin-top:5px"
                        >
                            Adicionar Testemunha:
                        </label>
                        <div style="margin-bottom:10px"></div>
                        <div class="col-sm-3 col-md-3 float-left">
                            <button type="button"
                                class="btn btn-success"
                                data-toggle="modal"
                                data-target="#Modal-Add-Testemunha"
                                style="font-size: 2rem;padding: 3px 15px"
                                id="quantidade_testemunhas"
                            >
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                </div>

                <?php
            }else{
                ?>

                <div class="col-sm-12 col-md-4 float-left">
                    <select
                        class="form-control form-control-lg"
                        id="testemunhas_local"
                        name="testemunhas_local"
                        required
                        onchange="selecionarTestemunhas()"
                    >
                        <option value="" disabled selected>Escolha</option>
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                </div>
                <div id="return_testemunhas_local" class="col-sm-12 col-md-4 float-left">
                <!-- Retorno com Ajax -->
                </div>
                
                <div class="clearfix" style="margin-bottom:20px"></div>
                <hr>
                <div class="col-12 float-left">
                    <h6 class="text-center">
                        <span class="text-danger">Atenção: </span>
                        Após adicionar as testemunhas, poderá inserir as imagens de suas declarações. <br>
                        <span class="text-danger">OBS: </span>
                        Atente-se ao posicionamento da câmera para poder enviar imagens na orientação
                        correta.
                    </h6>
                </div>

                <?php
            }


             "<br><pre>" .
            $QueryBuscarTestemunhas = "
                SELECT * FROM tb_entrevistados
                WHERE
                    protocolo_entrevistados = '$Protocolo'
            ";
             "</pre>";
            $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
            $RowQrBuscarTestemunhas = mysqli_num_rows($ExeQrBuscarTestemunhas);
            if( $RowQrBuscarTestemunhas >= 1 )
            {
                ?>
                <div id="Testemunhas"class="col-12 float-left">
                    <h6 class="text-center">
                        <span class="text-danger">Atenção: </span>
                        Ao avançar para o próximo passo, as fotos serão carregadas.
                        Tenha certeza que escolheu as fotos de cada testemunha corretamente. <br>
                        <span class="text-danger">OBS:</span>
                        Verifique o nome do arquivo <i><b>(caixa com o texto)</b></i> de cada testemunha
                        caso necessário.
                    </h6>
                    <?php
                        while($ReturnTestemunhas = mysqli_fetch_assoc($ExeQrBuscarTestemunhas)){
                            $idTestemunha = $ReturnTestemunhas['id_entrevistado'];
                            $tipo = $ReturnTestemunhas['tipo_entrevistado'];
                            $nome = $ReturnTestemunhas['nome_entrevistado'];
                            $sexo = $ReturnTestemunhas['sexo_entrevistado'];
                            $telefone = $ReturnTestemunhas['telefone_entrevistado'];
                            $declaracao = $ReturnTestemunhas['foto_declaracao_entrevistado'];
                            switch($tipo){
                                case 1: $tipo = "Testemunha Visual";break;
                                case 2: $tipo = "Testemunha Sabedora";break;
                            }

                            ?>
                            <div class="col-sm-12 col-md-4 float-left table-bordered"
                                style="
                                    min-height: 200px;
                                    padding: 15px;
                                    background: var(--blue);
                                    color: #fff;
                                    margin-bottom: 15px
                                "
                            >
                                Nome: <?php echo $nome?><br>
                                Telefone: <?php echo $telefone?><br>
                                Tipo de testemunha: <?php echo $tipo?>

                                <br>
                                <br>

                                <script>
                                    $(function(){
                                        var $input<?php echo $idTestemunha?> = document.getElementById('foto_declaracao_entrevistado<?php echo $idTestemunha?>');
                                        var $fileName<?php echo $idTestemunha?> = document.getElementById('file-name<?php echo $idTestemunha?>');

                                        $input<?php echo $idTestemunha?>.addEventListener('change', function(){
                                            $fileName<?php echo $idTestemunha?>.textContent = this.value;
                                        });
                                    });
                                </script>

                                <label
                                    for="foto_declaracao_entrevistado<?php echo $idTestemunha?>"
                                    class="btn btn-success col-12"
                                >
                                    Carregar Foto da declaração
                                </label>

                                <div class="col-sm-12 float-left">
                                    <span
                                        id="file-name<?php echo $idTestemunha?>"
                                        class="form-control form-control-lg"
                                        style="font-size:.8rem;"
                                    ></span>
                                </div>
                                <input
                                    type="file"
                                    name="foto_declaracao_entrevistado<?php echo $idTestemunha?>"
                                    id="foto_declaracao_entrevistado<?php echo $idTestemunha?>"
                                    style="display:none"
                                >




                            </div>
                            <?php
                        }
                    ?>
                </div>

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



<!-- Modal -->
<div class="modal fade" id="Modal-Add-Testemunha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="min-width: 80%">
  <form
    id="form"
    enctype="multipart/form-data"
    action="Pages/containers/Relatorios/Step12/container/Upload-Foto-Declaracao.php"
  >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Testemunha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12">
            <label
                for="nome_testemunha"
                class="col-12 col-form-label col-form-label-lg float-left"
            >
                Nome da Testemunha:
            </label>
            <div class="col-12">
                <input
                    type="text"
                    name="nome_testemunha"
                    id="nome_testemunha"
                    class="form-control form-control-lg"
                >
            </div>
            <div class="row">
                <div class="col-6">
                    <label
                        for="sexo_testemunha"
                        class="col-md-12 col-form-label col-form-label-lg float-left"
                    >
                        Sexo:
                    </label>
                    <div class="col-md-12">
                        <select
                            name="sexo_testemunha"
                            id="sexo_testemunha"
                            class="form-control form-control-lg"
                            required
                        >
                            <option value="" disabled selected>Escolha</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <label
                        for="tipo_entrevistado"
                        class="col-12 col-form-label col-form-label-lg float-left"
                    >
                        Tipo:
                    </label>
                    <div class="col-12">
                        <select
                            name="tipo_entrevistado"
                            id="tipo_entrevistado"
                            class="form-control form-control-lg"
                            required
                        >
                            <option value="" disabled selected>Escolha</option>
                            <option value="1">Testemunha</option>
                            <option value="2">Sabedor</option>
                        </select>
                    </div>

                </div>

            </div>
            <hr>

            <div style="margin-top:10px"></div>
            <div class="row">
                <label for="cep_testemunha" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">
                    CEP:
                </label>
                <div class="col-sm-12 col-md-3">
                    <input
                        type="number"
                        placeholder="00000000"
                        name="cep_testemunha"
                        id="cep_testemunha"
                        class="form-control form-control-lg"
                        required
                    >
                </div>

                <label
                    for="endereco_testemunha"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Endereço:
                </label>
                <div class="col-sm-12 col-md-4">
                    <input
                        type="text"
                        name="endereco_testemunha"
                        placeholder="Aguardando CEP..."
                        id="endereco_testemunha"
                        class="form-control form-control-lg"
                        required
                    >
                </div>

                <div class="col-sm-12 col-md-1">
                    <input
                        type="text"
                        name="numero_testemunha"
                        id="numero_testemunha"
                        placeholder="Nº"
                        class="form-control form-control-lg"
                    >
                </div>
            </div>
            <div style="margin-bottom:10px"></div>
            <div class="form-group row">
                <label
                    for="bairro_testemunha"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Bairro:
                </label>
                <div class="col-sm-12 col-md-3">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="bairro_testemunha"
                        id="bairro_testemunha"
                        required
                    >
                </div>
                <label
                    for="cidade_testemunha"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Cidade:

                </label>
                <div class="col-sm-12 col-md-4">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="cidade_testemunha"
                        id="cidade_testemunha"
                    >
                </div>
                <div class="col-sm-12 col-md-1">
                    <input
                        type="text"
                        placeholder="UF"
                        class="form-control form-control-lg"
                        name="estado_testemunha"
                        id="estado_testemunha"
                    >
                </div>
            </div>
            <hr>
            <div style="margin-top: 10px"></div>

            <div class="row">
                <label
                    for="nacionalidade_testemunha"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Nacionalidade:

                </label>
                <div class="col-sm-12 col-md-4">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="nacionalidade_testemunha"
                        id="nacionalidade_testemunha"
                        required
                    >
                </div>

                <label
                    for="telefone_testemunha"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Telefone:

                </label>
                <div class="col-sm-12 col-md-4">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="telefone_testemunha"
                        id="telefone_testemunha"
                    >
                </div>



            </div>
            <hr>
            <div style="margin-top: 10px"></div>


            <div id="return_testemunha"></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar/Cancelar</button>
        <button onclick="SalvarTestemunha()" type="button" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Salvar Testemunha
        </button>
      </div>
    </div>
    </form>
  </div>
</div>