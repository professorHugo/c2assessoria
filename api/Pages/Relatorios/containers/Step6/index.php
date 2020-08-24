<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Procedência do Veículo</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include_once "Dados-Passo5.php";
include_once "container/Print-Midias-Sociais.php";

include_once "Form.php";
// include_once 
if( $_SESSION['CondutorVeiculo'] == 1 ){
    //Dados caso o condutor seja o associado
    // include_once "container/Condutor-Associado.php";
}else{
    //Dados caso o condutor seja terceiro
    // echo "<br><b>Condutor Terceiro</b>:";
    include_once "container/Condutor-Terceiro.php";
    echo "<br>";
}

//cadastrar dados no banco de dados
include_once "Cadastrar-Dados-Passo5.php";