<form action="?url=Relatorios&Cadastrar=Cadastro&Step=9" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Vistoria Cautelar</h5>
        </div>
        <label for="vistoria_realizada" class="col-sm-12 col-md-4 col-form-label col-form-label-lg">
            O Veículo realizou vistoria Cautelar?
        </label>
        <div class="col-sm-12 col-md-8">
            <select 
                name="vistoria_realizada" 
                id="vistoria_realizada" 
                class="form-control form-control-lg" 
                onchange="carregarVistoria()"
                required
            >
                <option value="" selected disabled>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
    </div>
    <div class="clearfix" style="margin:2% 0"></div>
    <div class="form-group row" id="return_vistoria_realizada">
    <!-- Return Ajax -->
    </div>
    <!-- Observação da Vistoria -->
    <div class="row col-12 align-items-center" style="margin-top:15px;margin-bottom:15px">
            <div class="col-sm-12 col-md-2 float-left">
                <label for="observacao_vistoria" class="col-form-label col-form-label-lg">Observação: </label>
            </div>
            <div class="col-sm-12 col-md-10 float-left">
                <textarea 
                name="observacao_vistoria" 
                id="observacao_vistoria" 
                class="form-control" 
                cols="33" 
                rows="5"
                placeholder="Digite toda e qualquer observação que seja necesária a respeito da vistoria cautelar do veículo"
                ></textarea>
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