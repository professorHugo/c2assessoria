<?php
if(isset($_GET['F'])){
    $CNH = $_GET['F'];
    sleep(1);

    if( $CNH !== '5' ){
    ?>
        <input type="file" id="foto_cnh_condutor" name="foto_cnh_condutor">
        <label for="foto_cnh_condutor" class="label-file">Carregar</label>
    <?php
    }else{
    ?>
    <input type="hidden" name="foto_cnh_condutor" value="1">
    <?php
    }
}