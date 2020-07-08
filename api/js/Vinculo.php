<?php
if(isset($_GET['V'])){
    session_start();
    require_once "../config/configuration.php";
    $Vinculo = $_GET['V'];
    if($Vinculo == "Associado"){
        sleep(1);
        $CPFAssociado = $_SESSION['CadastroSindicancia1'][4];
        $QueryBuscarAssociado = "SELECT nome_associado FROM tb_associados WHERE cpf_associado = '$CPFAssociado'";
        $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
        $ResQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);

        if($ResQrBuscarAssociado >= 1){
            while($Return = mysqli_fetch_assoc($ExeQrBuscarAssociado)){
            ?>
                <label for="nome_proprietario_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">Nome do Proprietário: </label>
                <div class="col-sm-12 col-md-9 float-left">
                    <input 
                        type="text" 
                        name="nome_proprietario_veiculo" 
                        id="nome_proprietario_veiculo" 
                        class="form-control form-control-lg"
                        value="<?php echo $Return['nome_associado']?>"
                    >
                </div>

            <?php
            }
        }
    
    }else{
    sleep(1);
    ?>
        <label for="nome_proprietario_veiculo" class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left">Nome do Proprietário: </label>
        <div class="col-sm-12 col-md-5 float-left">
            <input type="text" name="nome_proprietario_veiculo" id="nome_proprietario_veiculo" class="form-control form-control-lg">
        </div>

        <label for="vinculo_associado" class="col-xs-12 col-md-2 col-form-label col-form-label-lg float-left">Vínculo: </label>
        <div class="col-xs-12 col-md-2 float-left">
            <select name="vinculo_associado" id="vinculo_associado" class="form-control form-control-lg" required>
                <option value="" disabled selected>Selecione</option>
                <option value="0">Sem Vículo</option>
                <option value="1">Pai</option>
                <option value="2">Mãe</option>
                <option value="3">Irmão</option>
                <option value="4">Amigo</option>
                <option value="5">Comercial</option>
            </select>
        </div>
    <?php
    }
}