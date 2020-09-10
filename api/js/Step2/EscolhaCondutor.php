<?php
session_start();
if(isset($_GET['Escolha'])){
    
    $Escolha = $_GET['Escolha'];
    if($Escolha == 1){
    ?>
        <input 
        type="text" 
        id="nome_condutor" 
        name="" 
        class="form-control form-control-lg" 
        placeholder="<?php echo $_SESSION['NomeAssociado']?>"
        disabled>
        <input 
        type="hidden" 
        id="nome_condutor" 
        name="nome_condutor" 
        class="form-control form-control-lg" 
        value="<?php echo $_SESSION['NomeAssociado']?>"
        >
    <?php
    }else{
       ?>
        <input 
        type="text" 
        id="nome_condutor" 
        name="nome_condutor" 
        class="form-control form-control-lg" 
        >
       <?php 
    }
}else {
    echo 'Erro';
}