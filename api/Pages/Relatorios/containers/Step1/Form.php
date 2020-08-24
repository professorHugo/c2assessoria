<form action="?Page=Relatorios&Cadastrar&Step=2" method="post">
    <div class="form-group row">
        <label for="solicitante" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Solicitante</label>
        <div class="col-sm-12 col-md-10">
            <select name="solicitante" id="solicitante" class="form-control form-control-lg" placeholder="City" required="required">
            <option value="" selected disabled>Escolha o solicitante</option>
            <?php
                $QueryBuscarClientes = "SELECT * FROM tb_clientes";
                $ExeQrBuscarClientes = mysqli_query($connection, $QueryBuscarClientes);
                if(mysqli_num_rows($ExeQrBuscarClientes) >= 1){
                    while($RClientes = mysqli_fetch_assoc($ExeQrBuscarClientes)){
                        ?>
                        <option value="<?php echo $RClientes['id_cliente']?>">
                        <?php echo $RClientes['nome_cliente']?>
                        </option>
                        <?php
                    }
                }
            ?>
            </select>
        </div>
    </div>
    <div class="form-grou row">
        <label for="protocolo_evento" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Protocolo</label>
        <div class="col-xs-12 col-md-4">
            <input type="text" id="protocolo_evento" name="protocolo_evento" class="form-control form-control-lg" placeholder="Protocolo" required>
        </div>
        <label for="natureza_evento" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Natureza</label>
        <div class="col-xs-12 col-md-4">
            <select name="natureza_evento" id="natureza_evento" class="form-control form-control-lg" required>
                <option value="" selected disabled>Natureza</option>
                <?php
                $QueryBuscarNaturezas = "SELECT * FROM tb_natureza_evento";
                $ExeQrBuscarNaturezas = mysqli_query($connection,$QueryBuscarNaturezas);
                if(mysqli_num_rows($ExeQrBuscarNaturezas) >= 1){
                    while($RNaturezas = mysqli_fetch_assoc($ExeQrBuscarNaturezas)){
                        ?>
                        <option value="<?php echo $RNaturezas['id_natureza']?>">
                        <?php echo $RNaturezas['descricao_natureza']?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <hr>
    <!-- Buscar dados do associado pelo CPF -->
    <div class="form-group row">
        <h5 class="col-12">Associado: </h5>
        <label for="cpf_associado" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">CPF:</label>
        <div class="col-xs-12 col-md-4">
            <input type="number" id="cpf_associado" onkeyup="buscarAssociado();" name="cpf_associado" class="form-control form-control-lg" placeholder="Apenas os números" required>
        </div>
        <label for="nome_associado" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Nome:</label>
        <div class="col-xs-12 col-md-4" id="nome_associado_return">
            <input type="hidden" name="nome_associado" id="nome_associado_return" class="sr-only">
            <input type="text" id="nome_associado_return" disabled class="form-control form-control-lg" placeholder="Aguardando CPF...">
        </div>
    </div>
    <div class="clearfix" style="margin:6% 0"></div>
    <div class="form-group row">
        <div class="col-xs-12 col-md-6">
            <a href="?url=Relatorios" class="btn btn-outline-secondary btn-lg btn-block">Cancelar</a>
        </div>
        <div class="col-xs-12 col-md-6">
            <button class="btn btn-outline-primary btn-lg btn-block">Próximo</button>
        </div>
    </div>
</form>