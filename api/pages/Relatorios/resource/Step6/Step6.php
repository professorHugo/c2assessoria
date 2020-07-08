<script src="js/ProprietarioLegal.js"></script>
<script src="js/Carregar-Procedente.js"></script>
<script src="js/Carregar-Foto-Chaves.js"></script>
<script src="js/Carregar-Print-Rastreador.js"></script>

<style>
    input[type='file']{
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

<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Procedência do Veículo</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php

    //incluir dados do Passo4 - ok
    include_once "Include_Passo4.php";

    
    //Upload do Print do passo 4 - ok
    include_once "PrintMidiasSociais.php";

    if($_SESSION['CadastroSindicancia2'][0] == 1){
        include_once "IncludeAssociadoVeiculoProprio.php";
    }else{
        include_once "Outro_Condutor.php";
    }

    //Novos dados à acrescentar em uma nova session    
    include_once "Include_NovaSession.php";

    include_once "Form.php";
    
    if(isset($_POST['passo5'])){
        include_once "Cadastrar-Dados-Passo5.php";
    }else{
        include_once "Cadastrar-Dados-Passo4.php";
    }

?>