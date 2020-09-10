<form action="?Page=Relatorios&Cadastrar&Step=11" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Situação Financeira do Veículo</h5>
        </div>
        <div class="col-12">
            <label for="instituicao_financeira" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Instituição: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input type="text" 
                    class="form-control form-control-lg" 
                    placeholder="Digite o nome da instituição"
                    id="instituicao_financeira"
                    name="instituicao_financeira"
                >
            </div>
            <label for="total_parcelas" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Total de Parcelas
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select name="total_parcelas" id="total_parcelas" class="form-control form-control-lg">
                <option value="" selected disabled>Parcelas</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
                <option value="50">50</option>
                </select>
            </div>
            <div class="col-12 float-left" style="margin-top:15px"></div>
            <label for="valor_parcela" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Valor: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input type="text" 
                    class="form-control form-control-lg" 
                    placeholder="Somente o valor (100,00)"
                    id="valor_parcela"
                    name="valor_parcela"
                >
            </div>
            <label for="parcelas_pagas" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Pagas: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input type="number" 
                    class="form-control form-control-lg" 
                    placeholder="Quantidade Paga"
                    id="parcelas_pagas"
                    name="parcelas_pagas"
                >
            </div>

            <div class="col-12 float-left" style="margin-top:15px"></div>

            <label for="situacao_financeira" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Sitação: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select type="number" 
                    class="form-control form-control-lg" 
                    id="situacao_financeira"
                    name="situacao_financeira"
                    onchange="SituacaoFinanceira()"
                >
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">ADIMPLÊNCIA</option>
                    <option value="2">INADIMPLÊNCIA</option>
                </select>
            </div>
            <div id="return_situacao_financeira"></div>
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