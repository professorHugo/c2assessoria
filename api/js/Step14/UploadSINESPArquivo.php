<?php
if( isset($_GET['A']) ){
    $Militar = $_GET['A'];

    if( $Militar == 1 ){
        //Exibir Caixa de upload
    ?>
    
    <input 
        type="file" 
        name="file_sinesp" 
        id="file_sinesp"
        class="col-12"
        style="
            border: none;
            box-sizing: border-box;
            padding: 5px 0;
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
            name="file_sinesp" 
            id="file_sinesp"
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
            value="Não Apresentada"
        >
        <?php 
    }
}