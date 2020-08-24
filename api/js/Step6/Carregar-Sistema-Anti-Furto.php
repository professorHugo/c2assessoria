<?php
if(isset($_GET['T'])){
    $Tipo = $_GET['T'];
    sleep(1);
    switch($Tipo){
        case 0 : 
            ?>
            <label for="name_foto_sistema" class="label-file">Não há sistema antifurto</label>
            <?php
        break;

        case 1 : ?>
        
            <input type="file" id="foto_sistema" name="foto_sistema"><?php
            
        break;

        case 2 : 
            ?>
            <input type="file" id="foto_sistema" name="foto_sistema">
            <span id="name_foto_sistema" class="file-name"></span>
            <?php
        break;

        case 3 : 
            ?>
            <input type="file" id="foto_sistema" name="foto_sistema">
            <span id="name_foto_sistema" class="file-name"></span>
            <?php
        break;

        case 4 : 
            ?>
            <input type="file" id="foto_sistema" name="foto_sistema">
            <span id="name_foto_sistema" class="file-name"></span>
            <?php
        break;

    }
}