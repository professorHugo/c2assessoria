<form action="?Page=Relatorios&Cadastrar&Step=15" method="post" enctype="multipart/form-data">
    <h4>Procedimentos Legais</h4>
    <div class="form-group row">
        <label 
            for="policia_militar" 
            class="col-sm-12 col-md-4 col-form-label col-form-label-lg"
        >Policia Militar Acionada (190)</label>
        <div class="col-sm-12 col-md-2">
            <select 
                name="policia_militar" 
                id="policia_militar" 
                class="form-control form-control-lg" 
                required="required"
                onchange="IniciarUploadMilitar()"
            >
                <option value="" selected disabled>Escolha</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6" id="return_policia_militar">
        <!-- Return Ajax -->
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label 
            for="policia_civil" 
            class="col-sm-12 col-md-4 col-form-label col-form-label-lg"
        >Policia Civil Acionada</label>
        <div class="col-sm-12 col-md-2">
            <select 
                name="policia_civil" 
                id="policia_civil" 
                class="form-control form-control-lg" 
                required="required"
                onchange="IniciarUploadCivil()"
            >
                <option value="" selected disabled>Escolha</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6" id="return_policia_civil">
        <!-- Return Ajax -->
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label 
            for="localizacao_orgaos_publicos" 
            class="col-sm-12 col-md-4 col-form-label col-form-label-lg"
        >Localização em Orgãos Públicos: </label>
        <div class="col-sm-12 col-md-2">
            <select 
                name="localizacao_orgaos_publicos" 
                id="localizacao_orgaos_publicos" 
                class="form-control form-control-lg" 
                required="required"
                onchange="IniciarUploadOrgaosPublicos()"
            >
                <option value="" selected disabled>Escolha</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6" id="return_localizacao_orgaos_publicos">
        <!-- Return Ajax -->
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label 
            for="boletim_ocorrencia" 
            class="col-sm-12 col-md-3 col-form-label col-form-label-lg"
        >Boletim de Ocorrência: </label>
        <div class="col-sm-12 col-md-2">
            <select 
                name="boletim_ocorrencia" 
                id="boletim_ocorrencia" 
                class="form-control form-control-lg" 
                required="required"
                onchange="IniciarUploadBO()"
            >
                <option value="" selected disabled>Escolha</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-7" id="return_boletim_ocorrencia">
        <!-- Return Ajax -->
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label 
            for="registro_sinesp" 
            class="col-sm-12 col-md-3 col-form-label col-form-label-lg"
        >Registro no SINESP: </label>
        <div class="col-sm-12 col-md-2">
            <select 
                name="registro_sinesp" 
                id="registro_sinesp" 
                class="form-control form-control-lg" 
                required="required"
                onchange="IniciarUploadSinesp()"
            >
                <option value="" selected disabled>Escolha</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-7" id="return_registro_sinesp">
        <!-- Return Ajax -->
        </div>
    </div>
    
    <hr>
    <div class="clearfix" style="margin: 5px 0"></div>
    <div class="form-group row">
        <div class="col-sm-12 col-md-4">
            <a href="?url=Relatorios" class="btn btn-outline-secondary btn-lg btn-block">Cancelar</a>
        </div>
        <div class="col-sm-12 col-md-4"></div>
        <div class="col-sm-12 col-md-4">
            <button class="btn btn-outline-primary btn-lg btn-block">Próximo</button>
        </div>
    </div>
</form>