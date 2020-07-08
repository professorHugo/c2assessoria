<form action="?url=Relatorios&Cadastrar=Cadastro&Step=4" method="post">
    <div class="form-group row">
        <div class="col-12">
            <h5>Evento</h5>
        </div>
        <label for="data_evento" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Data:</label>
        <div class="col-sm-12 col-md-4">
            <input type="date" name="data_evento" id="data_evento" class="form-control form-control-lg" required>
        </div>
        <label for="horario_evento" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Horário</label>
        <div class="col-xs-12 col-md-4">
            <input type="time" id="horario_evento" name="horario_evento" class="form-control form-control-lg" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="cep_evento" onkeyup="" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">CEP:</label>
        <div class="col-sm-11 col-md-2">
            <input type="number" placeholder="00000000" name="cep_evento" id="cep_evento" class="form-control form-control-lg" required>
        </div>
        <div class="col-sm-1 col-md-1 align-items-center" style="cursor:pointer">
            <i class="fa fa-search form-control-lg"></i>
        </div>
        <label for="endereco_evento" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Endereço:</label>
        <div class="col-sm-12 col-md-5">
            <input type="hidden" name="endereco_evento" id="endereco_evento" value="" required>
            <input type="text" name="endereco_ev_exibir" placeholder="Aguardando CEP..." disabled id="endereco_ev_exibir" class="form-control form-control-lg" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="bairro_evento" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Bairro:</label>
        <div class="col-sm-12 col-md-3">
            <input type="hidden" name="bairro_evento" id="bairro_evento">
            <input type="text" class="form-control form-control-lg" name="bairro_evento_exibir" id="bairro_evento_exibir" placeholder="Aguardando CEP..." disabled>
        </div>
        <label for="cidade_evento" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Cidade:</label>
        <div class="col-sm-12 col-md-4">
            <input type="hidden" name="cidade_evento" id="cidade_evento">
            <input type="text" disabled placeholder="Aguardando CEP..." class="form-control form-control-lg" name="cidade_evento_exibir" id="cidade_evento_exibir" >
        </div>
        <div class="col-sm-12 col-md-1">
            <input type="hidden" name="estado_evento" id="estado_evento">
            <input type="text" disabled placeholder="..." class="form-control form-control-lg" name="estado_evento_exibir" id="estado_evento_exibir" >
        </div>
    </div>
    <hr>
    
    <div class="clearfix" style="margin:6% 0"></div>
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