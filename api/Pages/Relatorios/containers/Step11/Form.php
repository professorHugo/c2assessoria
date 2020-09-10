<form action="?Page=Relatorios&Cadastrar&Step=12" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Características</h5>
        </div>
        <div class="col-12">
            <label for="zona_evento" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Tipo de Zona: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select 
                    class="form-control form-control-lg" 
                    id="zona_evento"
                    name="zona_evento"
                    required
                >
                    <option value="" disabled selected>Escolha</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                    <option value="3">Mista</option>
                </select>
            </div>
            <label for="indice_criminalidade" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">
                Índice de Criminalidade
            </label>
            <div class="col-sm-12 col-md-3 float-left">
                <select 
                    name="indice_criminalidade" 
                    id="indice_criminalidade" 
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Alto</option>
                    <option value="2">Médio</option>
                    <option value="3">Baixo</option>
                </select>
            </div>

            <div class="col-12 float-left" style="margin-top:15px"></div>
            

            <label 
                for="fluxo_pedestres" 
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left"
                style="font-size: 1.1rem"
            >
                Fluxo de Pedestres: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select 
                    name="fluxo_pedestres" 
                    id="fluxo_pedestres" 
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Alto</option>
                    <option value="2">Médio</option>
                    <option value="3">Baixo</option>
                </select>
            </div>

            <div class="col-12" style="margin-top:15px"></div>


            <label for="caracteristicas_via" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">
                Características da Via: 
            </label>
            <div class="col-sm-12 col-md-3 float-left">
                <select 
                    name="caracteristicas_via" 
                    id="caracteristicas_via" 
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Pavimentada</option>
                    <option value="2">Não Pavimentada</option>
                </select>
            </div>

            <div class="col-12 float-left" style="margin-top:15px"></div>


            <label for="classificacao_regiao" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">
                Classificação da Região: 
            </label>
            <div class="col-sm-12 col-md-3 float-left">
                <select 
                    name="classificacao_regiao" 
                    id="classificacao_regiao" 
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Média/Alta</option>
                    <option value="2">Popular</option>
                    <option value="3">Comunidade</option>
                </select>
            </div>

            <label for="per_estacionar" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">
                Permitido Estacionar: 
            </label>
            <div class="col-sm-12 col-md-3 float-left">
                <select 
                    name="per_estacionar" 
                    id="per_estacionar" 
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" selected disabled>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="3">Não se aplica</option>
                </select>
            </div>
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