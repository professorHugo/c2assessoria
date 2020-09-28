<form action="?Page=Relatorios&Cadastrar&Step=21" method="post" enctype="multipart/form-data">
    <h5 class="text-center">
        <span class="text-danger">Atenção: </span>
        Nessa sessão, você deve apontar se o condutor fez uso de aplicativo de mobilidade urbana <br> 
        (Uber, Cabify, 99, Etc.).
    </h5>
    <br>
    <div class="row">

        <label 
            for="comprovante_mobilidade" 
            class="col-sm-12 col-md-6 col-form-label col-form-label-lg float-left"
        >Apresentou comprovante de mobilidade: 
        </label>
        <div class="col-sm-12 col-md-6 float-left">
            <select 
                name="comprovante_mobilidade" 
                id="comprovante_mobilidade" 
                class="form-control form-control-lg"
                required
                onchange="CarregarMobilidade();CarregarMobilidade2()"
            >
                <option value="" disabled selected>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>

    </div>
    <div class="clearfix" style="margin-bottom: 2%"></div>
    <div id="return_comprovante_mobilidade1" class="row">
        <!-- Retorno do ajax 1 -->
        
    </div>
    
    <div style="margin-bottom: 2%"></div>
    <div class="row" id="return_comprovante_mobilidade2">
        <!-- Retorno do ajax 2 -->
        
    </div>
    <div style="margin-bottom: 3%"></div>
    
    <div class="row" id="return_end_mobilidade">
        <!-- Return do ajax 3 -->
    </div>
    <div class="row" id="Observacoes">
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
            placeholder="Caso queira, adicione observações relevantes"
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
<div class="clearfix"></div>