<?php
if( isset($_GET['M']) ){
    $Mobilidade = $_GET['M'];

    if( $Mobilidade == 1 ){

        ?>

            <label 
                for="irregularidades" 
                class="col-sm-6 col-md-3 col-form-form-label col-form-label-lg float-left"
            >
                Irregularidades Apontadas:
            </label>
            <div class="col-sm-6 col-md-3 float-left">
                <select name="irregularidades" id="irregularidades" class="form-control form-control-lg" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <label 
                for="registros_convergem" 
                class="col-sm-6 col-md-3 col-form-form-label col-form-label-lg float-left"
                id="registros_convergem"
            >
                Registros Convergem: 
            </label>
            <div class="col-sm-6 col-md-3 float-left">
                <select name="registros_convergem" id="registros_convergem" class="form-control form-control-lg" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>

        <?php

    }
}