<link rel="stylesheet" href="../vendor/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" type="text/css" media="all">
<form action="?Page=Relatorios&Cadastrar&Step=3" method="post" id="form">
    <div class="form-group row">
        <label for="condutor_select" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Condutor:</label>
        <div class="col-sm-12 col-md-4">
            <select name="condutor_select" onchange="escolhaCondutor();" id="condutor_select" name="condutor_select" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="1">Associado</option>
                <option value="2">Outro</option>
            </select>
        </div>
        <label for="nome_condutor" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Nome: </label>
        <div class="col-xs-12 col-md-4" id="escolha_condutor_return">
            <input type="text" id="nome_condutor" name="nome_condutor" class="form-control form-control-lg" disabled placeholder="Escolha o condutor">
        </div>
    </div>
    
    <hr>

    
    <div class="form-group row">
        <h5 class="col-12">Dados do Veículo: </h5>
        <label for="placa_veiculo" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Placa:</label>
        <div class="col-xs-12 col-md-4">
            <input type="text" id="placa_veiculo" name="placa_veiculo" class="form-control form-control-lg" placeholder="ABC1234" required>
        </div>
        <label for="marca_veiculo" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Marca:</label>
        <div class="col-xs-12 col-md-4">
            
            <input type="text" name="marca_veiculo" id="marca_veiculo" placeholder="Digite a marca" class="form-control form-control-lg" required>

        </div>
        <div class="clearfix"></div>
        <label for="modelo_veiculo" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
        <div class="col-12">
            <input type="text" id="modelo_veiculo" name="modelo_veiculo" class="form-control form-control-lg" required>
        </div>
    </div>
    <div class="clearfix" style="margin:4% 0"></div>
    <div 
        class="form-group row"
        style="display:flex; align-content: space-between;justify-items: center;"
    >
        <div class="col-xs-12 col-md-4">
            <a href="?url=Relatorios" class="btn btn-outline-danger btn-lg btn-block">Cancelar</a>
        </div>
        <div class="col-xs-12 col-md-4"></div>
        <div class="col-xs-12 col-md-4">
            <button class="btn btn-outline-primary btn-lg btn-block">Próximo</button>
        </div>
    </div>
</form>

<script src="../vendor/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" integrity="sha256-tp8VZ4Y9dg702r7D6ynzSavKSwB9zjariSZ4Snurvmw=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/Step2/Autocomplete-Marcas.js"></script>