<form action="?Page=Relatorios&Cadastrar&Step=20" method="post" enctype="multipart/form-data">
    <h5 class="text-center">
        <u><span class="text-danger">Atenção: </span>
        Nessa sessão, você deve apontar o que diz a respeito dos registros do rastreador.</u>
    </h5>
    <br>

    <label 
        for="local_fatos" 
        class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left text-right"
    >
        Local dos fatos:
    </label>

    <div class="col-sm-12 col-md-3 float-left">
        <select name="local_fatos" id="local_fatos" class="form-control form-control-lg" required>
            <option value=""disabled selected>Selecione</option>
            <option value="1">Converge</option>
            <option value="2">Não Converge</option>
        </select>
    </div>

    
    <label 
        for="residencia_associado" 
        class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left"
    >
        Residência do Associado:
    </label>

    <div class="col-sm-12 col-md-3 float-left">
        <select 
            name="residencia_associado" 
            id="residencia_associado" 
            class="form-control form-control-lg" 
            required
        >
            <option value=""disabled selected>Selecione</option>
            <option value="1">Converge</option>
            <option value="2">Diverge</option>
        </select>
    </div>
    <div class="clearfix" style="margin:3% 0"></div>
    <label 
        for="apontamentos_irregulares" 
        class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left text-right"
    >
        Apontamentos Irregulares: 
    </label>

    <div class="col-sm-12 col-md-3 float-left">
        <select 
            name="apontamentos_irregulares" 
            id="apontamentos_irregulares" 
            class="form-control form-control-lg" 
            required
        >
            <option value=""disabled selected>Selecione</option>
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

    <label 
        for="print_telemetria" 
        class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left"
        style="cursor: pointer"
    >
        Print Telemetria: 
    </label>

    <div class="col-sm-12 col-md-4 float-left text-right">
        <input 
            type="file" 
            name="print_telemetria" 
            id="print_telemetria"
            style="display: none;"
        >
        <input 
            type="text" 
            name="file_telemetria" 
            id="file_telemetria"
            placeholder="Escolha o arquivo"
            class="form-control form-control-lg col-9 float-left"
            readonly
        >
        <button type="button" 
            class="btn-default form-control form-control-lg col-3 float-left"
            id="button-upload"
        >
            <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
    </div>

    <input type="hidden" name="cpf_associado" value="<?php echo $CPFAssociado?>">

    <div class="clearfix" style="margin:3% 0"></div>
    <hr>
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