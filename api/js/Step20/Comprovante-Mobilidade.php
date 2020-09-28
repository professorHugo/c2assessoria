<?php
if( isset($_GET['comprovante']) ){
    $Mobilidade = $_GET['comprovante'];
    sleep(1);
    if( $Mobilidade == 1 ){
        //Se apresentar comprovante de mobilidade
        ?>
            <label 
                for="comprovante_mobilidade_f" 
                class="col-sm-3 col-md-2 col-form-label col-form-label-lg float-left"
            >Arquivo: 
            </label>
            <div class="col-sm-9 col-md-4 float-left">
                <input 
                    type="file" 
                    name="comprovante_mobilidade_f" 
                    id="comprovante_mobilidade_f"
                    style="
                        height: calc(1.5rem + 1rem + 2px);
                        padding: .5rem 1rem;
                        display: block;
                        width: 100%;
                    "
                >
            </div>
            <div class="col-sm-5 col-md-2 float-left">
                <input 
                    type="checkbox" 
                    name="utilizado_no_dia" 
                    id="utilizado_no_dia"
                    class="float-left"
                    style="
                        height: calc(1.5rem + 1rem + 2px);
                        padding: .5rem 1rem;
                        display: block;
                        width: 15%;
                    "
                >
                <label for="utilizado_no_dia" class="col-form-form-label col-form-label-lg float-left">
                    &nbsp;Usado no dia
                </label>
            </div>
            <div class="col-sm-7 col-md-4">
                <label 
                    for="instalado_em" 
                    class="col-6 col-form-form-label col-form-label-lg float-left"
                >
                    Usado por: 
                </label>
                <div class="col-6 float-left">
                    <select 
                        name="instalado_em" 
                        id="instalado_em" 
                        class="form-control form-control-lg"
                        required
                        onchange="CarregarNome()"
                    >
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Associado</option>
                        <option value="2">Terceiros</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr 
                style="
                    margin-top: 1rem; 
                    margin-bottom:1rem; 
                    border:0; 
                    border-top:1px solid rgba(0,0,0,.1); 
                    width: 100%
                "
            >
        <?php
    }else{
        //Se não apresentar comprovante

    }
}