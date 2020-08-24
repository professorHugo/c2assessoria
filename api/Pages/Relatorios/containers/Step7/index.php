<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Apontamentos Detran</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include_once "Form.php";
include_once "Dados-Passo6.php";
include_once "container/Uploads.php";
include_once "Cadastrar-Dados-Passo6.php";