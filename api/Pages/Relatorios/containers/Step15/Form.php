<form action="?Page=Relatorios&Cadastrar&Step=16" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="row">

        <div class="col-12">
            <h5>Convívio do condutor</h5>
        </div>

        <div class="col-12">
            <input type="hidden" id="protocolo" value="<?php echo $Protocolo?>">

            <label for="testemunhas_local" class="col-sm-7 col-md-3 col-form-label col-form-label-lg float-left">
                Pessoas entrevistadas:
            </label>

            <div class="col-sm-5 col-md-4 float-left">
                <?php
                "<br><pre>" .
                $QueryBuscarEntrevistados= "
                SELECT * FROM tb_entrevistados
                WHERE
                    protocolo_entrevistados = '$Protocolo' AND
                    tipo_entrevistado = 3
                ";
                "</pre>";
                $ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
                $RowQrBuscarEntrevistados = mysqli_num_rows($ExeQrBuscarEntrevistados);
                if( $RowQrBuscarEntrevistados >= 1 ){
                    echo 
                    '<span class="col-sm-12 col-md-4 float-left"
                        style="
                            height: calc(1.5rem + 1rem + 2px);
                            padding: .5rem 1rem;
                            font-size: 1.25rem;
                            line-height: 1.5rem;
                            display: block;
                            width: 100%;
                            font-weight: 400;
                            background-color: #fff;
                            text-align: center
                        "
                    >';
                    echo $RowQrBuscarEntrevistados;
                    echo '</span>';
                }else{
                    echo 
                    '<span class="col-sm-4 col-md-4 float-left"
                        style="
                            height: calc(1.5rem + 1rem + 2px);
                            padding: .5rem 1rem;
                            font-size: 1.25rem;
                            line-height: 1.5rem;
                            display: block;
                            width: 100%;
                            font-weight: 400;
                            background-color: #fff;
                            text-align: center
                        "
                    >';
                    echo "0";
                    echo '</span>';
                }
                ?>
            </div>

            <div class="col-sm-12 col-md-4 float-left">

                <label
                    for="quantidade_testemunhas"
                    class="col-sm-9 col-md-9 col-form-label col-form-label-lg float-left"
                    style="margin-top:5px"
                >
                    Adicionar Entrevistado:
                </label>
                <div style="margin-bottom:10px"></div>
                <button type="button"
                    class="btn btn-success"
                    data-toggle="modal"
                    data-target="#Modal-Add-Entrevistado"
                    style="font-size: 2rem;padding: 3px 15px"
                >
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </button>

            </div>

        </div>

    </div>

    <hr>
    <div class="row" id="Entrevistados" style="margin-top: 20px">
        <?php
        "<br><pre>" . 
        $QueryBuscarEntrevistados = 
        "
            SELECT * FROM 
                tb_entrevistados 
            WHERE 
                protocolo_entrevistados = '$Protocolo' 
                && tipo_entrevistado = '3'
        ";
        "</pre>";

        $ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
        $RowQrBuscarEntrevistados = mysqli_num_rows($ExeQrBuscarEntrevistados);
        if( $RowQrBuscarEntrevistados >= 1 ){
            ?>
            <h5 class="text-center">
                <span class="text-danger">Atenção: </span>
                Ao avançar para o próximo passo, as fotos serão carregadas.
                Tenha certeza que escolheu as fotos de cada testemunha corretamente. <br>
                <span class="text-danger">OBS:</span>
                Verifique o nome do arquivo <i><b>(caixa com o texto)</b></i> de cada testemunha
                caso necessário.
            </h5>

            <?php
            while($ReturnEntrevistados = mysqli_fetch_assoc($ExeQrBuscarEntrevistados)){
                $idTestemunha = $ReturnEntrevistados['id_entrevistado'];
                $tipo = $ReturnEntrevistados['relacionamento_entrevistado'];
                $nome = $ReturnEntrevistados['nome_entrevistado'];
                $sexo = $ReturnEntrevistados['sexo_entrevistado'];
                $telefone = $ReturnEntrevistados['telefone_entrevistado'];
                $declaracao = $ReturnEntrevistados['foto_declaracao_entrevistado'];
                switch($tipo){
                    case 1: $tipo = "Familiar";break;
                    case 2: $tipo = "Amigo/Conhecido";break;
                    case 3: $tipo = "Colega de Trabalho";break;
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
        }else{

        ?>
            <h5 class="text-center col-12">
                <span class="text-danger">Atenção: </span>
                Após <b>adicionar os entrevistados</b>, poderá inserir as imagens de suas declarações. <br>
                <span class="text-danger">OBS: </span>
                Atente-se ao posicionamento da câmera para poder enviar imagens na orientação
                correta. <br> Ative a <b>Rotação Automática</b> do seu celular antes de fotografar.
            </h5>
        <?php

        }
        ?>
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
<div class="modal fade show" 
id="Modal-Add-Entrevistado" 
tabindex="-1" 
aria-labelledby="exampleModalLabel" 
aria-hidden="true"
style="
    /* display: block;
    padding-top:0%;
    background: var(--background-transparent) */
"
>
  <div class="modal-dialog modal-lg" style="min-width: 80%">
  <form
    id="form"
    enctype="multipart/form-data"
    action="Pages/containers/Relatorios/Step15/container/Upload-Foto-Declaracao.php"
  >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Entrevistado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12">
            <label
                for="nome_entrevistado"
                class="col-12 col-form-label col-form-label-lg float-left"
            >
                Nome do Entrevistado:
            </label>
            <div class="col-12">
                <input
                    type="text"
                    name="nome_entrevistado"
                    id="nome_entrevistado"
                    class="form-control form-control-lg"
                >
            </div>
            <div class="row">
                <div class="col-6">
                    <label
                        for="sexo_entrevistado"
                        class="col-md-12 col-form-label col-form-label-lg float-left"
                    >
                        Sexo:
                    </label>
                    <div class="col-md-12">
                        <select
                            name="sexo_entrevistado"
                            id="sexo_entrevistado"
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
                            <option value="1">Familiar</option>
                            <option value="2">Amigo/Conhecido</option>
                            <option value="3">Colega de Trabalho</option>
                        </select>
                    </div>

                </div>

            </div>
            <hr>

            <div style="margin-top:10px"></div>
            <div class="row">
                <label for="cep_entrevistado" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">
                    CEP:
                </label>
                <div class="col-sm-11 col-md-3">
                    <input
                        type="number"
                        placeholder="00000000"
                        name="cep_entrevistado"
                        id="cep_entrevistado"
                        class="form-control form-control-lg"
                        required onkeyup=""
                    >
                </div>
                <div class="col-sm-1 col-md-1 align-items-center" style="cursor:pointer">
                    <i class="fa fa-search form-control-lg"></i>
                </div>


                

                <label
                    for="cidade_entrevistado"
                    class="col-sm-12 col-md-1 col-form-label col-form-label-lg"
                >
                    Cidade:

                </label>
                <div class="col-sm-12 col-md-3">
                    <input type="hidden" name="cidade_entrevistado" id="cidade_entrevistado">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="cidade_entrevistado_v"
                        id="cidade_entrevistado_v"
                        disabled
                        placeholder="Aguardando CEP..."
                    >
                </div>
                <div class="col-sm-12 col-md-2">
                    <input type="hidden" name="estado_entrevistado" id="estado_entrevistado">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="estado_entrevistado_v"
                        id="estado_entrevistado_v"
                        disabled
                        placeholder="UF"
                    >
                </div>




                
            </div>
            <div style="margin-bottom:10px"></div>
            <div class="form-group row">

                <label
                    for="endereco_entrevistado"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Endereço:
                </label>
                <div class="col-sm-12 col-md-5">
                    <input type="hidden" name="endereco_entrevistado" id="endereco_entrevistado">
                    <input
                        type="text"
                        name="endereco_entrevistado_v"
                        placeholder="Aguardando CEP..."
                        id="endereco_entrevistado_v"
                        class="form-control form-control-lg"
                        disabled
                    >
                </div>

                <div class="col-sm-12 col-md-1">
                    <input
                        type="text"
                        name="numero_entrevistado"
                        id="numero_entrevistado"
                        placeholder="Nº"
                        class="form-control form-control-lg"
                    >
                </div>

                <label
                    for="bairro_entrevistado"
                    class="col-sm-12 col-md-1 col-form-label col-form-label-lg"
                >
                    Bairro:
                </label>
                <div class="col-sm-12 col-md-3">
                    <input type="hidden" name="bairro_entrevistado" id="bairro_entrevistado">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="bairro_entrevistado_v"
                        id="bairro_entrevistado_v"
                        required
                        disabled
                        placeholder="Aguardando CEP..."
                    >
                </div>
                
            </div>
            <hr>
            <div style="margin-top: 10px"></div>

            <div class="row">
                <label
                    for="nacionalidade_entrevistado"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Nacionalidade:

                </label>
                <div class="col-sm-12 col-md-4">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="nacionalidade_entrevistado"
                        id="nacionalidade_entrevistado"
                        required
                    >
                </div>

                <label
                    for="telefone_entrevistado"
                    class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
                >
                    Telefone:

                </label>
                <div class="col-sm-12 col-md-4">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        name="telefone_entrevistado"
                        id="telefone_entrevistado"
                    >
                </div>



            </div>
            <hr>
            <div style="margin-top: 10px"></div>


            <div id="return_entrevistado"></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar/Cancelar</button>
        <button onclick="SalvarEntrevistado()" type="button" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Salvar Entrevistado
        </button>
      </div>
    </div>
    </form>
  </div>
</div>