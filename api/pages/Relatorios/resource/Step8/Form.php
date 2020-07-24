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
    <div class="clearfix" style="margin:6% 0"></div>
    <div class="form-group row" id="return_vistoria_realizada">
    <!-- Return Ajax -->
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