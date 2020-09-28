<form 
action="?Page=Relatorios&Cadastrar&Step=<?php echo $PassoCadastroSindicancia?>" 
method="post"
enctype="multipart/form-data"
>

<div class="form-group row">
    <div class="col-12">
        <h5 style="border-bottom: 1px solid #ddd">Perfil do Associado</h5>
    </div>
    <label for="estado_civil" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">
        Estado Civil: 
    </label>
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

    <label for="profissao_associado" class="col-xs-12 col-md-2 col-form-label col-form-label-lg">
        Profissão
    </label>

    <div class="col-xs-12 col-md-4">
        <?php
            $CPF = $_SESSION['PastaAssociado'];
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
    <div class="col-12" style="margin-top: 1rem"></div>
    <div class="col-12">
        <h5 style="border-bottom: 1px solid #ddd">Domicílio:</h5>
        <div class="form-group row">
            <label for="cep_associado" class="col-xs-12 col-md-2 col-form-label col-form-label-lg float-left">
                CEP: 
            </label>
            <div class="col-sm-11 col-md-2 float-left">
                <input type="number" placeholder="00000000" name="cep_associado" id="cep_associado" class="form-control form-control-lg" required>
            </div>
            <div class="col-sm-1 col-md-1 align-items-center float-left" style="cursor:pointer">
                <i class="fa fa-search form-control-lg"></i>
            </div>
            <label for="endereco_associado" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">Endereço:</label>
            <div class="col-sm-10 col-md-4 float-left">
                <input type="hidden" name="endereco_associado" id="endereco_associado" value="" required>
                <input type="text" name="endereco_associado_exibir" placeholder="Aguardando CEP..." disabled id="endereco_associado_exibir" class="form-control form-control-lg">
            </div>
            <div class="col-sm-2 col-md-1 float-left">
                <input type="text" name="numero_associado" placeholder="Nº" class="form-control form-control-lg">
            </div>
        </div>
        <div class="form-group row">
            <label for="bairro_associado" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Bairro:</label>
            <div class="col-sm-12 col-md-3">
                <input type="hidden" name="bairro_associado" id="bairro_associado">
                <input type="text" class="form-control form-control-lg" name="bairro_associado_exibir" id="bairro_associado_exibir" placeholder="Aguardando CEP..." disabled>
            </div>
            <label for="cidade_associado" class="col-sm-12 col-md-2 col-form-label col-form-label-lg">Cidade:</label>
            <div class="col-sm-12 col-md-4">
                <input type="hidden" name="cidade_associado" id="cidade_associado">
                <input type="text" disabled placeholder="Aguardando CEP..." class="form-control form-control-lg" name="cidade_associado_exibir" id="cidade_associado_exibir" >
            </div>
            <div class="col-sm-12 col-md-1">
                <input type="hidden" name="estado_associado" id="estado_associado">
                <input type="text" disabled placeholder="..." class="form-control form-control-lg" name="estado_associado_exibir" id="estado_associado_exibir" >
            </div>
        </div>
    </div>
    
</div>
<hr>
<div class="form-group row">
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
<hr>

<div class="clearfix" style="margin:3% 0"></div>
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