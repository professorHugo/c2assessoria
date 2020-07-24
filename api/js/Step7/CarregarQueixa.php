<?php
if(isset($_GET['Q'])){
    sleep(1);
    $Multa = $_GET['Q'];

    if($Multa == 1){
    ?>
        <input type="file" id="print_queixa_registrada" name="print_queixa_registrada">
        <label for="print_queixa_registrada" class="label-file" id="print_queixa_registrada">Carregar Print</label>
        <span id="name_print_queixa_registrada" class="file-name"></span>
    <?php
    }else{
    ?>
        <input type="file" id="print_queixa_registrada" name="print_queixa_registrada">
        <label for="print_queixa_registrada" class="label-file" id="print_queixa_registrada">Carregar Print</label>
        <span id="name_print_queixa_registrada" class="file-name"></span>
    <?php
    }
}