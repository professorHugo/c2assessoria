<form action="?Page=Relatorios&Cadastrar&Step=6" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do condutor -->
    <div class="form-group row">
        <div class="col-12">
            <h5>
            Perfil do Condutor(a):
            <?php
            $Protocolo = $_SESSION['ProtocoloCondutor'];
            $QueryBuscarNomeCondutor = "SELECT * FROM tb_condutores WHERE protocolo_evento = '$Protocolo'";
            $ExeQrBuscarNomeCondutor = mysqli_query($connection, $QueryBuscarNomeCondutor);
            if($ExeQrBuscarNomeCondutor){
                while($ReturnNome = mysqli_fetch_assoc($ExeQrBuscarNomeCondutor)){
                    echo $ReturnNome['nome_condutor'];
                }
            }
            ?>
            </h5>
        </div>
        <label for="estado_civil_condutor" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Estado Civil:</label>
        <div class="col-sm-12 col-md-4">
            <select name="estado_civil_condutor" id="estado_civil_condutor" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viuvo(a)">Viuvo(a)</option>
                <option value="Uniao Estável">União Estável</option>
            </select>
        </div>
        <label for="profissao_condutor" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Profissão</label>
        <div class="col-xs-12 col-md-4">
            <input type="text" id="profissao_condutor" name="profissao_condutor" placeholder="Profissão Condutor" class="form-control form-control-lg" required>
        </div>
    </div>

    <div class="col-12" style="margin-top: 1rem"></div>
    <div class="col-12">
        <h5 style="border-bottom: 1px solid #ddd">Domicílio:</h5>
        <div class="form-group row">
            <label for="cep_condutor" class="col-xs-12 col-md-2 col-form-label col-form-label-lg float-left">
                CEP: 
            </label>
            <div class="col-sm-11 col-md-2 float-left">
                <input type="number" placeholder="00000000" name="cep_condutor" id="cep_condutor" class="form-control form-control-lg" required>
            </div>
            <div class="col-sm-1 col-md-1 align-items-center float-left" style="cursor:pointer">
                <i class="fa fa-search form-control-lg"></i>
            </div>
            <label for="endereco_condutor" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">Endereço:</label>
            <div class="col-sm-10 col-md-4 float-left">
                <input type="hidden" name="endereco_condutor" id="endereco_condutor" value="" required>
                <input type="text" name="endereco_condutor_exibir" placeholder="Aguardando CEP..." disabled id="endereco_condutor_exibir" class="form-control form-control-lg">
            </div>
            <div class="col-sm-2 col-md-1 float-left">
                <input type="text" name="numero_condutor" placeholder="Nº" class="form-control form-control-lg">
            </div>
        </div>
        <div class="form-group row">
            <label for="bairro_condutor" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Bairro:</label>
            <div class="col-sm-12 col-md-3">
                <input type="hidden" name="bairro_condutor" id="bairro_condutor">
                <input type="text" class="form-control form-control-lg" name="bairro_condutor_exibir" id="bairro_condutor_exibir" placeholder="Aguardando CEP..." disabled>
            </div>
            <label for="cidade_condutor" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Cidade:</label>
            <div class="col-sm-12 col-md-4">
                <input type="hidden" name="cidade_condutor" id="cidade_condutor">
                <input type="text" disabled placeholder="Aguardando CEP..." class="form-control form-control-lg" name="cidade_condutor_exibir" id="cidade_condutor_exibir" >
            </div>
            <div class="col-sm-12 col-md-1">
                <input type="hidden" name="estado_condutor" id="estado_condutor">
                <input type="text" disabled placeholder="..." class="form-control form-control-lg" name="estado_condutor_exibir" id="estado_condutor_exibir" >
            </div>
        </div>
    </div>

    <div class="form-grou row">
        <label for="veiculo_proprio" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Veículo Próprio:</label>
        <div class="col-sm-12 col-md-4">
            <select name="veiculo_proprio" id="veiculo_proprio" onchange="acionarVeiculosProprios();" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>

        <div id="veiculo_condutor_return" class="col-sm-12 col-md-6">
            <!-- return condutor tenha veículo próprio -->
        </div>

        <div id="veiculos_condutor_return"  class="col-12" style="margin-top:25px">
        
        </div>
        <div id="veiculos_adicionais" class="col-12" style="margin-top:25px">

        </div>
        
    </div>
    <hr>

    <div class="form-group row">
        <label for="vinculo_condutor" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Vínculo com condutor:</label>
        <div class="col-sm-12 col-md-9">
            <select name="vinculo_condutor" id="vinculo_condutor" class="form-control form-control-lg">
                <option value="">Selecione</option>
                <option value="Pai">Pai</option>
                <option value="Mãe">Mãe</option>
                <option value="Irmão">Irmão</option>
                <option value="Amigo">Amigo</option>
                <option value="Comercial">Comercial</option>
            </select>
        </div>
    </div>

    <hr>
    <div class="form-group row">
        <label for="midias_sociais_condutor" class="col-sm-12 col-md-6 col-form-label col-form-label-lg">
            Apontamentos pertinentes ao evento em mídias sociais?
        </label>
        <div class="col-sm-12 col-md-6">
            <select name="midias_sociais_condutor" id="midias_sociais_condutor" onchange="acionarUploadCondutor();" class="form-control form-control-lg">
                <option value=""selected disabled>Selecione</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
        </div>
    </div>

    <div id="apontamento_midias_sociais">
        <!-- Caso adicione apeontamento em redes sociais -->
    </div>
    <hr>
    <input type="hidden" name="passo5">
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