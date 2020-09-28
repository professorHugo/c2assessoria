<?php
if( isset($_GET['registro']) ){
    $Registro = $_GET['registro'];

    if( $Registro == 1 ){
        ?>
            <label 
                for="registros_convergem" 
                class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left"
            >Registros Convergem: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select 
                    name="registros_convergem" 
                    id="registros_convergem" 
                    class="form-control form-control-lg"
                    required
                >
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">SIM, EM DATA, HORÁRIO E LOCAL</option>
                    <option value="2">NÃO CONVERGEM</option>
                </select>
            </div>
            <label 
                for="motorista_app" 
                class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left"
            >Motorista de Aplicativos: 
            </label>
            <div class="col-sm-12 col-md-2 float-left">
                <select 
                    name="motorista_app" 
                    id="motorista_app" 
                    class="form-control form-control-lg"
                    required
                    onchange="CarregarAplicativos();"
                >
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
        <?php

    }

}