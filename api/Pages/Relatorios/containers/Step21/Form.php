<form action="?Page=Relatorios&Cadastrar&Step=22" method="post" enctype="multipart/form-data">
    <h5 class="text-center">
        <u><span class="text-danger">Atenção</u>: </span><br>
        Nessa sessão, você deve apontar se o condutor do veículo já fez usos anteriores de aplicativos
        de mobilidade urbana (Uber, Cabify, 99, Etc.).
        Também deve apontar se o contudor é motorista desses aplicativos
    </h5>
    <br>
    <div class="row">
        <label 
            for="registro_mobilidade" 
            class="col-sm-12 col-md-6 col-form-label col-form-label-lg float-left"
        >Registro Anteriores: 
        </label>
        <div class="col-sm-12 col-md-6 float-left">
            <select 
                name="registro_mobilidade" 
                id="registro_mobilidade" 
                class="form-control form-control-lg"
                required
                onchange="RegistroMobilidade();"
            >
                <option value="" disabled selected>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
    </div>
    <div class="clearfix" style="margin-bottom: 2%"></div>
    <div class="row" id="return_registro_mobilidade">
        <!-- Return Registro Mobilidade -->
    </div>

    <div class="clearfix" style="margin-bottom: 2%"></div>
    <div class="row" id="return_motorista_app">
        <!-- Return Motorista App -->
    </div>
    
    <div class="clearfix" style="margin-bottom: 2%"></div>
    <div class="row">
        <label 
            for="observacoes" 
            class="col-sm-12 col-form-form-label col-form-label-lg float-left"
            id="observacoes"
        >
            Observações: 
        </label>
        <textarea 
            name="observacoes" 
            id="observacoes" 
            rows="5" 
            placeholder="Adicione o contexto geral para finalizar a entrega do relatório"
            class="form-control form-control-lg"
        ></textarea>
    </div>
    <div class="clearfix"></div>
    <hr style="width: 100%">

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