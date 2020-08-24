<?php
if(isset($_GET['CPF'])){
    
    include_once '../../config/Config.php';
    $CPF = $_GET['CPF'];
    $QueryBuscarAssociado = "SELECT * FROM tb_associados WHERE cpf_associado = '$CPF'";

    $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
    $CountBuscarAssociado = mysqli_affected_rows($connection);

    if($CountBuscarAssociado >= 1){
        while($ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado)){
            ?>
            <input type="hidden" name="nome_associado" value="<?php echo $NomeReturn = $ReturnAssociado['nome_associado'];?>" id="nome_associado_return" class="sr-only">
            <input type="text" id="nome_associado_return" disabled class="form-control form-control-lg" placeholder="<?php echo $NomeReturn = $ReturnAssociado['nome_associado'];?>"> 
            <?php
        }
    }else{
    ?>
        <input type="hidden" name="cpf_associado_novo" value="<?php echo $CPF?>">
        <input type="hidden" name="novo_associado">
        <input type="text" name="nome_associado_return" class="form-control form-control-lg" placeholder="Nome Completo"> 
    <?php
    }
}