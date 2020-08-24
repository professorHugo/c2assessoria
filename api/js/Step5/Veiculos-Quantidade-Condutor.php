<?php
if(isset($_GET['Quantidade'])){
    $Quantidade = $_GET['Quantidade'];
    sleep(1);

    if($Quantidade == 1){
    ?>
        <hr>
        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12">Dados do Veículo 1: </h6>
            <label for="placa_veiculo1_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="BBB1111" id="placa_veiculo1_condutor" name="placa_veiculo1_condutor" class="form-control form-control-lg" placeholder="ABC1234" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="marca_veiculo1_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="VW" id="marca_veiculo1_condutor" name="marca_veiculo1_condutor" class="form-control form-control-lg" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo1_condutor" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
            <div class="col-12">
                <input type="text" value="GOL" id="modelo_veiculo1_condutor" name="modelo_veiculo1_condutor" class="form-control form-control-lg" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo1_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo1_condutor" id="seguro_veiculo1_condutor" class="form-control form-control-lg" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>

        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px;">
        <div class="form-group row" style="display:none">
            <h6 class="col-12">Dados do Veículo 2: </h6>
            <label for="placa_veiculo2_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="hidden" value="null" id="placa_veiculo2_condutor" name="placa_veiculo2_condutor" class="form-control form-control-lg" placeholder="ABC1234">
            </div>
        </div>


        <div class="form-group row">
            <label for="marca_veiculo2_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg" style="display:none">Marca:</label>
            <div class="col-xs-12 col-md-12" style="display:none">
                <input type="hidden" value="null" id="marca_veiculo2_condutor" name="marca_veiculo2_condutor" class="form-control form-control-lg" >
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo2_condutor" class="col-12 col-form-label col-form-label-lg" style="display:none">Modelo:</label>
            <div class="col-12" style="display:none">
                <input type="hidden" value="null" id="modelo_veiculo2_condutor" name="modelo_veiculo2_condutor" class="form-control form-control-lg" >
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo2_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg" style="display:none">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo2_condutor" id="seguro_veiculo2_condutor" class="form-control form-control-lg" style="display:none">
                    <option value="null">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>
        
        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12" style="display:none">Dados do Veículo 3: </h6>
            <label for="placa_veiculo3_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg" style="display:none">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="hidden" value="null" id="placa_veiculo3_condutor" name="placa_veiculo3_condutor" class="form-control form-control-lg" placeholder="">
            </div>
        </div>

        <div class="form-group row">
            <label for="marca_veiculo3_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg" style="display:none">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="hidden" value="null" id="marca_veiculo3_condutor" name="marca_veiculo3_condutor" class="form-control form-control-lg" >
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo3_condutor" class="col-12 col-form-label col-form-label-lg" style="display:none">Modelo:</label>
            <div class="col-12">
                <input type="hidden" value="null" id="modelo_veiculo3_condutor" name="modelo_veiculo3_condutor" class="form-control form-control-lg">
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo3_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg" style="display:none">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo3_condutor" id="seguro_veiculo3_condutor" class="form-control form-control-lg" style="display:none">
                    <option value="null">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>
    <?php
    }
    
    if($Quantidade == 2){
    ?>
        <hr>
        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12">Dados do Veículo 1: </h6>
            <label for="placa_veiculo1_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="BBB1111" id="placa_veiculo1_condutor" name="placa_veiculo1_condutor" class="form-control form-control-lg" placeholder="ABC1234" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="marca_veiculo1_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="VW" id="marca_veiculo1_condutor" name="marca_veiculo1_condutor" class="form-control form-control-lg" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo1_condutor" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
            <div class="col-12">
                <input type="text" value="GOL" id="modelo_veiculo1_condutor" name="modelo_veiculo1_condutor" class="form-control form-control-lg" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo1_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo1_condutor" id="seguro_veiculo1_condutor" class="form-control form-control-lg" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>

        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12">Dados do Veículo 2: </h6>
            <label for="placa_veiculo2_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="BBB2222" id="placa_veiculo2_condutor" name="placa_veiculo2_condutor" class="form-control form-control-lg" placeholder="ABC1234" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="marca_veiculo2_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="FIAT" id="marca_veiculo2_condutor" name="marca_veiculo2_condutor" class="form-control form-control-lg" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo2_condutor" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
            <div class="col-12">
                <input type="text" value="PALIO" id="modelo_veiculo2_condutor" name="modelo_veiculo2_condutor" class="form-control form-control-lg" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo2_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo2_condutor" id="seguro_veiculo2_condutor" class="form-control form-control-lg" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>
        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12" style="display:none">Dados do Veículo 3: </h6>
            <label for="placa_veiculo3_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg" style="display:none">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="hidden" value="null" id="placa_veiculo3_condutor" name="placa_veiculo3_condutor" class="form-control form-control-lg" placeholder="">
            </div>
        </div>

        <div class="form-group row">
            <label for="marca_veiculo3_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg" style="display:none">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="hidden" value="null" id="marca_veiculo3_condutor" name="marca_veiculo3_condutor" class="form-control form-control-lg" >
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo3_condutor" class="col-12 col-form-label col-form-label-lg" style="display:none">Modelo:</label>
            <div class="col-12">
                <input type="hidden" value="null" id="modelo_veiculo3_condutor" name="modelo_veiculo3_condutor" class="form-control form-control-lg">
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo3_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg" style="display:none">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo3_condutor" id="seguro_veiculo3_condutor" class="form-control form-control-lg" style="display:none">
                    <option value="null">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>
    <?php
    }

    if($Quantidade == 3){
    ?>
        <hr>
        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12">Dados do Veículo 1: </h6>
            <label for="placa_veiculo1_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="BBB1111" id="placa_veiculo1_condutor" name="placa_veiculo1_condutor" class="form-control form-control-lg" placeholder="ABC1234" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="marca_veiculo1_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="VW" id="marca_veiculo1_condutor" name="marca_veiculo1_condutor" class="form-control form-control-lg" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo1_condutor" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
            <div class="col-12">
                <input type="text" value="GOL" id="modelo_veiculo1_condutor" name="modelo_veiculo1_condutor" class="form-control form-control-lg" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo1_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo1_condutor" id="seguro_veiculo1_condutor" class="form-control form-control-lg" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>

        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12">Dados do Veículo 2: </h6>
            <label for="placa_veiculo2_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="BBB2222" id="placa_veiculo2_condutor" name="placa_veiculo2_condutor" class="form-control form-control-lg" placeholder="ABC1234" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="marca_veiculo2_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="FIAT" id="marca_veiculo2_condutor" name="marca_veiculo2_condutor" class="form-control form-control-lg" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo2_condutor" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
            <div class="col-12">
                <input type="text" value="PALIO" id="modelo_veiculo2_condutor" name="modelo_veiculo2_condutor" class="form-control form-control-lg" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo2_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo2_condutor" id="seguro_veiculo2_condutor" class="form-control form-control-lg" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>
        <div class="col-xs-12 col-md-4 float-left" style="margin-top:25px">
        <div class="form-group row">
            <h6 class="col-12">Dados do Veículo 3: </h6>
            <label for="placa_veiculo3_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Placa:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="BBB3333" id="placa_veiculo3_condutor" name="placa_veiculo3_condutor" class="form-control form-control-lg" placeholder="ABC1234" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="marca_veiculo3_condutor" class="col-xs-12 col-md-12 col-form-label col-form-label-lg">Marca:</label>
            <div class="col-xs-12 col-md-12">
                <input type="text" value="FORD" id="marca_veiculo3_condutor" name="marca_veiculo3_condutor" class="form-control form-control-lg" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="modelo_veiculo3_condutor" class="col-12 col-form-label col-form-label-lg">Modelo:</label>
            <div class="col-12">
                <input type="text" value="KA" id="modelo_veiculo3_condutor" name="modelo_veiculo3_condutor" class="form-control form-control-lg" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="seguro_veiculo3_condutor" class="col-xs-12 col-md-5 col-form-label col-form-label-lg">Seguro:</label>
            <div class="col-xs-12 col-md-7">
                <select name="seguro_veiculo3_condutor" id="seguro_veiculo3_condutor" class="form-control form-control-lg" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
        </div>

        </div>
    <?php
    }
}
?>
