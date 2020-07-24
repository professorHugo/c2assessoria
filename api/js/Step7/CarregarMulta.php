<?php
if(isset($_GET['E'])){
    sleep(1);
    $Multa = $_GET['E'];

    if($Multa == 1){
    ?>
        <input type="file" id="print_multa_evento" name="print_multa_evento">
        <label for="print_multa_evento" class="label-file" id="print_multa_evento">Carregar Print</label>
        <span id="name_print_multa_evento" class="file-name"></span>
    <?php
    }else{
    ?>
        <input type="file" id="print_multa_evento" name="print_multa_evento">
        <label for="print_multa_evento" class="label-file" id="print_multa_evento">Carregar Print</label>
        <span id="name_print_multa_evento" class="file-name"></span>
    <?php
    }
}