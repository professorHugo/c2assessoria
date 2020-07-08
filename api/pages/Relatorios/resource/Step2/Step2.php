<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Condutor e Veículo</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
    
    include_once "Include_Step1.php";
    include_once "Form.php";
    include_once "Cadastrar-Dados-Passo1.php";
    
?>

