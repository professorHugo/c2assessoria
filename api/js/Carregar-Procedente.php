<?php
if(isset($_GET['P'])){
    $Procedente = $_GET['P'];
    sleep(1);
    if($Procedente != 0){
    ?>
        <input type="file" id="foto_procedente" name="foto_procedente">
    <?php
    }else{
    ?>
        <label for="foto_procedente" class="label-file">Não foi apresentado</label>
        <input type="hidden" id="foto_procedente" value="0">
    <?php
    }
}