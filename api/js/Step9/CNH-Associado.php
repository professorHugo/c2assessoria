<?php
if(isset($_GET['A'])){
    $CNH = $_GET['A'];
    sleep(1);

    if( $CNH !== '5' ){
    ?>
        <input type="file" id="foto_cnh_associado" name="foto_cnh_associado">
        <label for="foto_cnh_associado" class="label-file">Carregar</label>
    <?php
    }
}