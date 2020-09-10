<?php
if( isset($_GET['BO']) ){
    $Militar = $_GET['BO'];

    if( $Militar == 1 ){
        //Exibir Caixa de upload
    ?>
    
    <input 
        type="file" 
        name="boletim_ocorrencia" 
        id="boletim_ocorrencia"
        class="col-10 float-left"
        style="
            border: none;
            box-sizing: border-box;
            padding: 5px 20px;
            color: var(--blue);
            height: 45px;
            font-size: 1.2rem;
            vertical-align: middle;
            cursor:pointer;
        "
    >
    <label for="boletim_autentico" class="col-2 float-left">
        Autêntico? 
        <input 
            type="checkbox" 
            name="boletim_autentico" 
            id="boletim_autentico"
        > Sim
    </label>
    <?php
    }else{
        ?>
    
        <input 
            type="text" 
            name="boletim_ocorrencia" 
            id="boletim_ocorrencia"
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
            value="Não Apresentado"
        >
        <?php 
    }
}