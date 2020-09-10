<?php
if( isset($_GET['SIN']) ){
    $Militar = $_GET['SIN'];

    if( $Militar == 1 ){
        //Exibir Caixa de upload
    ?>
    <label 
        for="arquivo_sinesp" 
        class="col-sm-12 col-md-2 col-form-label col-form-label-lg float-left"
    >
        Print: 
    </label>
    <div class="col-sm-12 col-md-3 float-left">
        <select 
            name="arquivo_sinesp" 
            id="arquivo_sinesp"
            class="form-control form-control-lg"
            onchange="EscolherArquivoSINESP()"
        >
            <option value="" selected disabled>Escolha</option>
            <option value="1">Sim</option>
            <option value="2">Não</option>
        </select>
    </div>
    <div class="col-sm-12 col-md-7 float-left" id="return_arquivo_sinesp">
    <!-- Return com Ajax -->
    </div>
    <?php
    }else{
        ?>
    
        <input 
            type="text" 
            name="policia_militar_acionada" 
            id="policia_militar_acionada"
            class="col-12"
            style="
                border: none;
                box-sizing: border-box;
                padding: 5px 20px;
                color: var(--blue);
                height: 45px;
                font-size: 1.2rem;
                vertical-align: middle;
            "
            readonly
            value="Não Acionada"
        >
        <?php 
    }
}