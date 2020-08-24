<?php
if( isset($_GET['Acionado']) ){
    $OutroVeiculo = $_GET['Acionado'];
    if($OutroVeiculo == 1){
        sleep(1);
        ?>
        <label for="veiculos_quantidade" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">Quantos:</label>
        <div class="col-sm-12 col-md-9 float-left">
            <select id="veiculos_quantidade" onchange="quantidadeAdicionarCondutor()" name="veiculos_quantidade" class="form-control form-control-lg" required>
                <option value="" selected disabled>Selecione</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <?php
    }else{
    ?>
    <label for="veiculos_quantidade" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">Adicionais:</label>
    <div class="col-sm-12 col-md-9 float-left">
        <select id="veiculos_quantidade" name="veiculos_quantidade" class="form-control form-control-lg" required>
            <option value="0" selected >0</option>
        </select>
    </div>
    <?php
    }
}