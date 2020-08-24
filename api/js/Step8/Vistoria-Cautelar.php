<?php
if(isset($_GET['A'])){
    $Vistoria = $_GET['A'];
    sleep(1);

    if($Vistoria == 1){
    ?>
        <div class="col-12"><hr></div>
        <label for="data_vistoria" class="col-sm-12 col-md-1 col-form-label col-form-label-lg">Data:</label>
        <div class="col-sm-12 col-md-3">
            <input type="date" name="data_vistoria" id="data_vistoria" class="form-control form-control-lg">
        </div>
        <label for="situacao_vistoria" class="col-sm-12 col-md-1 col-form-label col-form-label-lg">Situação</label>
        <div class="col-sm-12 col-md-3">
            <select name="situacao_vistoria" id="situacao_vistoria" class="form-control form-control-lg">
                <option value="" selected disabled>Selecione</option>
                <option value="1">Aprovada</option>
                <option value="2">Não Aprovada</option>
                <option value="3">Não Efetuada</option>
            </select>
        </div>
        <label for="print_vistoria_cautelar" class="label-file col-sm-12 col-md-1">Carregar</label>

        <div class="col-sm-12 col-md-3">
            <input type="file" id="print_vistoria_cautelar" name="print_vistoria_cautelar" width="100%">
        </div>
    <?php
    }
}