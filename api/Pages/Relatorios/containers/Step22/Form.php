<form action="?Page=Relatorios&Cadastrar&Step=End" method="post" enctype="multipart/form-data">
    <h5 class="text-center">
        <u><span class="text-danger">Finalização</u>: </span><br>
        Esse é o fim do cadastro da sindicância, insira o contexto geral de forma coerente 
        para entregar todo o relatório.<br>
        Esse relatório poderá será entregue e <b>qualquer edição não será permitida</b>.
    </h5>
    <br>
    <div class="row">
        <label 
            for="contexto_geral" 
            class="col-sm-12 col-form-form-label col-form-label-lg float-left"
            id="contexto_geral"
        >
            Contexto Geral: 
        </label>
        <textarea 
            name="contexto_geral" 
            id="contexto_geral" 
            rows="5" 
            placeholder="Adicione o contexto geral para finalizar a entrega do relatório"
            class="form-control form-control-lg"
            required
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