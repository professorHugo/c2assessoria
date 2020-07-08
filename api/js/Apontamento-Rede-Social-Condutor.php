<?php
if(isset($_GET['A'])){
    sleep(1);
    if($_GET['A'] == "Sim"){
    ?>
    <input type="file" id="print_midias_sociais_condutor" name="print_midias_sociais_condutor">
    <label for="print_midias_sociais_condutor" class="label-file" id="print_midias_sociais_condutor">Carregar Print</label>
    <span id="name_print_midias_sociais_condutor" class="file-name"></span>
    <?php
    }
}
?>

