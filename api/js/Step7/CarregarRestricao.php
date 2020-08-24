<?php
if(isset($_GET['R'])){
    sleep(1);
    $Multa = $_GET['R'];

    if($Multa == 1){
    ?>
        <input type="file" id="print_restricoes_diversas" name="print_restricoes_diversas">
        <label for="print_restricoes_diversas" class="label-file" id="print_restricoes_diversas">Carregar Print</label>
        <span id="name_print_restricoes_diversas" class="file-name"></span>
    <?php
    }else{
    ?>
        <input type="file" id="print_restricoes_diversas" name="print_restricoes_diversas">
        <label for="print_restricoes_diversas" class="label-file" id="print_restricoes_diversas">Carregar Print</label>
        <span id="name_print_restricoes_diversas" class="file-name"></span>
    <?php
    }
}