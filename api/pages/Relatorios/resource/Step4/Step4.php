<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Associado</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
    include_once "Include_Passo3.php";
    include_once "Form.php";
    include_once "Cadastrar-Dados-Passo3.php";
?>