<form action="?url=Relatorios&Cadastrar=Cadastro&Step=10" method="post" enctype="multipart/form-data">
    <!-- Buscar dados no banco, caso tenha o cadastro do associado -->
    <div class="form-group row">
        <div class="col-12">
            <h5>CNH do condutor do veículo</h5>
        </div>
        <div class="col-12">
            <label for="cnh_condutor" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                Situação da CNH
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select 
                    name="cnh_condutor" 
                    id="cnh_condutor" 
                    class="form-control form-control-lg"
                    required
                    onchange="carregarCNHCondutor()"
                >
                <option value="" selected disabled>Selecione</option>
                <option value="1">Valida</option>
                <option value="2">Vencida</option>
                <option value="3">Suspensa</option>
                <option value="4">Cassada</option>
                <option value="5">Não Habilitado</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6 float-left" id="return_cnh_condutor">
            <!-- Return Ajax -->
            </div>
        </div>
    </div>

    <hr>
<?php
    //Buscar Relatório para analisar o condutor e apresentar 2 documentos caso seja diferente do associado
    $QueryBuscarCondutor = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
    $ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);
    $RowQrByscarCondutor = mysqli_num_rows($ExeQrBuscarCondutor);
    if($RowQrByscarCondutor >= 1){
        while($ResCondutor = mysqli_fetch_assoc($ExeQrBuscarCondutor)){
            if($ResCondutor['condutor_veiculo'] == 2){
            ?>
            <div class="form-group row">
                <div class="col-12">
                    <h5>CNH do Associado</h5>
                </div>
                <div class="col-12">
                    <label for="cnh_associado" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
                        Situação da CNH
                    </label>
                    <div class="col-sm-12 col-md-4 float-left">
                        <select 
                            name="cnh_associado" 
                            id="cnh_associado" 
                            class="form-control form-control-lg"
                            required
                            onchange="carregarCNHAssociado()"
                        >
                        <option value="" selected disabled>Selecione</option>
                        <option value="1">Valida</option>
                        <option value="2">Vencida</option>
                        <option value="3">Suspensa</option>
                        <option value="4">Cassada</option>
                        <option value="5">Não Habilitado</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 float-left" id="return_cnh_associado">
                    <!-- Return Ajax -->
                    </div>
                </div>
            </div>
            <?php
            }
        }

    }
?>
    

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