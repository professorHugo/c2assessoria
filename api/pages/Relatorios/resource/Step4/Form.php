<form action="?url=Relatorios&Cadastrar=Cadastro&Step=<?php echo $PassoCadastroSindicancia?>" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>Perfil do Associado(a)</h5>
        </div>
        <label for="estado_civil" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Estado Civil:</label>
        <div class="col-sm-12 col-md-4">
            <select name="estado_civil" id="estado_civil" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viuvo(a)">Viuvo(a)</option>
                <option value="Uniao Estável">União Estável</option>
            </select>
        </div>
        <label for="profissao_associado" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">Profissão</label>
        <div class="col-xs-12 col-md-4">
        <?php
            $CPF = $_SESSION['CadastroSindicancia1'][4];
            $QueryBuscarProfissao = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";
            $ExeQrBuscarProfissao = mysqli_query($connection, $QueryBuscarProfissao);
            $RowQrBuscarProfissao = mysqli_num_rows($ExeQrBuscarProfissao);

            if($RowQrBuscarProfissao >= 1){
                while($ReturnProfissao = mysqli_fetch_assoc($ExeQrBuscarProfissao)){
                ?>
                <input class="form-control form-control-lg" type="text" name="profissao_associado" value="<?php echo $ReturnProfissao['profissao_associado']?>" required>
                <?php
                }
            }
        ?>
        </div>
    </div>
    <hr>
    <div class="form-grou row">
        <label for="outro_veiculo" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Outro Veículo:</label>
        <div class="col-sm-12 col-md-4">
            <select name="outro_veiculo" onchange="acionarVeiculosAdicionais();" id="outro_veiculo" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>
        <div id="quantidadeReturn" class="col-sm-12 col-md-6">
            <!-- Caso tenha veículos adicionais -->
        </div>
        

        <div id="veiculos_adicionais" class="col-12" style="margin-top:25px">
            <!-- Caso tenha veículos adicionais -->
        </div>
    </div>
    <hr>
    
    <div class="form-group row">
        <label for="midias_sociais_associado" class="col-sm-12 col-md-6 col-form-label col-form-label-lg">
            Apontamentos pertinentes ao evento em mídias sociais?
        </label>
        <div class="col-sm-12 col-md-6">
            <select name="midias_sociais_associado" id="midias_sociais_associado" onchange="acionarUpload();" class="form-control form-control-lg">
                <option value=""selected disabled>Selecione</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
        </div>
    </div>
    <div id="apontamento_midias_sociais">
        <!-- Caso adicione apeontamento em redes sociais -->
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