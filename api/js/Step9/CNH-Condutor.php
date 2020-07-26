<?php
if(isset($_GET['F'])){
    $CNH = $_GET['F'];
    sleep(1);

    if( $CNH !== '5' ){
    ?>
        <input type="file" id="foto_chn_condutor" name="foto_chn_condutor">
        <label for="foto_chn_condutor" class="label-file">Carregar</label>

    <?php
    }
}