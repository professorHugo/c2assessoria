<?php
if(isset($_GET['C'])){
    sleep(1);
    $FotoChaves = $_GET['C'];
    if($FotoChaves != 3){
    ?>
        <input type="file" id="foto_chaves_apresentadas" name="foto_chaves_apresentadas">
        <label for="foto_chaves_apresentadas" class="label-file" id="foto_chaves_apresentadas">Carregar Print</label>
        <span id="name_foto_chaves_apresentadas" class="file-name"></span>
    <?php
    }else{
    ?>
        <label for="foto_chaves_apresentadas" class="label-file">Foto Não Apresentada</label>
        <input type="hidden" id="foto_chaves_apresentadas" value="0">
    <?php
    }
}