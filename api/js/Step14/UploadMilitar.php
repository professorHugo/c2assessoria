<?php
if( isset($_GET['M']) ){
    $Militar = $_GET['M'];

    if( $Militar == 1 ){
        //Exibir Caixa de upload
    ?>
    
    <input 
        type="file" 
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
            cursor:pointer;
        "
        
    >
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