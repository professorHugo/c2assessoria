<?php
if(isset($_GET['CPF'])){
    
    include_once '../config/configuration.php';
    $CPF = $_GET['CPF'];
    $QueryBuscarAssociado = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";

    sleep(1);
    $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
    $CountBuscarAssociado = mysqli_affected_rows($connection);

    if($CountBuscarAssociado >= 1){
        while($ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado)){
            ?>
            <input type="hidden" name="nome_associado" value="<?php echo $NomeReturn = $ReturnAssociado['nome_associado'];?>" id="nome_associado_return" class="sr-only">
            <input type="text" id="nome_associado_return" disabled class="form-control form-control-lg" placeholder="<?php echo $NomeReturn = $ReturnAssociado['nome_associado'];?>"> 
            <?php
        }
    }
}