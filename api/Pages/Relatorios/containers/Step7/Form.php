<form action="?Page=Relatorios&Cadastrar&Step=8" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Apontamentos no Detran</h5>
        </div>
        <label for="evento_multa_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">
            Multa pertinente ao evento:
        </label>
        <div class="col-sm-12 col-md-3">
            <select 
                name="evento_multa_veiculo" 
                id="evento_multa_veiculo" 
                class="form-control form-control-lg" 
                onchange="carregarMulta()"
                required
            >
                <option value="" selected disabled>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        
        <div class="col-sm-12 col-md-6" id="return_evento_multa_veiculo">
        <!-- Retorno Ajax -->
        </div>
        <div class="clearfix" style="margin-top:7%"></div>


        <label for="restricoes_diversas" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">
            Restriçoes Diversas
        </label>
        <div class="col-sm-12 col-md-3">
            <select 
            name="restricoes_diversas" 
            id="restricoes_diversas" 
            class="form-control form-control-lg" 
            onchange="carregarRestricao()"
            required
            
            >
                <option value="" disabled selected>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6" id="return_restricoes_diversas">
        <!-- Retorno Ajax -->
        </div>
        <div class="clearfix" style="margin-top:7%"></div>


        <label for="restricoes_financeiras" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">
            Restrições Financeiras
        </label>
        <div class="col-sm-12 col-md-3">
            <select 
            name="restricoes_financeiras" 
            id="restricoes_financeiras" 
            class="form-control form-control-lg"
            onchange="carregarRestricoesF()"
            required
            >
                <option value="" selected disabled>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6" id="return_restricoes_financeiras">
        <!-- Retorno Ajax -->
        </div>
        <div class="clearfix" style="margin-top:7%"></div>


        <label for="queixa_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">
            Queixa Registrada
        </label>
        <div class="col-sm-12 col-md-3">
            <select 
            name="queixa_veiculo" 
            id="queixa_veiculo" 
            class="form-control form-control-lg"
            onchange="carregarQueixa()"
            >
                <option value="" selected disabled>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6" id="return_queixa_veiculo">
        <!-- Retorno Ajax -->
        </div>
    </div>

    <hr>
    
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