<form action="?Page=Relatorios&Cadastrar&Step=3" method="post">
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
    <div class="form-grou row">
        
        
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
            <select name="marca_veiculo" id="marca_veiculo" class="form-control form-control-lg" required>
            <option value="" selected disabled>Selecione a marca</option>
            <?php
                $QueryBuscarMarcas = "SELECT * FROM tb_marcas_veiculos";
                $ExeQrBuscarMarcas = mysqli_query($connection, $QueryBuscarMarcas);
                while($ResBuscarMarcas = mysqli_fetch_assoc($ExeQrBuscarMarcas)){
                ?>
                    <option value="<?php echo $ResBuscarMarcas['nome_marca']?>">
                        <?php echo $ResBuscarMarcas['nome_marca']?>
                    </option>
                <?php
                }
            ?>
            </select>
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