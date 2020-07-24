<?php
if(isset($_GET['F'])){
    sleep(1);
    $Multa = $_GET['F'];

    if($Multa == 1){
    ?>
        <input type="file" id="print_restricoes_financeiras" name="print_restricoes_financeiras">
        <label for="print_restricoes_financeiras" class="label-file" id="print_restricoes_financeiras">Carregar Print</label>
        <span id="name_print_restricoes_financeiras" class="file-name"></span>
    <?php
    }else{
    ?>
        <input type="file" id="print_restricoes_financeiras" name="print_restricoes_financeiras">
        <label for="print_restricoes_financeiras" class="label-file" id="print_restricoes_financeiras">Carregar Print</label>
        <span id="name_print_restricoes_financeiras" class="file-name"></span>
    <?php
    }
}