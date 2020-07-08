<script src="js/BuscarAssociados.js"></script>
<script src="js/EscolhaCondutor.js"></script>
<script src="js/BuscarCEPEvento.js"></script>
<script src="js/Veiculos-Adicionais.js"></script>
<script src="js/Apontamento-Rede-Social-Associado.js"></script>


<div class="clearfix"></div>
<style>
    input[type='file']{
        /* display: none!important; */
        padding: 10px;
        background: #e9ecef;
        color: #495057;
        cursor:pointer;
    }
    .label-file{
        align-items: center;
        padding: 0.5em;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef!important;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        cursor:pointer;
        transition: .3s;
    }
    .label-file:hover{
        background-color: #6D6F70!important;
        color: #fff;
    }
    .file-name{
        align-items: center;
        padding: 0.5em;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        /* background-color: #e9ecef!important; */
        /* border: 1px solid #ced4da; */
        border-radius: .25rem;
    }
</style>

<?php

if(isset($_GET['Cadastrar'])){
    if(isset($_GET['Step'])){
        $Step = $_GET['Step'];

        switch($Step){
            case $Step:
                include_once "Relatorios/resource/Step".$Step."/Step".$Step.".php";break;
            default: include_once "Relatorios/Relatorios-Entregues.php";break;
        }
    }else{
        include_once "Relatorios/Relatorios-Entregues.php";
    }
}else{
    include_once "Relatorios/Relatorios-Entregues.php";
}

for($i = 0 ; $i <=15; $i++){
    if(isset($_SESSION["CadastroSindicancia$i"])){
        // unset($_SESSION["CadastroSindicancia$i"]);
        ?>
        <div class="col-4 float-left">
        Passo <?php echo $i?>: <br>
            <pre>
            <?php print_r($_SESSION["CadastroSindicancia$i"]); ?>
            </pre>
        </div>
        
        <?php
    }
}
?>