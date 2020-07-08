<form action="?url=Relatorios&Cadastrar=Cadastro&Step=6" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Perfil do Condutor(a)</h5>
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
    <hr>
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
        <label for="vinculo_associado" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Vínculo com Associado:</label>
        <div class="col-sm-12 col-md-9">
            <select name="vinculo_associado" id="vinculo_associado" class="form-control form-control-lg">
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
        <div class="col-xs-12 col-md-4">
            <button type="button" class="btn btn-outline-warning btn-lg btn-block" name="salvar_step2">
                <span>
                    Salvar
                </span>
            </button>
        </div>
        <div class="col-xs-12 col-md-4">
            <button class="btn btn-outline-success btn-lg btn-block">Próximo</button>
        </div>
    </div>
</form>