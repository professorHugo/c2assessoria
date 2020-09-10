<?php
if(isset($_GET['S'])){
    sleep(1);
    $Situacao = $_GET['S'];

    if($Situacao > 1 ){
    ?>
        <label for="quantidade_inadimplente" class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left">
            Quantidade: 
        </label>
        <div class="col-sm-12 col-md-4 float-left">
            <input type="number" 
                class="form-control form-control-lg" 
                placeholder="Qtd Inadimplência"
                id="quantidade_inadimplente"
                name="quantidade_inadimplente"
            >
        </div>
    <?php
    }else{

    }
}