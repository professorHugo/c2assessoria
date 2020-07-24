<form action="?url=Relatorios&Cadastrar=Cadastro&Step=7" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Procedência do Veículo</h5>
        </div>
        <label for="proprietario_legal" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Proprietario Legal:</label>
        <div class="col-sm-12 col-md-3">
            <select name="proprietario_legal" onchange="proprietarioChange();" id="proprietario_legal" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="1">Associado(a)</option>
                <option value="2">Terceiros</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="form-group row" id="return_proprietario">
        <div id="return_vinculo" class="col-12">
            <!-- Selecionar Vínculo, caso tenha -->
            <label for="nome_proprietario_veiculo" class="col-sm-12 col-md-12 col-form-label col-form-label-lg float-left">Nome do Proprietário: </label>
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label for="dut_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Documento/DUT</label>
        <div class="col-sm-12 col-md-3">
            <input type="number" placeholder="Apenas Números" id="dut_veiculo" name="dut_veiculo" class="form-control form-control-lg">
        </div>
        <label for="proprietario_anterior" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Propr. Anterior:</label>
        <div class="col-sm-12 col-md-4">
            <input type="text" name="proprietario_anterior" placeholder="Nome Completo" id="proprietario_anterior" class="form-control form-control-lg">
        </div>

        <div class="col-12" style="margin-top:15px"></div>

        <label for="procedente_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Procedente: </label>
        <div class="col-sm-12 col-md-3">
            <select name="procedente_veiculo" onchange="carregarProcedente();" id="procedente_veiculo" required class="form-control form-control-lg">
                <option value="" disabled selected>Selecione</option>
                <option value="0">Não Apresentou</option>
                <option value="1">Loja</option>
                <option value="2">Particular</option>
                <option value="3">Leilão</option>
            </select>
        </div>
        <div class="input-group col-sm-12 col-md-6" id="return_procedente">
            <!-- Carregar Foto Procedente -->
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label for="chaves_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Chaves Apresentadas</label>
        <div class="col-sm-12 col-md-3">
            <select name="chaves_apresentadas" onchange="carregarFotoChave()" id="chaves_apresentadas" class="form-control form-control-lg">
                <option value="" disabled selected>Selecione</option>
                <option value="1">De Uso</option>
                <option value="2">Reserva</option>
                <option value="3">Não Apresentou</option>
            </select>
        </div>
        <div class="input-group col-sm-12 col-md-6" id="return_chaves_apresentadas">
            <!-- Carregar Foto Chaves Apresentada -->
        </div>

        <div class="col-12" style="margin-top:15px"></div>
        
        <label for="sistema_anti_furto" class="col-sm-12 col-md-3 col-form-label col-form-label-lg">Sistema Anti-Furto:</label>
        <div class="col-sm-12 col-md-3">
            <select name="sistema_anti_furto" onchange="carregarPrintRastreador();" id="sistema_anti_furto" class="form-control form-control-lg">
                <option value="" disabled selected>Selecione</option>
                <option value="0">Não Há</option>
                <?php
                $QueryBuscarSisAntiFurto = "SELECT * FROM tb_sistemas_anti_furto";
                $ExeQrBuscarSisAntiFurto = mysqli_query($connection, $QueryBuscarSisAntiFurto);
                $RowQrBuscarSisAntiFurto = mysqli_num_rows($ExeQrBuscarSisAntiFurto);
                if($RowQrBuscarSisAntiFurto >= 1){
                    while($ReturnSisAntiFurto = mysqli_fetch_assoc($ExeQrBuscarSisAntiFurto)){
                    ?>
                        <option value="<?php echo $ReturnSisAntiFurto['id_sistema']?>">
                            <?php echo $ReturnSisAntiFurto['tipo_sistema']?>
                        </option>
                    <?php
                    }
                }
                ?>
            </select>
        </div>
        <div id="return_sistema_anti_furto" class="input-group col-sm-12 col-md-6">
            <!-- Carregar Sistema Anti Furto -->
            
            
        </div>
    </div>

    <hr>
    
    <div class="clearfix" style="margin:3% 0"></div>
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